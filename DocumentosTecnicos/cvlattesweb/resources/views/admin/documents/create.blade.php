@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Enviar documentos</h1>

    {!! Form::open() !!}
    {!! Form::close() !!}

    <p>ID é {{ $id }}</p>
</div>
@endsection