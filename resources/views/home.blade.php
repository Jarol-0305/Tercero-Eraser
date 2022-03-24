@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <div class="card-header">
                <div class="row m-1">
                        
                <h1 style="font-family:cursive;font-size: 25px;">Lista de movimientos</h1>
                        
                <a href="{{route('movimientos.create')}}" style="margin-left:50%;" class="btn btn-success">Nuevo</a>

                    </div>

                <table class="table">
                    <th>#</th>
                    <th>Detalle</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Fecha</th>
                    @foreach($movimientos as $mov)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mov->mov_detalle}}</td>
                    <td>{{$mov->cat_tipo}}</td>
                    <td>{{$mov->mov_valor}}</td>
                    <td>{{$mov->mov_fecha}}</td>
<td>
    
                <div class="row">
                    
                <a href="{{route('movimientos.edit',$mov->mov_id)}}" class="btn btn-primary">Editar</a>
        
                <form style="margin-left: 1%" action="" onsubmit="return confirm('desea eliminar?')">
                 @csrf
                <!-- <a href="" class="btn btn-danger">Eliminar</a> -->
                <button class="btn btn-danger">eliminar</button>
                </form>
                </div>
    
</td>
                </tr>
@endforeach
                </table>   
                </div>
                </div> 
            </div>
        </div>
    </div>
@endsection