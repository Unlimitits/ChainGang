<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Redirect;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:medewerkerLogin');
    }

    public function showLoginForm()
    {

//        dd('showloginform');
        return view('auth.admin-login');
//        return redirect()->route('admin.login');
    }


    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            return redirect()->route('dashboard.index');



        }

        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));




    }
}
