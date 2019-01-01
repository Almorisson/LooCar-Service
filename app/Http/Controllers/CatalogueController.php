<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Produit;


class CatalogueController extends Controller
{

    public function print_catalogue() {

        $produits = Produit::paginate(12);
        return view('pages.catalogue', compact('produits'));
    }


}
