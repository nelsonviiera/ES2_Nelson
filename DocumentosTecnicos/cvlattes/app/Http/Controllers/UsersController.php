<?php

namespace cvlattes\Http\Controllers;

use Illuminate\Http\Request;

use cvlattes\Http\Requests;
use cvlattes\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
    	$nome = "Tiago";
    	$linguagens = [
    		'PHP',
    		'Java',
    		'Python'
    	];
    	return view('admin.users.index', compact('nome', 'linguagens'));
    }
}
