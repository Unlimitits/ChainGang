<?php

namespace App\Http\Controllers;

use App\Medewerker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MedewerkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('medewerkerLogin');
    }

    public function index()
    {
        $medewerker = Medewerker::all();

        return view('GebruikerBeheer.index', ['medewerker' => $medewerker]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medewerker = new Medewerker();
        return view('GebruikerBeheer.create', compact('medewerker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medewerker = new Medewerker();

        $medewerker->gebruiker_voornaam = $request->Voornaam;
        $medewerker->gebruiker_achternaam = $request->Achternaam;
        $medewerker->email = $request->Email;
        $medewerker->gebruiker_telefoonnummer = $request->Telefoonnummer;
//        $medewerker->gebruiker_gebruikersnaam = $request->Gebruikersnaam;
        $medewerker->password = Hash::make($request->Wachtwoord);

        $medewerker->save();

        return redirect()->route('medewerker.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medewerker = Medewerker::findOrFail($id);
        return view('GebruikerBeheer.show', compact('medewerker', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medewerker = Medewerker::findOrFail($id);
        return view('GebruikerBeheer.edit', compact('medewerker', 'id'));

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
        $medewerker = Medewerker::findOrFail($id);
        $medewerker->gebruiker_voornaam = $request->Voornaam;
        $medewerker->gebruiker_achternaam = $request->Achternaam;
        $medewerker->gebruiker_emailadres = $request->Email;
        $medewerker->gebruiker_telefoonnummer = $request->Telefoonnummer;
        $medewerker->gebruiker_gebruikersnaam = $request->Gebruikersnaam;
        $medewerker->gebruiker_wachtwoord = $request->Wachtwoord;

        $medewerker->save();

        return redirect()->route('medewerker.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medewerker = Medewerker::findOrFail($id);
        $medewerker->delete();
        return redirect()->route('medewerker.index');
    }
}
