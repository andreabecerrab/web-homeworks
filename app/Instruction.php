<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    return $this->belongsTo(Product::class);
}
