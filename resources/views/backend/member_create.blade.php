@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Member Create</h1>
                <div class="card-body">
                    <h2>{{$messeage}}</h2>
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" type="text" required />
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="comment" type="text" />
                            <label for="comment">Comment</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="grade" type="text" required />
                            <label for="grade">Academic Year</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="facebook" type="text" />
                            <label for="facebook">Facebook</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="instagram" type="text" />
                            <label for="instagram">Instagram</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="github" type="text" />
                            <label for="github">Github</label>
                        </div>
                        <label for="photo" class="btn">
                            <input type='file' name='photo'>
                        </label>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-success">Create</a>
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