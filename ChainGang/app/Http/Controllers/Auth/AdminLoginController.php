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
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
//        return view('auth.admin-login');
        return redirect()->route('admin.login');
    }


    public function login(Request $request)
    {

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location

            dd("succeed");
            return redirect()->intended(route('admin.dashboard'));


//            return view('admin');

//            Redirect::intended(action('AdminController@index'));
//            return view('admin');

//            redirect()->intended('/admin');


        }

        // if unsuccessful, then redirect back to the login with the form data
        dd("NOT succeed");
        return redirect()->back()->withInput($request->only('email', 'remember'));




    }
}
