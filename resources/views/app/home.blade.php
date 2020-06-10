@extends('layout.app')
@section('app-title')Home @stop
@section('app-content')
<section class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img alt="pic" src="/img/banner.png" />
      </div>
    </div>
  </div>
</section>
<section class="text-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <h2>Need work done?</h2>
        <p class="lead">
          Hire the best freelancers for any job, online.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="switchable feature-large">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img alt="Image" src="img/home_feature_1.jpg" />
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="switchable__text">
          <h2>Post a job</h2>
          <p class="lead">
            It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes.
          </p>
          <a href="#">Learn More &raquo;</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="switchable switchable--switch feature-large">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-md-6">
        <img alt="Image" src="img/home_feature_2.jpg" />
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="switchable__text">
          <h2>Choose freelancers</h2>
          <p class="lead">
            Whatever your needs, there will be a freelancer to get it done: from web design, mobile app development, virtual assistants, product manufacturing, and graphic design (and a whole lot more).
          </p>
          <a href="#">Learn More &raquo;</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-center bg--secondary">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-md-10 col-lg-8">
        <h2>What's great about Fixetics?</h2>
      </div>
    </div>
  </div>
</section>
<section class="switchable bg--secondary">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-md-6 text-center">
        <div class="video-cover border--round box-shadow-wide">
          <div class="background-image-holder">
            <img alt="image" src="img/home_footer.jpg" />
          </div>
          <iframe data-src="https://www.youtube.com/embed/6p45ooZOOPo?autoplay=1" allowfullscreen="allowfullscreen"></iframe>
        </div>
        <span>Fixetics &mdash; used by over
        <strong>17,000</strong> customers
        <a target="_blank" href="#">See how it works &nearr;</a>
        </span>
      </div>
      <div class="col-md-6 col-lg-5">
        <ol class="process-3">
          <li class="process_item">
            <div class="process__number">
              <span>1</span>
            </div>
            <div class="process__body">
              <h4>Browse portfolios</h4>
              <p>Find professionals you can trust by browsing their samples of previous work and reading their profile reviews.</p>
            </div>
          </li>
          <li class="process_item">
            <div class="process__number">
              <span>2</span>
            </div>
            <div class="process__body">
              <h4>View bids</h4>
              <p>
                Receive free bids from our talented freelancers within seconds.
              </p>
            </div>
          </li>
          <li class="process_item">
            <div class="process__number">
              <span>3</span>
            </div>
            <div class="process__body">
              <h4>Pay for quality</h4>
              <p>
                Pay for work when it has been completed and you're 100% satisfied.
              </p>
            </div>
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cta cta-1 cta--horizontal boxed boxed--border text-center-xs row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <h4>Let's get you started</h4>
          </div>
          <div class="col-lg-4 col-md-5">
            <p class="lead">
              Start building pages in your browser
            </p>
          </div>
          <div class="col-lg-4 col-md-3 text-center">
            <a class="btn btn--primary type--uppercase" href="#">
            <span class="btn__text">
            Try Builder
            </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop