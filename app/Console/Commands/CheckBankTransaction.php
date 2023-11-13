<?php

namespace App\Console\Commands;

use App\Models\Transaction;
use App\Models\User;
use App\Services\BalanceService;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CheckBankTransaction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bank:check-bank-transaction';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lấy lịch sử giao dịch ngân hàng';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $response = Http::post('https://api.vnitshare.com/vcb/transactions', [
                'username'       => '0989809700',
                'password'       => 'Trang@01022020',
                'account_number' => '0821000115006'
            ])->json();

            foreach ($response['data']['ChiTietGiaoDich'] ?? [] as $transaction) {
                if ($transaction['CD'] == '+') {
                    $this->processTransaction($transaction);
                }
            }
        } catch (\Exception $exception) {
            Log::error('Lấy thông tin giao dịch lỗi:' . $exception->getMessage());
        }
        return 0;
    }

    private function processTransaction(mixed $transaction): void
    {
        try {
            \DB::beginTransaction();
            $check = preg_match('/naptien\s(\w*)/i', $transaction['MoTa'], $matches);
            if ($check) {

                $username = trim($matches[1]);

                $user = User::where('username', $username)->firstOrFail();

                $reference = $transaction['SoThamChieu'];

                $amount = intval(str_replace(',', '', $transaction['SoTienGhiCo']));

                $description = $transaction['MoTa'];

                $date = Carbon::createFromFormat('d/m/Y', $transaction['NgayGiaoDich'])->toDateString();

                $log = Transaction::query()
                    ->where('description', $description)
                    ->whereDate('date', $date)
                    ->exists();

                if (!$log) {
                    $transaction = Transaction::create([
                        'user_id'     => $user->id,
                        'reference'   => $reference,
                        'amount'      => $amount,
                        'description' => $description,
                        'date'        => $date,
                        'raw_data'    => $transaction
                    ]);
                    if ($transaction) {
                        $this->info("Cộng $amount cho tài khoản $username");
                        $reason = "Nạp tiền Vietcombamk " . date("d/m/Y") . "\nNội dung: `{$description}` Transaction Id: {$transaction->id}";
                        $this->info($reason);
                        app(BalanceService::class)->deposit($user->id, $amount, $reason);
                    }
                }
                \DB::commit();
            }
        } catch (\Exception $exception) {
            \DB::rollBack();
            Log::error("Lỗi xử lý giao dịch: " . $exception->getMessage());
        } catch (\Throwable $e) {
            Log::error("Lỗi database: " . $e->getMessage());
        }
    }
}
