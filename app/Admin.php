<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements Authenticatable
{
	use BasicAuthenticatable;

    protected $fillable = ['password', 'email'];

    public function getRememberTokenName()
    {
        return '';
    }
}
