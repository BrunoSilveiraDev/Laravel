@extends('comidas.layout')


@section('conteudo')

<div class="container">
  <h1 class="text-center mt-5 mb-5">Editar Comida</h1>
<div class="ml-5 mr-5">
  <form action="{{ route('comidas.update', $comida->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="nome"><h3>Nome</h3></label>
      <input type="text" class="form-control" name="nome" value="{{ $comida->nome }}" placeholder="Informe um nome">
    </div>
    <div class="form-group">
      <label for="descricao"><h3>Descrição</h3></label>
      <textarea type="text" class="form-control" name="descricao" placeholder="Descrição" rows="3">{{ $comida->descricao }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Editar</button>
  </form>
</div>

</div>

@endsection
