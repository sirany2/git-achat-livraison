<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
   'id', 'nom' ,'prenom','telephone','ingredients','communune',
    'montant','password', 'confirm password','quantite','action ','suppression de commande',
       'ajouter une commande', ];
}
