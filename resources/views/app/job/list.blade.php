@extends('layout.app')
@section('app-title')List All Jobs @stop
@section('app-content')
<section class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">
                <h1>List All Jobs</h1>
                <p class="lead">
                    Apply To The Following Jobs
                </p>
            </div>
        </div>
    </div>
</section>
<section>
<div class="container">
  <div class="row">
    @if($jobs->count()>0)
    @foreach($jobs as $job)
    <div class="col-md-4">
      <a href="{{route('job.get',$job->slug)}}" class="block">
        <div class="feature feature-1 boxed boxed--border">
            <h6 class="type--uppercase color--primary">Budget - £{{$job->budget}}</h6>
            <h5>{{$job->title}}</h5>
            <p>{{$job->description}}</p>
        </div>
      </a>
    </div>
    @endforeach
    @else
    @endif
  </div>
</div>
</section>
@stop