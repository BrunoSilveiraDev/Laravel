@extends('admin.template.master')

@section('title', 'Create')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-5">
            {{ Form::open(['url' => 'student/' . $student->id, 'method' => 'patch'])}}
            <div class="form-group">
                {{ Form::label('Name') }}
                {{ Form::text('name', $student->name, ['placeholder' => 'Name', 'class' => 'form-control']) }}
            </div>

            <div class="form-group">
                    {{ Form::label('Email') }}
                    {{ Form::text('email', $student->email, ['placeholder' => 'example@email.com', 'class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Select Course') }}
                {{ Form::select('courses[]', $courses, null, ['multiple' => 'multiple', 'class' => 'form-control courses']) }}
            </div>

            <div class="text-center mt-4">
                {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>

        </div>
    </div>
</div>

@endsection


@section('javascripts')

<script type="text/javascript">
    $('.courses').select2().val({{ json_encode($student->courses()->allRelatedIds()) }}).trigger('change');
</script>

@endsection
