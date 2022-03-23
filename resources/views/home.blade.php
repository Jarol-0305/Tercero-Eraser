@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row m-1">
                        
                <h1 style="font-family:cursive;font-size: 25px;">Lista de movimientos</h1>
                        
                <a href="{{route('movimientos.create')}}" style="margin-left:50%;" class="btn btn-success">Nuevo</a>
                    </div>
                </div>

                <table class="table">
                    <th>#</th>
                    <th>Detalle</th>
                    <th>Valor</th>
                    <th>Fecha</th>
                    @foreach($movimientos as $mov)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mov->mov_detalle}}</td>
                    <td>{{$mov->mov_valor}}</td>
                    <td>{{$mov->mov_fecha}}</td>
                </tr>
                </table>    
                </div>
                </div>
            </div>
        </div>
@endforeach
@endsection