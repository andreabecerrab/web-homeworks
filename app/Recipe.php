<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model{
    

    public function products()
    {
       
        return $this->hasMany(Product::class, 'foreign key');
    }
        


    
 
}
