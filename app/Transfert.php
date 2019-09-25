<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    protected $fillable = [
		'paiment_mode',
		'montant',
		'devise',
		'code1',
		'code2',
		'code3',
		'percent',
		'finish',
    ];
}
