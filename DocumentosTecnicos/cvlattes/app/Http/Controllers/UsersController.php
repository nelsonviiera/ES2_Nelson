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

        $users = $repository->paginate(5);
    	return view('admin.users.index', compact('users'));

    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {
        
    }
}
