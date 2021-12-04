@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Academic Years Update</h1>
                <p>Year : {{$year->year}}</p>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="/yearupdate">
                        {{ csrf_field() }}
                        <input class="form-control" name="id" type="hidden" placeholder="Name" value="{{$year->id}}" />
                        <p>visible:</p>
                        <select name="visible">
                            @if($year->visible == "1")
                            <option value="1" selected="selected">True</option>
                            <option value="0">False</option>
                            @else
                            <option value="1">True</option>
                            <option value="0" selected="selected">False</option>
                            @endif
                        </select>
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
@endsection