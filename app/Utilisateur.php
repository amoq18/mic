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
		'pays',
		'codePostal',
		'photo_url',
    ];

    public function getRememberTokenName()
    {
        return '';
    }

    public function virements()
    {
        return $this->hasMany('App\Virement', 'user_id');
    }
}
