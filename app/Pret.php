<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pret extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'devise',
		'deviseRevenu',
        'date_naissance', 
        'telephone', 
        'adresse',
        'ville',
		'region',
		'pays',
		'codePostal',
		'montantPret',
		'rolePret',
		'revenuAnnuel',
		'statutProfessionnel',
		'email',
		'nousConnaitre',
		'idCard',
		'codeBancaire',
		'delaiRemboursement',
    ];
}
