<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = ['bank_name', 'short_name', 'bank_logo', 'bank_code', 'bin', 'card_name', 'card_number', 'amount', 'command', 'template', 'status'];
}
