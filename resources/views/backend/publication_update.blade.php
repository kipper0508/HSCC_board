@extends('backend/master')
@section('content')

<body class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1>Publication Update</h1>
                <div class="card-body">
                    <form method="post" action="/publicationupdate">
                        {{ csrf_field() }}
                        <input class="form-control" name="id" type="hidden" value="{{$publication->id}}"/>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="content" type="text" value="{{$publication->content}}"/>
                            <label for="content">Title</label>
                        </div>
                        <p>year:</p>
                        <select name="year">
                            <option value=""> </option>
                            @for($i =now()->year; $i >= now()->year-20; $i--)
                                @if($publication->year == $i)
                                <option value="{{$i}}" selected="selected">{{$i}}</option>
                                @else
                                    <option value="{{$i}}">{{$i}}</option>
                                @endif
                            @endfor
                        </select>
                        <p>month:</p>
                        @php
                            $month = array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                        @endphp
                        <select name="month">
                            @for($i =1; $i <= 12; $i++)
                                @if($publication->month == $month[$i])
                                    <option value="{{$month[$i]}}" selected="selected">{{$month[$i]}}</option>
                                @else
                                    <option value="{{$month[$i]}}">{{$month[$i]}}</option>
                                @endif
                            @endfor
                        </select>
                        <div class="form-floating mb-3">
                            <p>visible:</p>
                            <select name="visible">
                                @if($publication->visible == "1")
                                    <option value="1" selected="selected">True</option>
                                    <option value="0">False</option>
                                @else
                                    <option value="1">True</option>
                                    <option value="0" selected="selected">False</option>
                                @endif
                            </select>
                        </div>
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