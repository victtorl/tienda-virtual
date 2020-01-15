<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //productImage->product
    public function product(){
        //esto pertenece a un producto determinado
        return $this->belongsTo(Product::class);
    }
}
