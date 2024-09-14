<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parcel;

class Category extends Model

{
    use HasFactory;
    protected $fillable = [
        'name','image',
    ];

    public function percels()
    {
        return $this->hasMany(Parcel::class);
    }
}
