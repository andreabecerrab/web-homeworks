<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{

    public function instructions(){
        return $this->hasOne(Instruction::class);
    }

    public function guides(){

        return $this->belongsToMany(Guide::class);
    }

    public function recipes()
    {
        return $this->belongsTo(Recipe::class);
    }

}

