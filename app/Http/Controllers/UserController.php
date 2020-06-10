<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{

  public function getlogin(){
    return view('app.user.login');
  }

  public function postlogin(Request $request){
    $user = new User;
    $validator = $user->userLoginInstance();
    if($validator){
      return redirect()->route('user.get'); 
    }
    else{
      return redirect()->back();    
    }
  }

  public function postRegister(){
    $user = new User;
    $validator = $user->storeUserInstance();
    if($validator){
      return redirect()->back()->withErrors($validator->errors());
    }
    else{
      return redirect()->route('login.get')->with('register_success','true');
    }
  }

  public function logoutUser(){
    Auth::logout();
    return redirect()->route('login.get');
  }


}
