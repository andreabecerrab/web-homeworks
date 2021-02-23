<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
<<<<<<< HEAD
    public function products()
    {
    //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
    return $this->belongsToMany(
        Prod::class,
        'guide_product',
        'guide_id',
        'product_id');
    }
}
=======
    public function products(){
        
        return $this->belongsToMany(
            Product::class,
            'guides_products',
            'guide_id',
            'product_id');
    }
}
>>>>>>> 9edffdd04eb0259a2ebce6594a4564b7f74b4efc
