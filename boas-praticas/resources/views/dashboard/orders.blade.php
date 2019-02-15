@extends('layouts.app')

@section('content')

<div class="container">

    <a class="btn btn-warning" href=" {{ route('orders.index', ['status' => 'pending']) }}">Pedidos Pendentes</a>
    <a class="btn btn-primary" href="{{ route('orders.index', ['status' => 'delivered']) }}">Pedidos Enviados</a>
    <a class="btn btn-success" href="{{ route('orders.index', ['paid' => 1]) }}">Pedidos Pagos</a>
    <a class="btn btn-light" href="{{ route('orders.index') }}">Limpar Filtro</a>

    <hr>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Status</th>
                <th>Paga</th>
                <th>Código de Entrega</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->formatted_status}}</td>
                    <td>{{$order->paid}}</td>
                    <td>{{$order->track_code}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
