@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Academic Year Create</h1>
                <div class="card-body">
                    <h2>{{$messeage}}</h2>
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-floating mb-3">
                            <input class="form-control" name="year" type="username" placeholder="Name" required />
                            <label for="year">Academic Year</label>
                        </div>
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
@endsection