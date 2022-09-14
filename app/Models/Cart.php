<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\AddProduct;

class Cart extends Model
{
    use HasFactory;

    public function addproduct()
    {
        return $this->belongsTo(AddProduct::class,'product_id','id');
    }
}
