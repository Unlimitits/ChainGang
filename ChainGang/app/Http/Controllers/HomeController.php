<?php

namespace App\Http\Controllers;

use App\Fiets;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fietsen = Fiets::take(4)->orderBy('created_at')->get();
        return view('welcome', ['fietsen' => $fietsen]);
    }
}
