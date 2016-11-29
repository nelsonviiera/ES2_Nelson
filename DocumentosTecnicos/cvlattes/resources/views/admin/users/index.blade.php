@extends('app')

@section('content')

	<div class="container">
		<h3>Usuarios</h3>

		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Ação</th>
				</tr>	
			</thead>

			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td></td>
				</tr>
				@endforeach
			</tbody>	
		</table>
	</div>
@endsection