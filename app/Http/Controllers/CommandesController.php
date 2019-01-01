<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandesController extends Controller
{
    public function louer() {

        $commandes = CommandesController::create([
            'marque_louee' => \request('marque'),
            'prix_location' => \request('prix'),
            'nbJoursLoues' => \request('selectList'),
            'DateFinLocation' =>\request()
        ]);
    }
}
