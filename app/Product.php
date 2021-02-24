<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{

    public function recipes()
    {
        return $this->hasMany(Recipe::class, 'foreign key');
    }
   

    
}

