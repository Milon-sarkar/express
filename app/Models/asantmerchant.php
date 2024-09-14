<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asantmerchant extends Model
{
    use HasFactory;
    protected $fillable = [
        'pickupboy_id','merchant_id',
    ];
}
