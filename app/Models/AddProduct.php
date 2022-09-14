<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Cart;


class AddProduct extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function cart()
    {
        return $this->hasOne(Cart::class,'product_id','id');
    }

}
// ,'product_id','id'
