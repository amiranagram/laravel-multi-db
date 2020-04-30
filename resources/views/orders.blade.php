@extends('layouts.app')

@section('content')

    <h3>Order for Client: <strong>{{ $client->name }}</strong></h3>

    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
