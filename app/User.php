<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Validator;
use Auth;
use Request;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   */
  protected $fillable = [
      'name', 'email', 'password','avatar','freelancer',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

  public function jobs(){
    return $this->hasMany('App\Job');
  }

  public function applications(){
    return $this->hasMany('App\Application');
  }



  /**
   * Encrypts Password Request.
   *
   */
  public function setPasswordAttribute($password){   
    $this->attributes['password'] = bcrypt($password);
  }

  /**
   * Validation Rules For User Table - Create Instance.
   *
   */
  public function storeValidRules()
  {
    return $rules = [
      'name' => 'required|min:2',
      'email' => 'required|email|unique:users',
      'password'=> 'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
      'freelancer'=> 'required|boolean'
    ];
  }

  public function loginValidRules()
  {
    return $rules = [
      'email' => 'required|email',
      'password'=> 'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
    ];
  }

  public function storeUserInstance(){
    $validator = Validator::make(Request::all(),$this->storeValidRules());
    if($validator->passes()){
      User::create(Request::all());
    }
    else{
      return $validator;
    }
  }

  public function userLoginInstance(){
    $validator = Validator::make(Request::all(),$this->loginValidRules());
    if($validator->passes()){
      return Auth::attempt([
        'email' => Request::get('email'),
        'password' => Request::get('password')
      ]) ? true : false;
    }
    else{
      return false;
    }
  }
}
