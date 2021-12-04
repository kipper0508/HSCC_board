@extends('backend/master')
@section('content')
<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Album Upload</h1>
                <div class="card-body">
                    <h2>{{$messeage}}</h2>
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-floating mb-3">
                            <input class="form-control" name="comment" type="username" placeholder="Name" />
                            <label for="comment">Comment</label>
                        </div>
                        <label for="photo" class="btn">
                            <input type='file' id="photo" name='photo' />
                            <img id="preview" src="#" alt=""/>
                        </label>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-danger">Upload</a>
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