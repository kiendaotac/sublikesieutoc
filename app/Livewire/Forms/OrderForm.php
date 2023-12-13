<?php

namespace App\Livewire\Forms;

use App\Enums\OrderStatusEnum;
use App\Models\Product;
use App\Models\Service;
use App\Services\BalanceService;
use App\Services\OrderService;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Form;
use Spatie\Activitylog\ActivityLogger;
use Spatie\Activitylog\ActivityLogStatus;

class OrderForm extends Form
{
    #[Rule('required|active_url')]
    public $targetIdentify;
    public $target = 1;
    #[Rule('nullable|string')]
    public ?string $note = null;
    public Service $service;
    #[Rule('required|bool|in:1')]
    public bool $term = false;
    #[Validate('required|int')]
    public $product_id;

    private OrderService $orderService;
    private BalanceService $balanceService;

    public function __construct(Component $component, $propertyName)
    {
        parent::__construct($component, $propertyName);
        $this->orderService   = app(OrderService::class);
        $this->balanceService = app(BalanceService::class);
    }


    public function validationAttributes(): array
    {
        return [
            'targetIdentify' => 'link bài viết',
            'target'         => 'số lượng tăng thêm',
            'note'           => 'ghi chú',
            'term'           => 'điều khoản',
            'product_id'     => 'sản phẩm'
        ];
    }

    public function messages(): array
    {
        return [
            'term.*' => 'Bạn phải chấp nhận điều khoản trước'
        ];
    }
    public function setService(Service $service): void
    {
        $this->service = $service;
    }

    /**
     * @throws \Throwable
     */
    public function store()
    {
        $this->validate();
        $user = Auth::user();
        $userId = Auth::id();
        $product = Product::findOrFail($this->product_id);
        if (!is_null($product->min_target) && $this->target < $product->min_target) {
            $this->addError('target', 'Số lượng tăng tối thiếu là: ' . $product->min_target);
            return ;
        }
        if (!is_null($product->max_target) && $this->target > $product->max_target) {
            $this->addError('target', 'Số lượng tăng tối đa là: ' . $product->max_target);
            return ;
        }
        $amount = $this->orderService->calculateAmount($this->target, $product);
        if ($user->balance < $amount) {
            $this->addError('error', 'Số tiền trong tài khoản của bạn không đủ để thanh toán đơn hàng.');
            return ;
        }
        $data   = [
            'service_id'      => $this->service->id,
            'product_id'      => $this->product_id,
            'user_id'         => $userId,
            'service_type'    => $this->service->type,
            'target_identify' => $this->targetIdentify,
            'target'          => $this->target,
            'original'        => 0,
            'price'           => $product->price,
            'amount'          => $amount,
            'extra_data'      => [],
            'note'            => $this->note,
            'status'          => OrderStatusEnum::STATUS_PENDING->value,
        ];
        $order  = $this->orderService->create($data);
        app(ActivityLogger::class)
            ->useLog(config('filament-logger.order.log_name'))
            ->setLogStatus(app(ActivityLogStatus::class))
            ->performedOn($order)
            ->withProperties($order->toArray())
            ->event('Order')
            ->log('Tạo đơn hàng');
        $isPaid = $this->balanceService->purchase($userId, $order->amount, 'Thanh toán đơn hàng: #' . $order->id);
        if ($isPaid) {
            $this->orderService->confirmPaid($order->id);
        }

        # redirect to dashboard
        return redirect()->route('dashboard');
    }
}
