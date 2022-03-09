@extends('layouts.app')

@section('content')
<h1>Cadastrar loja:</h1>

<form action="{{ route('admin.stores.store') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <div class="form-group">
        <label>Loja</label>
        <input type="text" name="name" class="form-control" />
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control" />
    </div>

    <div class="form-group">
        <label>Telefone</label>
        <input type="number" name="phone" class="form-control" />
    </div>

    <div class="form-group">
        <label>Celular</label>
        <input type="number" name="mobile_phone" class="form-control" />
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" />
    </div>

    <div style="margin-top: 15px">
        <button type="submit" class="btn btn-success">Criar loja</button>
    </div>
</form>
@endsection('content')