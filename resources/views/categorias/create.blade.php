@extends('layouts.app')
@section('content')
<h1 class="bg-dark">Vista para el formulario</h1>
<form action="{{route('categorias.store')}}" method="POST">
	@csrf
	<div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" class="form-control @error('cat_nombre') is-invalid @enderror" name="cat_nombre" value="{{ old('cat_nombre') }}" required autocomplete="cat_nombre" autofocus placeholder="First name" name="cat_nombre" id="cat_nombre">

    @error('nombre de categoria')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
    @enderror
 
  </div>
  <div class="col">
    <select class="form-select" id="cat_tipo" name="cat_tipo" ari-label="Default select example">
    <option selected>Seleccione un tipo</option>
    <option value="1">Ingreso</option>
    <option value="2">Egreso</option> 
    </select>

  <button type="submit" class="btn btn-succes">Guardar</button>
  </div>
</div>
</form>

@endsection