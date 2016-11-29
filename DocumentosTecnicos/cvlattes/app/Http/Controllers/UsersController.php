<?php
namespace cvlattes\Http\Controllers;

use cvlattes\Repositories\UserRepository;
use Illuminate\Http\Request;

use cvlattes\Http\Requests;
use cvlattes\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index(UserRepository $repository)
    {

        $users = $repository->all();
    	return view('admin.users.index', compact('users'));
        
    }
}
