@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Enviar documentos</h1>
    <p>Usuario de ID numero {{ $id }}</p>

    {!! Form::open(['route'=>'documentstore']) !!}

    <div class="form-group">
        {!! Form::label('Name', 'Nome do documento') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Description', 'Descrição') !!}
        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

</div>
@endsection