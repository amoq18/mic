<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model implements Authenticatable
{
	use BasicAuthenticatable;

    protected $fillable = [
    	'nom',
		'email',
		'password',
		'isAdmin',
		'prenom',
		'date_naissance',
		'telephone',
		'adresse',
		'ville',
		'region',
		'pays',
		'codePostal',
		'code1',
		'code2',
		'code3',
    ];

    public function getRememberTokenName()
    {
        return '';
    }
}
