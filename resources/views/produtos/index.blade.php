@extends('produtos.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Controle de Produtos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produtos.create') }}"> Criar novo Produto</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Nº</th>
            <th>Nome</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nome }}</td>  
            <td>
                <form action="{{ route('produtos.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('produtos.show',$value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('produtos.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection