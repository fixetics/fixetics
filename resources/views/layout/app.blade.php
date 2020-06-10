<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>@yield('app-title') - Fixetics</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/custom.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  </head>
  <body class="">
    <a id="start"></a>
    <div class="nav-container">
      <div class="bar bar--sm visible-xs">
        <div class="container">
          <div class="row">
            <div class="col-3 col-md-2">
              <a href="index.html"> <img class="logo logo-dark" alt="logo" src="/img/logo-dark.png" /> <img class="logo logo-light" alt="logo" src="/img/logo-light.png" /> </a>
            </div>
            <div class="col-9 col-md-10 text-right">
              <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
            </div>
          </div>
        </div>
      </div>
      <nav id="menu2" class="bar bar-2 hidden-xs" data-scroll-class="100vh:pos-fixed">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 text-center text-left-sm hidden-xs order-lg-2">
              <div class="bar__module">
                <a href="index.html"> <img class="logo logo-dark" alt="logo" src="/img/logo-dark.png" /> <img class="logo logo-light" alt="logo" src="/img/logo-light.png" /> </a>
              </div>
            </div>
            <div class="col-lg-5 order-lg-1">
              <div class="bar__module">
                <ul class="menu-horizontal text-left">
                  <li><a href="/"><span>Home</span></a></li>
                  <li class="dropdown">
                    <span class="dropdown__trigger">Jobs</span>
                    <div class="dropdown__container">
                      <div class="container">
                        <div class="row">
                          <div class="dropdown__content col-lg-2 col-md-4">
                            <ul class="menu-vertical">
                              <li><a href="{{route('job.list')}}"><span>Apply For A Job</span></a></li>
                              <li><a href="{{route('job.create')}}"><span>Post a Job</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-5 text-right text-left-xs text-left-sm order-lg-3">
              <div class="bar__module">
                @if(Auth::user())
                <a class="btn btn--sm btn--primary type--uppercase" href="{{route('user.get')}}"> <span class="btn__text"> My Profile </span> </a>
                <a class="btn btn--sm btn--primary type--uppercase" href="{{route('user.logout')}}"> <span class="btn__text"> Logout </span> </a>
                @else
                <a class="btn btn--sm type--uppercase" href="{{route('login.get')}}"> <span class="btn__text"> Login </span> </a> <a class="btn btn--sm btn--primary type--uppercase" href="{{route('register.get')}}"> <span class="btn__text"> Register </span> </a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class="main-container">
      @yield('app-content')
      <footer class="footer-3 text-center-xs space--xs ">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img alt="Image" class="logo" src="/img/logo-dark.png">
              <ul class="list-inline list--hover">
                <li class="list-inline-item">
                  <a href="#">
                  <span class="type--fine-print">Get Started</span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                  <span class="type--fine-print">help@fixetics.com</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 text-right text-center-xs">
              <ul class="social-list list-inline list--hover">
                <li class="list-inline-item">
                  <a href="#">
                  <i class="socicon socicon-google icon icon--xs"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                  <i class="socicon socicon-twitter icon icon--xs"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                  <i class="socicon socicon-facebook icon icon--xs"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                  <i class="socicon socicon-instagram icon icon--xs"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p class="type--fine-print">
                Supercharge your web workflow
              </p>
            </div>
            <div class="col-md-6 text-right text-center-xs">
              <span class="type--fine-print">©
              <span class="update-year">2020</span> Fixetics Inc.</span>
              <a class="type--fine-print" href="#">Privacy Policy</a>
              <a class="type--fine-print" href="#">Legal</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active"> <i class="stack-interface stack-up-open-big"></i> </a>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/flickity.min.js"></script>
    <script src="/js/easypiechart.min.js"></script>
    <script src="/js/parallax.js"></script>
    <script src="/js/typed.min.js"></script>
    <script src="/js/datepicker.js"></script>
    <script src="/js/isotope.min.js"></script>
    <script src="/js/ytplayer.min.js"></script>
    <script src="/js/lightbox.min.js"></script>
    <script src="/js/granim.min.js"></script>
    <script src="/js/jquery.steps.min.js"></script>
    <script src="/js/countdown.min.js"></script>
    <script src="/js/twitterfetcher.min.js"></script>
    <script src="/js/spectragram.min.js"></script>
    <script src="/js/smooth-scroll.min.js"></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>