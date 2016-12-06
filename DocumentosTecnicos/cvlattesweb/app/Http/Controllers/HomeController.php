<?php

namespace cvlattesweb\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use cvlattesweb\Repositories\DocumentRepository;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DocumentRepository $repository)
    {
        $id = Auth::id();
        $documents = $repository->findByField('user_id', $id);//pegando documentos pelo id do usuario logado

        return view('home', compact('id', 'documents'));
    }
}
