<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\BalanceHistory
 *
 * @property int $id
 * @property int $user_id
 * @property int $old_balance
 * @property int $amount âm là trừ tiền, dương là cộng tiền
 * @property int $balance
 * @property string $type
 * @property string|null $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereOldBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BalanceHistory whereUserId($value)
 */
	class BalanceHistory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BankAccount
 *
 * @property int $id
 * @property string $bank_name
 * @property string $short_name
 * @property string $bank_logo
 * @property string $bank_code
 * @property string $bin
 * @property string $card_name
 * @property string $card_number
 * @property int|null $amount
 * @property string|null $command
 * @property string $template
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereBankCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereBankLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereBin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereCardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereCardNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankAccount whereUpdatedAt($value)
 */
	class BankAccount extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property int $service_id
 * @property int|null $product_id
 * @property int $user_id
 * @property string $service_type
 * @property string $target_identify
 * @property int $target
 * @property int $original
 * @property int $price
 * @property int $amount
 * @property array|null $extra_data
 * @property string|null $note
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product|null $product
 * @property-read \App\Models\Service|null $service
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereExtraData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereServiceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTargetIdentify($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $service_id
 * @property string $name
 * @property int $price
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service|null $service
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property string $slug
 * @property string $type
 * @property string $icon
 * @property int $price
 * @property mixed|null $extra_data
 * @property string|null $description
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Service> $children
 * @property-read int|null $children_count
 * @property-read Service|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereExtraData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Transaction
 *
 * @property int $id
 * @property int $user_id
 * @property string $reference
 * @property int $amount
 * @property string $description
 * @property string $date
 * @property array $raw_data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereRawData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUserId($value)
 */
	class Transaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string|null $phone
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property int $balance
 * @property string|null $remember_token
 * @property string $status
 * @property string|null $hash
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BalanceHistory> $balanceHistories
 * @property-read int|null $balance_histories_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser {}
}

namespace App\Models{
/**
 * App\Models\Voucher
 *
 * @property int $id
 * @property int $voucher_rule_id
 * @property string $name
 * @property string|null $description
 * @property string $discount_type
 * @property float $discount
 * @property int|null $max_amount
 * @property \Illuminate\Support\Carbon $start_time
 * @property \Illuminate\Support\Carbon $end_time
 * @property \App\Enums\CommonStatusEnum $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\VoucherRule|null $rule
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher query()
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereMaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Voucher whereVoucherRuleId($value)
 */
	class Voucher extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VoucherRule
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $min_amount
 * @property int|null $max_amount
 * @property \App\Enums\CommonStatusEnum $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule query()
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule whereMaxAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule whereMinAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherRule whereUpdatedAt($value)
 */
	class VoucherRule extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VoucherTransaction
 *
 * @property int $id
 * @property int $transaction_id
 * @property int $voucher_id
 * @property int $order_amount
 * @property int $discount_amount
 * @property int $amount
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction whereOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VoucherTransaction whereVoucherId($value)
 */
	class VoucherTransaction extends \Eloquent {}
}

