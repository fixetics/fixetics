<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
use Auth;
use Request;
use Illuminate\Support\Str;

class Job extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   */
  protected $fillable = [
      'title', 'slug','description', 'applicant_id','budget'
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function applications(){
    return $this->hasMany('App\Application');
  }

  public function storeValidRules()
  {
    return $rules = [
      'title' => 'required|min:2|unique:jobs',  
      'description' => 'required|min:2',
      'budget'=> 'required|numeric'
    ];
  }

  public function storeJobInstance(){
    $validator = Validator::make(Request::all(),$this->storeValidRules());
    if($validator->passes()){
      $job = new Job;
      $job->user_id = Auth::user()->id;
      $job->title = Request::get('title');
      $job->description = Request::get('description');
      $job->budget = Request::get('budget');
      $job->slug = Str::slug(Request::get('title'), '-');
      $job->save();
    }
    else{
      return $validator;
    }
  }
}
