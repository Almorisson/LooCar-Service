<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
})*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/adminForm', 'AdminController@getAdminForm')->name('getAdminForm')->middleware('auth');
Route::post('/postAdminForm', 'AdminController@postAdminForm')->name('postAdminForm');

Route::group([
   'prefix' => 'pages',
    'middleware' => 'auth'
], function () {

    Route::get('/catalogue', 'CatalogueController@print_catalogue')->name('catalogue');
    Route::get('/catalogue/{produit}', 'ProduitController@showProduit')->name('produits');
/*    Route::get('/catalogue/{produit}', [
        'as' => 'produits',
        'uses' => 'ProduitController@showProduit'
    ]);*/
    //Route::get('/users', 'Pages\ListsUsersController@listUsers')->name('listUsers');
    Route::post('/update-produit', 'ProduitController@updateCar')->name('updateCar');
    Route::get('/panier/{produit}', 'PanierController@panier')->name('produit_in_panier');
    Route::put('/panier', 'PanierController@panier')->name('panier');
    Route::post('/louer', 'PanierController@louer')->name('louer');
    Route::post('/supprimer-panier', 'PanierController@supprimer-panier')->name('supprimer-panier');
    Route::get('/produit', 'ProduitController@showProduit')->name('produit');



});


