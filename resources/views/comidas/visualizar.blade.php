@extends('comidas.layout')


@section('conteudo')
<div class="container rounded">

  <h1 class="text-center mt-5 mb-5">Lista de Comidas</h1>
  @if (Session::has('message'))
  <div class="alert alert-info">
    {{ Session::get('message') }}
  </div>
  @endif
  <div>
    <a class="btn btn-primary btn-lg text-light" href="{{ route('comidas.create') }}">Nova Comida</a>
  </div>
  <div class="mt-3">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nome</th>
          <th scope="col">Descricao</th>
          <th scope="col">Opções</th>
        </tr>
      </thead>
      <tbody>



        @foreach($comidas as $comida)
        <tr>
          <th scope="row">{{ $comida->id }}</th>
          <td>{{ $comida->nome }}</td>
          <td>{{ $comida->descricao}}</td>
          <td>
            <a class="btn btn-secondary" href="{{ route('comidas.edit', $comida->id) }}">Editar</a>
            <form class="mt-2" action="{{ route('comidas.destroy', $comida->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir esta comida?')">Excluir</button>
            </form>
          </td>

        </tr>
        @endforeach




      </tbody>
    </table>
    {{ $comidas->links() }}
  </div>
</div>
@endsection
