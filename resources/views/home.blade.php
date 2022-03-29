@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="container">
                <div class="card-header">
                <div class="row m-1">
                        
                <h1 style="font-family:cursive;font-size: 25px;">Lista de movimientos</h1>
                        
                <a href="{{route('movimientos.create')}}" style="margin-left:63%;" class="btn btn-success">Nuevo</a>
                </div>
<form action="{{route('home.search')}}" method="POST">
    @csrf
    Desde:<input type="date" name="desde" value="{{$desde}}">
    Hasta<input type="date" name="hasta" value="{{$hasta}}">
    <button>Buscar</button>
</form>


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
                <tr>
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
<tr>
    <th colspan="2">Totales:</th>
    <th>Ingresos:$ {{number_format($t_ing,2)}}</th>
    <th>Egresos:$ {{number_format($t_egr,2)}}</th>
    <th>Saldo:$ {{number_format($t_saldo,2)}}</th>
</tr>
                </table>   
                </div>
                </div> 
            </div>
        </div>
    </div>
@endsection