@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Documentos</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User_ID</th>
                <th>Documento</th>
                <th>Descrição</th>
            </tr>
        </thead>

        <tbody>
            @foreach($documents as $document)
            <tr>
                <td>{{ $document->id }}</td>
                <td>{{ $document->user_id }}</td>
                <td>{{ $document->name }}</td>
                <td>{{ $document->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection