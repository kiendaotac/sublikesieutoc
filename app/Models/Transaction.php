<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'reference', 'amount', 'description', 'date', 'raw_data'];

    protected $casts = [
        'data'     => 'date',
        'raw_data' => 'array'
    ];
}
