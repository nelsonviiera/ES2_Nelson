<?php

namespace cvlattesweb\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
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
