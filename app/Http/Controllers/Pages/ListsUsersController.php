<?php
/**
 * Created by PhpStorm.
 * User: morisson
 * Date: 12/11/2018
 * Time: 18:31
 */

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Model\Users;

class ListsUsersController extends Controller
{
    public function listUsers(Users $users) {

        $results = $users->all()->first();

        return view('pages.listUsers', compact('results', $results));
    }

}
