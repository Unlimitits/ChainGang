<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class FietsController extends Controller
{
    public function index()
    {
//      $fietsen = DB::table('fiets')->paginate(6);
//
//      return view('categoriepagina', ['fiets' => $fietsen]);
        //$fietsen = DB::table('fiets')->get();
        $fietsen = DB::table('fiets')->paginate(3);

        return view('categoriepagina', ['fietsen' => $fietsen]);
    }
}
