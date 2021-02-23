<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD
    public function instructions(){
        return $this->hasOne(Instruction::class);
=======

    public function guides(){
        
        return $this->belongsToMany(
            Guide::class,
            'guides_products',
            'guide_id',
            'product_id'
            );
>>>>>>> 9edffdd04eb0259a2ebce6594a4564b7f74b4efc
    }
}
