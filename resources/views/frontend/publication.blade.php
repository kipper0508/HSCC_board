@extends('frontend/master')
@section('title', 'HSCC')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>

<section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Publications</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <h3 class="resume-title"></h3>
            @foreach($publications as $publication)
              @if($loop->first)
                <div class="resume-item pb-0">
                  <h4>{{$publication->content}}</h4>
                  <h5>{{$publication->month}} {{$publication->year}}</h5>
                </div> 
              @else
              <div class="resume-item">
                <h4>{{$publication->content}}</h4>
                <h5>{{$publication->month}} {{$publication->year}}</h5>
              </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </section><!-- End Resume Section -->

</body>

@endsection