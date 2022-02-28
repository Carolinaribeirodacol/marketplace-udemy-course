@extends('layouts.app')

@section('content')
<h1>Atualizar produto:</h1>

<form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control" value="{{ product->name }}">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control" value="{{ product->description }}">
    </div>

    <div class="form-group">
        <label>Conteúdo</label>
        <textarea class="form-control" name="body" id="product" cols="30" rows="10">
        {{ product->body }}
        </textarea>
    </div>

    <div class="form-group">
        <label>Preço</label>
        <input type="number" name="price" class="form-control" value="R$ {{ product->price }}">
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" value="{{ product->slug }}">
    </div>

    <div style="margin-top: 15px">
        <button type="submit" class="btn btn-success">Atualizar produto</button>
    </div>
</form>
@endsection('content')