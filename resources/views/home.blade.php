@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <div class="card-header">
                <div class="row m-1">
                        
                <h1 style="font-family:cursive;font-size: 26px;">Lista de movimientos</h1>

<form class="row" style="margin-left: 21%" action="{{route('home.search')}}" method="POST">
    @csrf

<div class="col-md-4" style="margin-left: -3%;">
    Desde:<input type="date" class="form-control" name="desde" value="{{$desde}}">
</div>

<div class="col-md-4" style="margin-left: -3%;">
    Hasta<input type="date" class="form-control" name="hasta" value="{{$hasta}}">
</div>

<div class="col-md-2" style="margin-top: 4.6%;margin-left: -4%;">
    <button type="submit" class="btn btn-info" value="btn_buscar" name="btn_buscar">Buscar</button>
</div>

<div style="margin-left: 0.5%;margin-top: 4.5%;">
    <button style="height: 38px;" value="btn_pdf" class="btn btn-danger" name="btn_pdf">PDF</button>
</div>

<div style="margin-left: 1.5%;margin-top: 4.6%;">
    <a href="{{route('movimientos.create')}}" style="height:38px;" name="btn_nuevo" class="btn btn-success">Nuevo</a>
</div>


                    
</form>
</div>
</div>

<div class="card-body" style="overflow-y: scroll; width: 1080px;
  height: 380px">
                   <table class="table">
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Categoria</th>
                    <th>Detalle</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                    <?php
                    $t_ing=0;
                    $t_egr=0;
                    $t_saldo=0;
                    ?>
                    @foreach($movimientos as $mov)
                    <?php 
                    if ($mov->cat_tipo==1) {
                       $t_ing+=$mov->mov_valor;
                    }else{
                       $t_egr+=$mov->mov_valor;
                    }
                       $t_saldo=$t_ing-$t_egr;
                    ?>
                <tr >
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mov->usu_nombre}}</td>
                    <td>{{$mov->cat_nombre}}</td>
                    <td>{{$mov->mov_detalle}}</td>
                    @if($mov->cat_tipo==1)

<td>Ingreso</td>
@else
<td>Egreso</td>
@endif
                    <td>$ {{number_format($mov->mov_valor,2)}}</td>
                    <td>{{$mov->mov_fecha}}</td>
                    
<td>
                <div class="row">
                    
                <a href="{{route('movimientos.edit',$mov->mov_id)}}" class="btn btn-primary">Editar</a>
        
                <form style="margin-left: 1%" action="{{route('movimientos.destroy',$mov->mov_id)}}" method="POST" onsubmit="return confirm('desea eliminar?')">
                 @csrf     
                <button class="btn btn-danger">Eliminar</button>
                </form>
                </div>
    
</td>
                </tr>
@endforeach
</table>   
</div>
<br>
<div class="container">
    
<tr class="card-body" style="color: black;">
    <th colspan="2">Totales:</th>
    <th>Ingresos:$ {{number_format($t_ing,2)}}</th>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <th>Egresos:$ {{number_format($t_egr,2)}}</th>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <th>Saldo:$ {{number_format($t_saldo,2)}}</th>
</tr>
</div>
                </div>
                </div> 
            </div>
        </div>
    </div>
@endsection