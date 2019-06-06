<?php

namespace App\Http\Controllers;

use App\Fiets;
use function Composer\Autoload\includeFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $fietsen = Fiets::take(4)->orderBy('created_at', 'desc')->get();

//        dd($fietsen);



        // moet nog over nagedacht worden over de functie

//        if (Fiets::where('aanbieding_id')->exists()) {
//            // user found
////            dd("dieeee");
//        }

        $test = 1;



        $salefietsen = DB::table('fiets')
            ->where('aanbieding_id', '=', $test)
            ->limit(4)
            ->get();
//        dd($salefietsen);

        return view('welcome', ['fietsen' => $fietsen, 'salefietsen' => $salefietsen]);

//      return view('home', ['fietsen' => $fietsen, 'salefietsen' => $salefietsen]);

    }
}
