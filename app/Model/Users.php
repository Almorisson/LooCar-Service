<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'password_confirmation', 'user_category'];

    public function panier() {

        return $this->HasOne('App\Model\Panier');
    }

    public function isAdmin() {
        return \Auth::user()->user_category;
    }

}
