<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    return $this->hasOne(Instruction::class);


    public function guides()
    {
    //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);   
    return $this->belongsToMany(
        Gui::class,
        'guide_product',
        'product_id',
        'guide_id');
    }
}
