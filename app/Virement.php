<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Virement extends Model
{
    protected $fillable = [
		'nom',
		'prenom',
		'iban',
		'bicswift',
		'nameBanque',
		'montant',
		'code',
		'devise',
    ];
}
