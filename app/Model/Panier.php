<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $table = 'panier';


    public function produitBelongsToPanier() {

        return $this->belongsToMany('App\Model\Produit');
    }
}
