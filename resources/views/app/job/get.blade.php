@extends('layout.app')
@section('app-title') {{$job->title}} - Job Details @stop
@section('app-content')
<section class="space--sm">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>{{$job->title}}</h1>
      <ol class="breadcrumbs">
          <li>
              <a href="#">Home</a>
          </li>
          <li>
              <a href="{{route('job.list')}}">Jobs</a>
          </li>
          <li>{{$job->title}}</li>
      </ol>
      <hr>
    </div>
  </div>
</div>
</section>
<section class="switchable">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-md-12 ">
        <h4>Budget - £{{$job->budget}}</h4>
        <p>{{$job->description}}</p>
      </div>
    </div>
  </div>
</section>
@if(Auth::user()->freelancer)
<section class="text-center">
<div class="container">
<div class="row justify-content-center">
  <div class="col-md-8 col-lg-6">
                @if ($errors->any())
              @foreach ($errors->all() as $error)
              <div class="alert bg--error">
                  <div class="alert__body">
                    <span>{{$error}}</span>
                  </div>
              </div> 
              @endforeach  
              @endif
                                                  @if (session('success_application'))
    <div class="alert bg--success">
      <div class="alert__body">
        <span>Application successful</span>
      </div>
      <div class="alert__close">×</div>
    </div>
    @endif

                                                      @if (session('already_applied'))
    <div class="alert bg--success">
      <div class="alert__body">
        <span>Already Applied</span>
      </div>
      <div class="alert__close">×</div>
    </div>
    @endif
             
    <div class="cta">
      <h2>Sound like the job for you?</h2>
      <a class="btn btn--primary type--uppercase" href="{{route('apply.job',$job->slug)}}">
          <span class="btn__text">
              Apply Now
          </span>
      </a>
    </div>
  </div>
</div>
</div>
</section>
@endif
@stop