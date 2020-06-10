@extends('layout.app')
@section('app-title')Register @stop
@section('app-content')
<section class="imageblock switchable feature-large height-100">
  <div class="imageblock__content col-lg-6 col-md-4 pos-right">
    <div class="background-image-holder">
      <img alt="image" src="img/register.jpg" />
    </div>
  </div>
  <div class="container pos-vertical-center">
    <div class="row">
      <div class="col-lg-5 col-md-7">
        <h2>Register with Fixtetics</h2>
        <p class="lead"></p>
        {!! Form::open() !!}
            <div class="row">
              <div class="col-12">
                            @if ($errors->any())
              @foreach ($errors->all() as $error)
              <div class="alert bg--error">
                  <div class="alert__body">
                    <span>{{$error}}</span>
                  </div>
              </div> 
              @endforeach  
              @endif
                  <input type="name" name="name" placeholder="Enter Name" required/>
              </div>
              <div class="col-12">
                  <input type="email" name="email" placeholder="Enter Email Address" required />
              </div>
              <div class="col-12">
                  <input type="password" name="password" placeholder="Password"  required />
              </div>
              <div class="col-12">
                <div class="input-select">
                  <select required name="freelancer">
                    <option selected="" value="Default">Register As</option>
                    <option value="1" >Freelancer</option>
                    <option value="0" >Employer</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                  <button type="submit" class="btn btn--primary type--uppercase">Create Account</button>
              </div>
            </div>
        {!! Form::close() !!}
    </div>
    </div>
  </div>
</section>
@stop