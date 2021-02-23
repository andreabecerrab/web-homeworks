<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function guides(){

        return $this->belongsToMany(Guide::class);
    }
}
