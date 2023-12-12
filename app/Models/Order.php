<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'product_id', 'user_id', 'service_type', 'target_identify', 'target', 'original', 'done', 'price', 'amount', 'extra_data', 'note', 'status', 'finished_at'];

    protected $casts = [
        'extra_data' => 'array',
        'status'     => OrderStatusEnum::class,
        'finished_at' => 'datetime'
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
