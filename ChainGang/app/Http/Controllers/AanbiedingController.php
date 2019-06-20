<?php

namespace App\Http\Controllers;

use App\Aanbieding;
use Illuminate\Http\Request;

class AanbiedingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aanbieding = Aanbieding::all();

        return view('AanbiedingBeheer.index', ['aanbieding' => $aanbieding]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aanbieding = new Aanbieding();
        return view('AanbiedingBeheer.create', compact('aanbieding'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aanbieding = new Aanbieding();

        $aanbieding->aanbieding_naam = $request->aanbieding_naam;
        $aanbieding->aanbieding_kortingpct = $request->aanbieding_kortingpct;

        $aanbieding->save();

        return redirect()->route('aanbieding.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aanbieding = Aanbieding::findOrFail($id);
        return view('AanbiedingBeheer.show', compact('aanbieding', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aanbieding = Aanbieding::findOrFail($id);
        return view('AanbiedingBeheer.edit', compact('aanbieding', 'id'));

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
        $aanbieding = Aanbieding::findOrFail($id);
        $aanbieding->aanbieding_naam = $request->aanbieding_naam;
        $aanbieding->aanbieding_kortingpct = $request->aanbieding_kortingpct;

        $aanbieding->save();

        return redirect()->route('aanbieding.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aanbieding = Aanbieding::findOrFail($id);
        $aanbieding->delete();
        return redirect()->route('aanbieding.index');
    }
}
