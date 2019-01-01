<?php

namespace App\Http\Controllers;

use App\Model\Produit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->redirectTo = route('catalogue');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index() {

        return redirect()->route('catalogue');
    }


}
