@extends('comidas.layout')


@section('conteudo')

<div class="container">
  <h1 class="text-center mt-5 mb-5">Cadastrar Nova Comida</h1>
<div class="ml-5 mr-5">
  <form action="{{ route('comidas.store') }}" method="POST">

    @csrf

    <div class="form-group">
      <label for="nome"><h3>Nome</h3></label>
      <input type="text" class="form-control" name="nome" placeholder="Informe um nome">
    </div>
    <div class="form-group">
      <label for="descricao"><h3>Descrição</h3></label>
      <textarea type="text" class="form-control" name="descricao" placeholder="Descrição" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
  </form>
</div>

</div>

@endsection
