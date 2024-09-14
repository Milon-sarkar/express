<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Parcel extends Model
{
    use HasFactory;
    protected $fillable = [
        'merchant_id','cus_name','phone','address','invoice_no','product_weight','catagory_id','delivery_area','Product_type','cash_amount','sell_amount','status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}












