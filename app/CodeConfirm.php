<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodeConfirm extends Model
{
    protected $fillable = [
    	'code1',
    	'code2',
    	'code3',
    ];
}
