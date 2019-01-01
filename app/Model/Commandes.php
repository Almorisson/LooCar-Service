<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
   protected $table = 'commandes';
   protected $fillable = ['marque_louee', 'prix_location', 'nbJoursLoues', 'DateDebutLocation', 'DateFinLocation'];
}
