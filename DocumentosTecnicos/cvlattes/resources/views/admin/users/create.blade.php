@extends('app')

@section('content')

	<div class="container">
		<h3>Criar novo usuario</h3>
		{!! Form::open(['route'=>'admin.users.store', 'class'=>'form']) !!}

		<div class="form-group">
			{!! Form::label('Name', 'Nome:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Criar usuario', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}
	</div>
@endsection