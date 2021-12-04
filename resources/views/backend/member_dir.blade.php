@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Members</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Member List
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Comment</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Comment</th>
                                    <th>Grade</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{$student->name}}</td>
                                    <td><img src="{{$student->photo}}" style="height: 120px;width: 120px;object-fit: cover;border-radius: 50%;" onerror="this.src = 'img\\member\\default.png';"></img></td>
                                    <td>{{$student->comment}}</td>
                                    <td>{{$student->student_grade}}</td>
                                    <td>
                                        <form method="post" action="/memberupdate_preview">
                                            {{ csrf_field() }}
                                            <input name="id" type="hidden" value="{{$student->id}}" />
                                            <button class="btn btn-primary">edit</button>
                                        </form>
                                        <form method="post" action="/memberdelete">
                                            {{ csrf_field() }}
                                            <input name="id" type="hidden" value="{{$student->id}}" />
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