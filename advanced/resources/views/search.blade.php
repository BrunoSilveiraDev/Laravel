@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <input class="form-control mt-3 mb-5" type="text" placeholder="Pesquisar">
            @foreach($users as $user)
                {{ $user->name }}
                {{-- {{dd($user->name)}} --}}
                <br>
            @endforeach
        </div>
    </div>
</div>
@endsection
