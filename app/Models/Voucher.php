<?php

namespace App\Models;

use App\Enums\CommonStatusEnum;
use App\Enums\DiscountTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = ['voucher_rule_id', 'name', 'description', 'discount_type', 'discount', 'max_amount', 'status', 'start_time', 'end_time'];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time'   => 'datetime',
        'status'     => CommonStatusEnum::class,
        'discount_type' => DiscountTypeEnum::class,
    ];

    public function rule(): BelongsTo
    {
        return $this->belongsTo(VoucherRule::class, 'voucher_rule_id', 'id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'voucher_user');
    }
}
