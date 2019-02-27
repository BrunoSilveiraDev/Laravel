@extends('admin.template.master')

@section('title', 'Student List')

@section('main-content')


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary btn-sm mb-3 mt-4" href="{{ route('student.create') }}"><span class="fas fa-plus"></span>Add Student</a>
                @if (Session::has('success'))
                    <div class="alert alert-info">
                        {{ Session::get('success') }}
                    </div>
                @elseif(Session::has('delete'))
                    <div class="alert alert-danger">
                        {{ Session::get('delete') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="10">#</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th width="12px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($students) == 0)
                            <tr>
                                <td class="text-center" colspan="5">No student found</td>
                            </tr>
                        @else
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>
                                        @foreach($student->courses as $course)
                                            <span class="label label-info">{{ $course->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="{{ route('student.edit', $student->id) }}">Edit</a>
                                        {{ Form::open(['method' => 'DELETE', 'url' => 'student/' . $student->id, 'id' => 'deleteForm']) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
