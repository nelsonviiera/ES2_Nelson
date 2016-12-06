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


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
