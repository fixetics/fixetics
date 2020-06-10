<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
use Auth;
use Request;
use Illuminate\Support\Str;

class Application extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   */
  protected $fillable = [
      'user_id'
  ];

  public function job(){
    return $this->belongsTo('App\Job');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function storeValidRules()
  {
    return $rules = [
      'user_id' => 'integer'  
    ];
  }

  public function approveValidRules()
  {
    return $rules = [
      'user_id' => 'required|integer'  
    ];
  }

  public function storeApplicationInstance($id){
    $validator = Validator::make(Request::all(),$this->storeValidRules());
    if($validator->passes()){
      $application = new Application;
      $application->job_id = $id;
      $application->user_id = Auth::user()->id;
      $application->save();
    }
    else{
      return $validator;
    } 
  }
  
  public function approveApplicationInstance($id){
    $validator = Validator::make(Request::all(),$this->approveValidRules());
    if($validator->passes()){
      $job = Job::where('slug',$id)->first();
      $job->applicant_id = Request::get('user_id');
      $job->save();
    }
    else{
      return $validator;
    } 
  }  

}
