@extends('layouts.app')

@section('content')
<h1>Editar loja:</h1>

<form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <div class="form-group">
        <label>Loja</label>
        <input type="text" name="name" value="{{$product->name}}" class="form-control" />
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" value="{{$product->description}}" class="form-control" />
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="string" name="phone" value="{{$product->phone}}" class="form-control" />
    </div>

    <div class="form-group">
        <label>Celular</label>
        <input type="string" name="mobile_phone" value="{{$product->mobile_phone}}" class="form-control" />
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" value="{{$product->slug}}" class="form-control" />
    </div>

    <div style="margin-top: 15px">
        <button type="submit" class="btn btn-success">Atualizar produto</button>
    </div>
</form>
@endsection('content')