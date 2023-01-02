<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
   'id', 'nom' ,'prenom','telephone','commune','ville','adresse','liste achats',
    'prix achats','genre','mail', 'password',
    ];
}
