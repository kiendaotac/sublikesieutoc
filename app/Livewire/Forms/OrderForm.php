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
    public string $targetIdentify;
    #[Rule('required|int|min:1')]
    public int $target = 1, $original;
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
            'original'       => 'số lượng ban đầu',
            'target'         => 'số lượng tăng thêm',
            'note'           => 'ghi chú',
            'term'           => 'điều khoản'
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
        $userId = Auth::id();
        $product = Product::findOrFail($this->product_id);
        $data   = [
            'service_id'      => $this->service->id,
            'product_id'      => $this->product_id,
            'user_id'         => $userId,
            'service_type'    => $this->service->type,
            'target_identify' => $this->targetIdentify,
            'target'          => $this->target,
            'original'        => $this->original,
            'price'           => $product->price,
            'amount'          => $this->orderService->calculateAmount($this->target, $product),
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
