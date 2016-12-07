@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Você está logado! Seu número ID é {{ $id }}

                    <br/><br/>
                    <a href="{{ route('userlist') }}" class="btn btn-default" style="float:left">Lista de usuarios</a>

                    <p style="float: left;padding-left:10px"></p>

                    <a href="{{ route('documentlist') }}" class="btn btn-default" style="float: left;">Lista de documentos</a>

                    <p style="float: left;padding-left:10px"></p>

                    <a href="{{ route('documentcreate') }}" class="btn btn-default" style="float: left;">Adicionar documentos</a>
                    <br/><br/>


                    <h3>Meus documentos</h3>
                    <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Proprietario</th>
                            <th>Documento</th>
                            <th>Descrição</th>
                            <th>Ação</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($documents as $document)
                        <tr>
                            <td>{{ $document->id }}</td>
                            <td>{{ $document->user->name }}</td>
                            <td>{{ $document->name }}</td>
                            <td>{{ $document->description }}</td>
                            
                            <td>
                                <a href="{{ route('documentremove',['id'=>$document->id])}}" class="btn btn-default btn-sm">Remover</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
