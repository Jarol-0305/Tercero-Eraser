@extends('layouts.app')
@section('content')
<div>
	
<div style="font-family: cursive;font-size: 25px;margin-left:40% ;">Lista de las Categorias</div>
<label style="font-family: cursive;font-size: 25px;margin-left:2% ;">Crear una nueva Categoria</label>
<a style="margin-left:1% " href="{{route('categorias.create')}}" class="btn btn-success">Nuevo</a>

</div>
<table class="table table-striped">
	<th>#</th>
	<th>Nombre</th>
	<th>Tipo</th>
	<th>Acciones</th>
	@foreach($categorias as $cat)
	
	<tr>

		<td>{{$loop->iteration}}</td>
		<td>{{$cat->cat_nombre}}</td>
		@if($cat->cat_tipo==1)
		<td>Ingreso</td>
		@else
		<td>Egreso</td>
		@endif
		<td>
			<div class="row">
					
			<a href="{{route('categorias.edit',$cat->cat_id)}}" class="btn btn-primary">  Editar</a>
		
			<form  style="margin-left: 1%" action="{{route('categorias.destroy',$cat->cat_id)}}" method="POST" onsubmit="return confirm('desea eliminar?')">
			@csrf
			<!-- <a href="" class="btn btn-danger">Eliminar</a> -->
				<button class="btn btn-danger">eliminar</button>
			</form>
				</div>
		
		</td>
	</tr>
	@endforeach
</table>
@endsection