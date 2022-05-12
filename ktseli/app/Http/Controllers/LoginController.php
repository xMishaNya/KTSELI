<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
      if(Auth::check()){
        return redirect()->intended('/');
      }

      $formFields = $request->only(['email', 'name', 'password']);

      if(Auth::attempt($formFields)){
        return redirect()->intended('/');
      }

      return redirect(route('user.login'))->withErrors([
        'email' => 'Не удалось авторизироваться'
      ]);
    }
}
