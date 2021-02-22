<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    public function products(){
        
        return $this->belongsToMany(
            Product::class,
            'guides_products',
            'guide_id',
            'product_id');
    }
}
