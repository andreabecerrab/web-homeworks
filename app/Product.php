<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function guides(){
        
        return $this->belongsToMany(
            Guide::class,
            'guides_products',
            'guide_id',
            'product_id'
            );
    }
}
