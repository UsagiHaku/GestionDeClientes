@extends('viewClients.master')

@section('title')
    Gestión de clientes
@endsection

@section('content')
    <div class='title m-b-md'>
        Gestión de clientes
    </div>
    <div class="">
        <table style="width: 100%">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
            </tr>
            <tbody>
            @forelse ($clients as $client)
                <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->address }}</td>
                </tr>
            @empty
                <p>No hay clientes</p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
