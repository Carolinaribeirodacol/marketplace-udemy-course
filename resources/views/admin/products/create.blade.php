@extends('layouts.app')

@section('content')
<h1>Cadastrar produto:</h1>

<form action="{{ route('admin.products.store') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control" />
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control" />
    </div>

    <div class="form-group">
        <label>Conteúdo</label>
        <textarea class="form-control" name="body" id="product" cols="30" rows="10">Escreva aqui...</textarea>
    </div>

    <div class="form-group">
        <label>Preço</label>
        <input type="number" name="price" class="form-control" />
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" />
    </div>

    <div class="form-group" style="margin-top: 15px">
        <label>Produto</label>
        <select name="store">
            @foreach($stores as $store)
            <option value="{{ $store->id }}">{{ $store->name }}</option>
            @endforeach
        </select>
    </div>

    <div style="margin-top: 15px">
        <button type="submit" class="btn btn-success">Criar produto</button>
    </div>
</form>
@endsection('content')