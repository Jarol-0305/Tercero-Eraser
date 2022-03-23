@extends('layouts.app')
@section('content')


<form action="{{route('movimientos.store')}}" method="POST">
  
  @csrf

<div class="container">
  
  <div class="" style="width:510px;margin-left: 40%;">
    <label  class="form-label">Detalle del movimiento</label>
    <div class="col-md-6">
                                <input id="mov_detalle" type="text" class="form-control @error('mov_detalle') is-invalid @enderror" name="mov_detalle" value="{{ old('mov_detalle') }}" required autocomplete="mov_detalle" autofocus>

                                @error('detalle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>   
  </div>

<div class="" style="width:510px;margin-left: 40%;">
    <label  class="form-label">Valor del movimiento</label>
    <div class="col-md-6">
                                <input id="mov_valor" type="number" class="form-control @error('mov_valor') is-invalid @enderror" name="mov_valor" value="{{ old('mov_valor') }}" required autocomplete="mov_valor" autofocus>

                                @error('valor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
  </div>

<div class="" style="width:510px;margin-left: 40%;">
    <label  class="form-label">Fecha de categoria</label>
    <div class="col-md-6">
                                <input id="mov_fecha" type="date" class="form-control @error('mov_fecha') is-invalid @enderror" name="mov_fecha" value="{{ old('mov_fecha') }}" required autocomplete="mov_fecha" autofocus>

                                @error('fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                @enderror
  
        
      </div>
      
    </div>

<div class="" style="width:510px;margin-left: 40%;">
    <label  class="form-label">Tipo de categoria</label>
    <div class="col-md-6">
        <select name="cat_id" id="cat_id" class="form-control">
          <option value="">Elija una opcion</option>
          @foreach($categorias as $cat)
          @if($cat->cat_tipo==1)
          <option value=" {{$cat->cat_id}} ">{{$cat->cat_nombre}} (Ingreso)</option>
          @else
          <option value=" {{$cat->cat_id}} ">{{$cat->cat_nombre}} (Ingreso)</option>
          @endif

          @endforeach
          
    
        </select>
    
  </div>
 </div>       
<br>  

  <button type="submit" style="width:250px;margin-left: 40%;" class="btn btn-primary">Guardar</button>

</div>
</div>
</form>


@endsection