@extends('layout.app')
@section('app-title'){{$job->title}}'s Applications @stop
@section('app-content')
<section class="bg--secondary space--sm">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="boxed boxed--lg boxed--border">
          <div class="text-block text-center">
            <span class="h5">{{$job->title}}</span>
          </div>
          <div class="text-block clearfix text-center">
            <ul class="row row--list">
              <li class="col-md-6">
                <span class="type--fine-print block">Budget:</span>
                <span>£{{$job->budget}}</span>
              </li>
              <li class="col-md-6">
                <span class="type--fine-print block">Number of Applications</span>
                <span>{{$job->applications()->count()}}</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="boxed boxed--border">
        <ul class="accordion accordion-1 accordion--oneopen">
          {!! Form::open(['method'=>'post']) !!}
          @foreach($job->applications as $application)
  <li>
    <div class="accordion__title">
      <span class="h5">{{$application->user->name}}</span>
    </div>
    <div class="accordion__content">
      <div class="input-radio">
        <span class="input__label">Approve</span>
        <input type="radio" name="user_id" value="{{$application->user->id}}" required="">
        <label for="input-assigned-2"></label>
      </div>
    </div>
  </li>
  @endforeach
<button type="submit" class="btn btn--primary type--uppercase">Approve Application</button>
{{Form::close()}}
</ul>

      </div>
    </div>
  </div>
  </div>
</section>
@stop