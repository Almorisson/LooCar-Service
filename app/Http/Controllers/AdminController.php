<?php

namespace App\Http\Controllers;

use App\Model\Users;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\User;
use App\Model\Produit;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function getAdminForm() {

        $categories = Category::all();
        return view('adminForm', compact('categories', $categories));


    }

    public function postAdminForm(Request $request) {
        $validateForm = $this->validate($request, [

            'marque' => 'required|min:8|string',
            'category' => 'required',
            'description' =>'string|min: 50|max: 255|required',
            'prix' => 'numeric|required',
            'vitesse' => 'numeric|required',
            'image' => 'url|required',
            'nbjoursreserves' => 'numeric',
            'disponibilite' => 'required'
        ]);
/*
        $image = $request->file('photo');
        $new_image_name = str_random(20). '.' . $image->getClientOriginalExtension();
        //dd($new_image_name);
        $image_saved = $image->storeAs('public/images', $new_image_name);
       //d($validateForm);
/*        if (request($validateForm) == []) {

            return redirect('adminForm')->withErrors($validateForm)->withInput(['marque', 'description', 'prix', 'vitesse', 'photo', 'disponibilite']);
        }*/

        $category = Category::find(1)->where('category.intitule', request('category'));
        //dd($category);
        $produit = Produit::create([

            'marque' => request('marque'),
            'description' => request('description'),
            'prix' => request('prix'),
            'vitesse' => request('vitesse'),
            'image' => request('image'),
            'nbJoursReserves' => request('nbjoursreserves'),
            'disponibilite' => request('disponibilite')
        ])->category()->associate($category);

        //$associated_category = $produit->category()->associate($category);

        dd($produit);
        //$associated_category->save();

        return redirect()->route('catalogue')->with('success', "Votre nouvelle voiture a été crée avec succès.");
    }


      public function updateCar() {

          $products = Produit::update(
              [
                  'marque' => request('marque'),
                  'description' => request('description'),
                  'image' => request('image'),
                  'disponibilite' => request('disponibilite')
              ]);



          return view('', compact('products', $products));

        }

}
