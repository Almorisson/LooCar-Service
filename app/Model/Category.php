<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['intitule', 'image', 'description'];


    public function produit() {
        return $this->hasMany('App\Model\Produit');
    }
}
