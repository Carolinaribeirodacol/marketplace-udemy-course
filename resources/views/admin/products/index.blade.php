@extends('layouts.app')

@section('content')
    <a class="btn btn-lg btn-success" href="{{ route('admin.products.create') }}">Criar produto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.products.edit', ['product' => $product->id]) }}">Editar</a>
                    <a class="btn btn-sm btn-danger" href="{{ route('admin.products.destroy', ['product' => $product->id]) }}">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$stores->links()}}
@endsection('content')