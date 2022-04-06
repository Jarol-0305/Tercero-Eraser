@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="container">
                <div class="card-header">
                <div class="row m-1">
                        
<h1 style="font-family:cursive;font-size: 21px;">Usuarios</h1>

<div style="margin-left: 70%;margin-top: %;">
    <a href="{{route('usuarios.create')}}" style="height:38px;" name="btn_nuevo" class="btn btn-success">Nuevo</a>
</div>

<table class="table">
	<th>#</th>
	<th>Usuario</th>
	<th>Cedula</th>
	@foreach($users as $u)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$u->usu_usuario}}</td>
		<td>{{$u->usu_cedula}}</td>
	</tr>
	@endforeach
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection




