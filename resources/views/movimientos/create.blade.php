@extends('layouts.app')
@section('content')


<form action="{{route('movimientos.store')}}" method="POST">
  
  @csrf

<div class="container">
  
  <div class="" style="width:510px;margin-left: 40%;">
    <div class="col-md-6">
    <label  class="form-label" for="validationServer01" >Detalle del movimiento</label>
                                <input id="mov_detalle" type="text" class="form-control @error('mov_detalle') is-invalid @enderror" name="mov_detalle" value="{{ old('mov_detalle') }}" required autocomplete="mov_detalle" autofocus>

                                @error('detalle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>   
  </div>

<div class="" style="width:510px;margin-left: 40%;">
    <div class="col-md-6">
    <label class="form-label">Valor del movimiento</label>
                                <input type="tel" id="mov_valor" class="form-control @error('mov_valor') is-invalid @enderror" name="mov_valor" value="{{ old('mov_valor') }}" required autocomplete="mov_valor" autofocus> 

                                @error('valor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
</div>

<div class="" style="width:510px;margin-left: 40%;">
    <div class="col-md-6">
    <label class="form-label">Fecha de categoria</label>
        <?php 
        $hdate=date('Y-m-d');
        ?>
                                <input id="mov_fecha" type="date" class="form-control @error('mov_fecha') is-invalid @enderror" name="mov_fecha" value="{{ $hdate }}" required autocomplete="mov_fecha" autofocus>

                                @error('fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                @enderror
    
      </div>
</div>

<div class="col-md-3" style="margin-left: 40%;">
    <label for="validationCustom04" class="form-label">Tipo de categoria</label>
    <select style="width: 225px;" class="form-control" id="validationCustom04" required>
      <option selected disabled value="">Elija una opcion</option>
          @foreach($categorias as $cat)
          @if($cat->cat_tipo==1)
          <option value=" {{$cat->cat_id}} ">{{$cat->cat_nombre}} (Ingreso)</option>
          @else
          <option value=" {{$cat->cat_id}} ">{{$cat->cat_nombre}} (Egreso)</option>
          @endif

          @endforeach
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
</div>

<br>  

  <button type="submit" style="width:250px;margin-left: 40%;" class="btn btn-primary">Guardar</button>

</div>
</div>
</form>


@endsection