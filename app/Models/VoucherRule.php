<?php

namespace App\Models;

use App\Enums\CommonStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherRule extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'min_amount', 'max_amount', 'status'];

    protected $casts = [
        'status' => CommonStatusEnum::class
    ];
}
