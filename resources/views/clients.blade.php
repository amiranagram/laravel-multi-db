@extends('layouts.app')

@section('content')

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>
                        <a href="{{ route('client.orders', $client->id) }}">
                            {{ $client->name }}
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>

@endsection
