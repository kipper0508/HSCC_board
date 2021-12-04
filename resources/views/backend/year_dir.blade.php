@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Academic Years</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Academic Year List
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Years</th>
                                    <th>Visible</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Years</th>
                                    <th>Visible</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($years as $year)
                                <tr>
                                    <td>{{$year->year}}</td>
                                    <td>{{$year->visible}}</td>
                                    <td>
                                        <form method="post" action="/yearupdate_preview">
                                            {{ csrf_field() }}
                                            <input name="id" type="hidden" value="{{$year->id}}" />
                                            <button class="btn btn-primary">edit</button>
                                        </form>
                                        <form method="post" action="/yeardelete">
                                            {{ csrf_field() }}
                                            <input name="id" type="hidden" value="{{$year->id}}" />
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