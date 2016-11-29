@extends('app')

@section('content')

<h1>Usuarios</h1>
<br>
<h1> {{$nome}} </h1>

<ul>
	@foreach($linguagens as $linguagem)
	<li>{{$linguagem }}</li>
	<?php endforeach;?>
</ul>
@endsection