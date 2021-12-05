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
                            <input class="form-control" name="name" type="text" value = "{{$student->name}}"/>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="comment" type="text" value = "{{$student->comment}}" />
                            <label for="comment">Comment</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="grade" type="text" value = "{{$student->student_grade}}" />
                            <label for="grade">Academic Year</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="facebook" type="text" value = "{{$student->facebook}}" />
                            <label for="facebook">Facebook</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="instagram" type="text" value = "{{$student->instagram}}" />
                            <label for="instagram">Instagram</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="github" type="text" value = "{{$student->github}}" />
                            <label for="github">Github</label>
                        </div>
                        <label for="photo" class="btn">
                            <input type='file' id="photo" name='photo' />
                            <img id="preview" src="{{$student->photo}}" alt="" />
                        </label>
                        <div class="d-flex align-items-center mt-4 mb-0">
                            <button type="submit" class="btn btn-warning" style="margin:10px 5px 5px 5px;">Update</button>
                            <button type="submit" class="btn btn-primary" style="margin:10px 5px 5px 5px;" onclick="history.back()">Cancel</button>
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