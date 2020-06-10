<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Job;
use Auth;
class ApplicationController extends Controller
{
  public function applyJob($slug){
    $job = Job::where('slug',$slug)->first();
    if($job){
      if(Application::where('job_id',$job->id)->where('user_id',Auth::user()->id)->exists())
      {
        return redirect()->back()->with('already_applied','true');
      }
      $application = new Application;
      $validator = $application->storeApplicationInstance($job->id);
      if($validator){
        return redirect()->back()->withErrors($validator->errors());
      }
      else{
        return redirect()->back()->with('success_application','true');
      }
    }
    else{
      abort(404);
    }
  }

  public function getApplications($slug){
    $job = Job::where('slug',$slug)->first();
    if($job){
      return view('app.user.applications.get')->with('job',$job); 
    }
  }

  public function approveApplication($id){
    $job = Job::where('slug',$id)->first();
    if($job){
      $application = new Application;
      $validator = $application->approveApplicationInstance($id);
      if($validator){
        return redirect()->back()->withErrors($validator->errors());
      }
      else{
        return redirect()->route('user.get')->with('success_approve','true');
      }
    }
  }
}
