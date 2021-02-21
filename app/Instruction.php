<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Instruction extends Model{

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

}
