@extends('layout.app')
@section('app-title')Login @stop
@section('app-content')
<section class="imageblock switchable feature-large height-100">
  <div class="imageblock__content col-lg-6 col-md-4 pos-right">
    <div class="background-image-holder">
      <img alt="image" src="img/login.jpg" />
    </div>
  </div>
  <div class="container pos-vertical-center">
    <div class="row">
      <div class="col-lg-5 col-md-7">
        <h2>Login</h2>
        <p class="lead">Enter your credentials below to get started</p>
        {!! Form::open() !!}
        <div class="row">
          <div class="col-12">
            @if (session('register_success'))
            <div class="alert bg--success">
              <div class="alert__body">
                <span>User Registered Successfully. Please Login to Continue</span>
              </div>
              <div class="alert__close">×</div>
            </div>
            @endif
            <input type="email" name="email" placeholder="Email Address" required />
          </div>
          <div class="col-12">
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn--primary type--uppercase">Login</button>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>
@stop