@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Publication Create</h1>
                <div class="card-body">
                    <h2>{{$messeage}}</h2>
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-floating mb-3">
                            <input class="form-control" name="content" type="text" required />
                            <label for="content">Title</label>
                        </div>
                        <p>year:</p>
                        <select name="year">
                        @for($i =now()->year; $i >= now()->year-20; $i--)
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                        </select>
                        <p>month:</p>
                        <select name="month">
                            <option value="Jan">1</option>
                            <option value="Feb">2</option>
                            <option value="Mar">3</option>
                            <option value="Apr">4</option>
                            <option value="May">5</option>
                            <option value="Jun">6</option>
                            <option value="Jul">7</option>
                            <option value="Aug">8</option>
                            <option value="Sep">9</option>
                            <option value="Oct">10</option>
                            <option value="Nov">11</option>
                            <option value="Dec">12</option>
                        </select>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" class="btn btn-danger">Create</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    </div>
</body>
@endsection