<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LoginController extends BackendController
{
   public function index()
   {
   		return view("backend/auth/index");
   }

   public function authenticate(Request $request)
   {
        $username = $request->input('username');
        $password = $request->input('password');

        if (filter_var($username, FILTER_VALIDATE_EMAIL)){
            if (Auth::guard('admin')->attempt(['email' => $username, 'password' => $password], $request->input('remember'))) {

                //var_dump(Auth::guard('admin')->check());die;

                return redirect()->intended(route('backend-home'));
            }
        }else{
            if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $password], $request->input('remember'))) {
                //var_dump(Auth::guard('admin')->check());die;
                return redirect()->intended(route('backend-home'));
            }
        }
   }

   protected function guard()
{
    return Auth::guard('admin');
}
}
