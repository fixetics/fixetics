@extends('layout.app')
@section('app-title')Create New Job Post @stop
@section('app-content')
<section class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8">
        <h1>Create Job Post</h1>
        <p class="lead">
          Use the form to post a new job
        </p>
      </div>
    </div>
  </div>
</section>
<section class="bg--secondary space--sm">
  <div class="container">
    <div class="row justify-content-center no-gutters">
      <div class="col-md-10 col-lg-8">
        <div class="boxed boxed--border">
          {!! Form::open() !!}
            @if ($errors->any())
              @foreach ($errors->all() as $error)
              <div class="alert bg--error">
                  <div class="alert__body">
                    <span>{{$error}}</span>
                  </div>
              </div> 
              @endforeach  
              @endif
            <div class="col-md-12">
              <span>Job Title:</span>
              <input type="text" name="title" class="validate-required">
            </div>
            <div class="col-md-12">
              <span>About Job:</span>
              <textarea rows="5" name="description" class="validate-required"></textarea>
            </div>
            <div class="col-md-12">
              <span>Budget:</span>
              <input type="number" name="budget" class="validate-required">
            </div>
            <div class="col-md-12 boxed">
              <button type="submit" class="btn btn--primary type--uppercase">Create Job</button>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</section>
@stop