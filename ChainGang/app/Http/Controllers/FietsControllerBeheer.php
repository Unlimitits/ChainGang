<?php

namespace App\Http\Controllers;

use App\Fiets;
use Illuminate\Http\Request;

class FietsControllerBeheer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiets = Fiets::all();

        return view('FietsBeheer.index', ['fiets' => $fiets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fiets = new Fiets();
        return view('FietsBeheer.create', compact('fiets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fiets = new Fiets();

        $fiets->fiets_naam = $request->fiets_naam;
        $fiets->fiets_serie = $request->fiets_serie;
        $fiets->fiets_motortechniek = $request->fiets_motortechniek;
        $fiets->fiets_motorpositie = $request->fiets_motorpositie;
        $fiets->fiets_versnellingen = $request->fiets_versnellingen;
        $fiets->fiets_materiaal = $request->fiets_materiaal;
        $fiets->fiets_kleur = $request->fiets_kleur;
        $fiets->fiets_frameType = $request->fiets_frameType;
        $fiets->fiets_jaar = $request->fiets_jaar;
        $fiets->fiets_merk = $request->fiets_merk;
        $fiets->fiets_type = $request->fiets_type;
        $fiets->fiets_prijs = $request->fiets_prijs;
        $fiets->fiets_omschrijving = $request->fiets_omschrijving;

        if ($request->input('aanbieding_id') == null){
            $fiets->aanbieding_id = 0;
        } else {
            $fiets->aanbieding_id = $request->input('aanbieding_id');
        }


        $imageName = $request->file('file')->getRealPath();
        $fiets->fiets_foto = file_get_contents($imageName);

//        dd($fiets);

        $fiets->save();

        return redirect()->route('fiets-beheer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fiets = Fiets::findOrFail($id);
        return view('FietsBeheer.show', compact('fiets', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fiets = Fiets::findOrFail($id);
        return view('FietsBeheer.edit', compact('fiets', 'id'));

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
        $fiets = Fiets::findOrFail($id);


        $fiets->fiets_naam = $request->fiets_naam;
        $fiets->fiets_serie = $request->fiets_serie;
        $fiets->fiets_motortechniek = $request->fiets_motortechniek;
        $fiets->fiets_motorpositie = $request->fiets_motorpositie;
        $fiets->fiets_versnellingen = $request->fiets_versnellingen;
        $fiets->fiets_materiaal = $request->fiets_materiaal;
        $fiets->fiets_kleur = $request->fiets_kleur;
        $fiets->fiets_frameType = $request->fiets_frameType;
        $fiets->fiets_jaar = $request->fiets_jaar;
        $fiets->fiets_merk = $request->fiets_merk;
        $fiets->fiets_type = $request->fiets_type;
        $fiets->fiets_prijs = $request->fiets_prijs;
        $fiets->fiets_omschrijving = $request->fiets_omschrijving;
        $fiets->aanbieding_id = $request->input('aanbieding_id');

        dd($fiets);

        $fiets->save();

        return redirect()->route('fiets-beheer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fiets = Fiets::findOrFail($id);
        $fiets->delete();
        return redirect()->route('fiets-beheer.index');
    }
}
