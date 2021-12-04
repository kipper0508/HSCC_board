@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Albums</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Album List
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Comment</th>
                                    <th>Visible</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Photo</th>
                                    <th>Comment</th>
                                    <th>Visible</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($albums as $photo)
                                <tr>
                                    <td><img src="{{$photo->path}}" style="height: 200px;width: 200px;object-fit: cover;"></img></td>
                                    <td>{{$photo->comment}}</td>
                                    <td>{{$photo->visible}}</td>
                                    <td>
                                        <form method="post" action="/albumupdate_preview">
                                            {{ csrf_field() }}
                                            <input name="id" type="hidden" value="{{$photo->id}}" />
                                            <button class="btn btn-primary">edit</button>
                                        </form>
                                        <form method="post" action="/albumdelete">
                                            {{ csrf_field() }}
                                            <input name="id" type="hidden" value="{{$photo->id}}" />
                                            <button class="btn btn-danger" onclick="return confirm('Delete this item?');">delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>
</body>
@endsection