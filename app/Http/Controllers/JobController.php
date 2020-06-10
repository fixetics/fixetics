<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use Auth;

class JobController extends Controller
{
  public function listJobs(){
    $jobs = Job::all();
    return view('app.job.list')->with('jobs',$jobs);
  }

  public function createJob(){
    return view('app.job.create');
  }

  public function getJob($slug){
    $job = Job::where('slug',$slug)->first();
    if($job){
    return view('app.job.get')->with('job',$job);  
    }
  }


  public function postJob(Request $request){
    $job = new job;
    $validator = $job->storeJobInstance();
    if($validator){
      return redirect()->back()->withErrors($validator->errors());
    }
    else{
      return redirect()->route('user.get')->with('success_job_create','true');
    }
  }
}
