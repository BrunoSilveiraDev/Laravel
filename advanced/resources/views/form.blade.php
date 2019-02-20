@extends('layouts.app')

@section('content')

<div class="container">
    <br><br><br><br>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
