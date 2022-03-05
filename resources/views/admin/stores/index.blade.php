@extends('layouts.app')

@section('content')
    <a class="btn btn-lg btn-success" href="{{ route('admin.stores.create') }}">Criar loja</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($stores as $store)
            <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.stores.edit', ['store' => $store->id]) }}">Editar</a>
                    <form action="{{ route('admin.stores.destroy', ['store' => $store->id]) }}">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-sm btn-danger">REMOVER</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$stores->links()}}
@endsection('content')