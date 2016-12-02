<?php

namespace cvlattesweb\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Document extends Model implements Transformable
{
    use TransformableTrait;

   protected $fillable = [
    	'user_id',
    	'name',
    	'description',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
