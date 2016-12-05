<?php

namespace cvlattesweb\Http\Controllers;

use cvlattesweb\Repositories\DocumentRepository;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function index(DocumentRepository $repository)
    {

    	$documents = $repository->paginate(15);

    	return view('/admin/documents/index', compact('documents'));
    }
}
