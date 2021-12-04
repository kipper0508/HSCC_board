@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Publications</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Publication List
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Time</th>
                                    <th>Visible</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Time</th>
                                    <th>Visible</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($publications as $publication)
                                <tr>
                                    <td>{{$publication->content}}</td>
                                    <td>{{$publication->year}}<br>{{$publication->month}}</td>
                                    <td>{{$publication->visible}}</td>
                                    <td>
                                        <form method="post" action="/publicationupdate_preview">
                                            {{ csrf_field() }}
                                            <input name="id" type="hidden" value="{{$publication->id}}" />
                                            <button class="btn btn-primary">edit</button>
                                        </form>
                                        <form method="post" action="/publicationdelete">
                                            {{ csrf_field() }}
                                            <input name="id" type="hidden" value="{{$publication->id}}" />
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