<?php

namespace App\Http\Controllers;

use App\Model\Produit;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function panier(Produit $produit) {

        return view('pages.panier', compact('produit'));
    }
}
