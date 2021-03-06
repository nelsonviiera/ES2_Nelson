<?php

namespace cvlattes\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class College extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'name',
    	'cnpj',
    	'email',
    	'password'
    ];
}
