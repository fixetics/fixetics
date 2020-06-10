<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AppController extends Controller
{

  public function home(){
    return view('app.home');
  }
  public function getUser(){
    if(Auth::user()){
    return view('app.user.profile');
    }
  }

  public function getRegister(){
    return view('app.user.register');
  }
}
