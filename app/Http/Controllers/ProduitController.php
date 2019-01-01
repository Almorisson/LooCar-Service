<?php

namespace App\Http\Controllers;

use App\Model\Produit;
use Illuminate\Http\Request;
use App\Model\Category;

class ProduitController extends Controller
{
    public function showProduit(Produit $produit)
    {
        $categories = Category::all();
        $produit_category = Category::with('produit')->get()->where('produit_id_category', '=', $produit->id)->first();
        //dd($produit_category);
        return view('pages/produit', compact('produit', 'categories', 'produit_category'));
    }

    public function updateCar()
    {

    }
}
