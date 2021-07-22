@extends('produtos.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar novo Produto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Enter Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>preco:</strong>
                <input type="text" name="preco" class="form-control" placeholder="Enter Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>categoria:</strong>
                <select name="categoria_id" class="form-control custom-select">
                    <option value="">Select categoria</option>
                    @foreach($categorias as $categoria)
                     <option value="{{ $categoria->id }}">{{ $categoria->titulo }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection