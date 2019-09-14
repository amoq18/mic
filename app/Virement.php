<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Virement extends Model
{
    protected $fillable = [
		'virement',
		'percent',
		'code',
		'montant',
		'email',
    ];
}
