@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Member Update</h1>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="/memberupdate">
                        {{ csrf_field() }}
                        <input class="form-control" name="id" type="hidden" value = "{{$student->id}}"/>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" type="username" value = "{{$student->name}}"/>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="comment" type="username" value = "{{$student->comment}}" />
                            <label for="comment">Comment</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="grade" type="username" value = "{{$student->student_grade}}" />
                            <label for="grade">Academic Year</label>
                        </div>
                        <label for="photo" class="btn">
                            <input type='file' id="photo" name='photo' />
                            <img id="preview" src="{{$student->photo}}" alt="" />
                        </label>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-danger">Update</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    </div>
</body>
<script src="backend/my.js"></script>
@endsection