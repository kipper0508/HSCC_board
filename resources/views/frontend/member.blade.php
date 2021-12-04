@extends('frontend/master')
@section('title', 'HSCC')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>

  <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Member</h2>
      </div>

      @foreach($years as $year)
      <div class="section-title">
        <h3>{{$year->year}}</h3>
      </div>

      @if(!$students[$loop->index]->isEmpty())
      <div class="row">
        @foreach($students[$loop->index] as $student)
        <div class="col-lg-3">
          <div class="testimonial-item">
            <img src="{{$student->photo}}" class="testimonial-img" onerror="this.src = 'img\\member\\default.png';">
            <h3>{{$student->name}}</h3>
            <h4>{{$student->comment}}</h4>
            <p style="font-size:22px;">
              @if($student->facebook)
              <a href="{{$student->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
              @endif
              @if($student->instagram)
              <a href="{{$student->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
              @endif
              @if($student->github)
              <a href="{{$student->github}}" class="github"><i class="bx bxl-github"></i></a>
              @endif
            </p>
          </div>
        </div>
        @endforeach
      </div>
      @endif
      @endforeach
    </div>
  </section><!-- End Testimonials Section -->

</body>

@endsection