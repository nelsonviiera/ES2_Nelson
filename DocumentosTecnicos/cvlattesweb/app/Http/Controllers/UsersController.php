<?php

namespace cvlattesweb\Http\Controllers;

use cvlattesweb\Repositories\UserRepository;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(UserRepository $repository)
    {

    	$users = $repository->paginate(10);//pode ser paginate() ou all()

    	return view('/admin/users/index', compact('users'));
    }
}
