<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;



class Produit extends Model
{
    protected $table = 'produit';

    protected $fillable = ['marque', 'description', 'image', 'prix', 'vitesse', 'nbJoursReserves', 'disponibilite', 'category_id'];

    public function panierBelongsToProduit() {
        return $this->belongsToMany('App\Model\Panier');
    }

    public function category() {
        return $this->belongsTo('App\Model\Category');
    }

}

