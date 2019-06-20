<?php

namespace App\Http\Controllers;

use App\Nieuwsbrief;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

        $nieuwsbrief->nieuwsbrief_titel = $request->nieuwsbrief_titel;
        $nieuwsbrief->nieuwsbrief_datum = now();
        $nieuwsbrief->nieuwsbrief_text = $request->nieuwsbrief_text;

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
