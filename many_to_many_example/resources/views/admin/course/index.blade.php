@extends('admin.template.master')

@section('title', 'Course List')

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10">#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($courses) == 0)
                        <tr>
                            <td class="text-center" colspan="2">No course found</td>
                        </tr>
                    @else
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$course->id}}</td>
                                <td>{{$course->name}}</td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
