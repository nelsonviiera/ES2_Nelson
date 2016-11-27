<?php

namespace cvlattes\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [
    	'name',
    	'cnpj',
    	'email',
    	'password'
    ];
}
