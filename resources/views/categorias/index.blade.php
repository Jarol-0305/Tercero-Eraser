@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="container">
                <div class="card-header">
                <div class="row m-1">
                        
<h1 style="font-family:cursive;font-size: 21px;">Categorias</h1>

<form class="row" style="margin-left: 21%">
<div style="margin-left: 645%;margin-top: 4.6%;">
    <a href="{{route('categorias.create')}}" style="height:38px;" name="btn_nuevo" class="btn btn-success">Nuevo</a>
</div>	
</form>

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
			<div class="row col-md-20">
					
			<a href="{{route('categorias.edit',$cat->cat_id)}}" class="btn btn-primary">  Editar</a>
		
			<form  style="margin-left: 1%" action="{{route('categorias.destroy',$cat->cat_id)}}" method="POST" onsubmit="return confirm('desea eliminar?')">
			@csrf
			<!-- <a href="" class="btn btn-danger">Eliminar</a> -->
				<button class="btn btn-danger">Eliminar</button>
			</form>
				</div>
		
		</td>
	</tr>
	@endforeach
</table>
@endsection