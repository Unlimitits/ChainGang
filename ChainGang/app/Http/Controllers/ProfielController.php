<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class ProfielController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->user =  \Auth::user();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function display()
    {
        $user = Auth::user();

//        $klant = User::findOrFail(Auth::user()->$foundUser->id);
        $reviews = db::table('reviews')->where('user_id', $user->id)->orderBy('created_at' ,'desc')->get();
        $bestellingen = db::table('bestelling')->where('user_id', $user->id)->orderBy('created_at' ,'desc')->get();
        //return view('UserBeheer.show', compact('klant', 'id'));
        return view('profiel', ['klant' => Auth::user()->id, 'reviews' => $reviews, 'bestellingen' => $bestellingen]);
    }

    public function update(Request $request) {
        $user = Auth::user();
        $user->user_voornaam = $request->input('user_voornaam');
        $user->user_achternaam = $request->input('user_achternaam');
        $user->email = $request->input('email');
        $user->user_telefoonnummer = $request->input('user_telefoonnummer');
        $user->user_straat = $request->input('user_straat');
        $user->user_postcode = $request->input('user_postcode');
        $user->user_plaats = $request->input('user_plaats');
        $user->save();
        return redirect()->back();
    }

    public function store()
    {

    }
}
