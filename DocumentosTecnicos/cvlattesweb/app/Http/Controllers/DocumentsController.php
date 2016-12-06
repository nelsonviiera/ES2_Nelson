<?php

namespace cvlattesweb\Http\Controllers;

use cvlattesweb\Repositories\DocumentRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
	private $repository;

	public function __construct(DocumentRepository $repository)
	{
		$this->repository = $repository;
	}

    public function index()
    {

    	$documents = $this->repository->paginate(15);

    	return view('/admin/documents/index', compact('documents'));
    }

    public function create()
    {
    	$id = Auth::id();
        $user = $this->repository->find($id);
    	return view('/admin/documents/create', compact('id'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        //dd($request->all());
        return redirect()->route('documentlist');
    }
}
