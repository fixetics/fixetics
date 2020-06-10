@extends('layout.app')
@section('app-title'){{Auth::user()->name}}'s Profile @stop
@section('app-content')
<section class="bg--secondary space--sm">
  <div class="container">
    @if (session('success_job_create'))
    <div class="alert bg--success">
      <div class="alert__body">
        <span>Job Post Created Successfully</span>
      </div>
      <div class="alert__close">×</div>
    </div>
    @endif
    @if (session('success_approve'))
    <div class="alert bg--success">
      <div class="alert__body">
        <span>Application Approved Successfully</span>
      </div>
      <div class="alert__close">×</div>
    </div>
    @endif

    <div class="row">
      <div class="col-lg-4">
        <div class="boxed boxed--lg boxed--border">
          <div class="text-block text-center">
            <img alt="avatar" src="{{Auth::user()->avatar}}" class="image--sm">
            <span class="h5">{{Auth::user()->name}}</span>
            @if(Auth::user()->freelancer)
            <span>Freelancer Account</span>
            @else
            <span>Employer Account</span>
            @endif
          </div>
          <hr>
          <div class="text-block">
            <ul class="menu-vertical">
              <li>
                <a href="#" data-toggle-class=".account-tab:not(.hidden);hidden|#account-profile;hidden">Profile</a>
              </li>
              <li>
                <a href="#" data-toggle-class=".account-tab:not(.hidden);hidden|#account-jobs;hidden">Jobs</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="boxed boxed--lg boxed--border">
          <div id="account-profile" class="account-tab">
            <h4>Profile</h4>
            {!! Form::model(Auth::user(),["files" => true,"method"=>"PUT"]) !!}
              <div class="row">
                <div class="col-md-12">
                  <label>Name</label>
                  {{ Form::text('name',null, ['class' => 'form-control', 'required']) }}
                </div>
                <div class="col-md-12">
                  <label>Email Address:</label>
                  {{ Form::email('email',null, ['class' => 'form-control', 'required']) }}
                </div>
                <div class="col-lg-3 col-md-4">
                  <button type="submit" class="btn btn--primary type--uppercase">Update Profile</button>
                </div>
              </div>
            </form>
          </div>
          <div id="account-jobs" class="hidden account-tab">
            @if(Auth::user()->freelancer)
            @if(Auth::user()->applications()->count()>0)
            <div class="table-responsive-sm">
                <table class="border--round">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Job Title</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach(Auth::user()->applications as $application)
                    <tr>
                    <td data-tooltip="View Job Details"><a href="{{route('job.get',$application->job->slug)}}">{{$application->job->id}}</a></td>
                    <td>{{$application->job->title}}</td>
                    <td>@if($application->job->applicant_id == Auth::user()->id) Approved @else Submitted @endif</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            @endif
            @else
            @if(Auth::user()->jobs()->count()>0)
            <div class="table-responsive-sm">
                <table class="border--round">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Job Title</th>
                      <th>Applicants</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach(Auth::user()->jobs as $job)
                    <tr>
                      <td data-tooltip="View Job Details"><a href="{{route('job.get',$job->slug)}}">{{$job->id}}</a></td>
                      <td>{{$job->title}}</td>
                      <td><a href="{{route('job.applications.get',$job->slug)}}">{{$job->applications()->count()}}</a></td>
                      <td>@if($job->applicant_id == null) Not Assigned @else Assigned @endif</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              @endif
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop