<?php

namespace App\Http\Controllers;

use App\InschrijvenNieuwsbrief;
use App\Nieuwsbrief;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NieuwsbriefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nieuwsbrief = Nieuwsbrief::all();
        return view('NieuwsbriefBeheer.index', compact('nieuwsbrief'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nieuwsbrief = new Nieuwsbrief();
        return view('NieuwsbriefBeheer.create', compact('nieuwsbrief'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nieuwsbrief = new Nieuwsbrief();

        $nieuwsbriefUser = InschrijvenNieuwsbrief::all();

        $nieuwsbrief->nieuwsbrief_titel = $request->nieuwsbrief_titel;
        $nieuwsbrief->nieuwsbrief_datum = now();
        $nieuwsbrief->nieuwsbrief_text = $request->nieuwsbrief_text;

        foreach ($nieuwsbriefUser as $user){
            Mail::to($user->email)->send(new \App\Mail\Nieuwsbrief($nieuwsbrief));
            if(env('MAIL_HOST', false) == 'smtp.mailtrap.io'){
//                dd("hoi");
                sleep(5); //use usleep(500000) for half a second or less
            }
        }

//        dd($nieuwsbrief);

        $nieuwsbrief->save();

        return redirect()->route('nieuwsbrief.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nieuwsbrief = Nieuwsbrief::findOrFail($id);
        return view('NieuwsbriefBeheer.show', compact('nieuwsbrief', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
