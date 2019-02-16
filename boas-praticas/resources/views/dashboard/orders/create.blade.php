@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova Order</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('orders.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <select id="status" class="form-control{{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" value="{{ old('status') }}" required>
                                    <option value="">Selecione o Status</option>
                                    <option value="cancel">Cancelado</option>
                                    <option value="pending">Pendente</option>
                                    <option value="delivered">Enviado</option>
                                </select>

                                @if ($errors->has('status'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="track_code" class="col-md-4 col-form-label text-md-right">Código de Rastreio</label>
                            <div class="col-md-6">
                                <input id="track_code" type="track_code" class="form-control{{ $errors->has('track_code') ? 'is-invalid' : ''}}" name="track_code" value="{{ old('track_code') }}" required>

                                @if($errors->has('track_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('track_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
