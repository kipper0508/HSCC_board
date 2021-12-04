@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Album Update</h1>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="/albumupdate">
                        {{ csrf_field() }}
                        <input class="form-control" name="id" type="hidden" value="{{$album->id}}" />
                        <div class="form-floating mb-3">
                            <input class="form-control" name="comment" type="text" value="{{$album->comment}}" />
                            <label for="comment">Comment</label>
                        </div>
                        <div class="form-floating mb-3">
                            <p>visible:</p>
                            <select name="visible">
                                @if($album->visible == "1")
                                    <option value="1" selected="selected">True</option>
                                    <option value="0">False</option>
                                @else
                                    <option value="1">True</option>
                                    <option value="0" selected="selected">False</option>
                                @endif
                            </select>
                        </div>
                        <label for="photo" class="btn">
                            <input type='file' id="photo" name='photo' />
                            <img id="preview" src="{{$album->path}}" alt="" />
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