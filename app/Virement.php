<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Virement extends Model
{
    protected $fillable = [
		'iban',
		'bicswift',
		'nameBanque',
		'montant',
		'devise',
		'code1',
		'code2',
		'code3',
		'percent',
    ];
}
