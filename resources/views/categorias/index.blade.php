@extends('layouts.app')
@section('content')
<h2 class="bg-dark text-white">Lista de Categorias</h2>

<a href="{{route('categorias.create')}}" class="btn btn-danger">Nuevo</a>

<table class="table">
	<th>#</th>
	<th>Nombre</th>
	<th>Tipo</th>
	@foreach($categorias as $cat)
	<tr>
		<td>{{$loop->iteration}}</td>
		<td>{{$cat->cat_nombre}}</td>
		<td>{{$cat->cat_tipo}}</td>
        <td>             
             <i href="{{route('categorias.edit',$cat->cat_id)}}" class="btn btn-danger">Editar</i>
             <a href="" class="btn btn-primary">Eliminar</a>

	</tr>
	@endforeach
</table>
@endsection




