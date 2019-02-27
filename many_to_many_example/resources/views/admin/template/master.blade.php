<!doctype html>
<html lang="en">
  <head>
@include('admin.template.partials.upper-links')
  </head>
  <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('student.index') }}">Student</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('course.index') }}" tabindex="-1" aria-disabled="true">Course</a>
                    </li>
                  </ul>
                </div>
              </nav>

@yield('main-content')

@include('admin.template.partials.lower-links')
  </body>
</html>



