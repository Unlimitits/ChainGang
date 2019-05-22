<?php

namespace App\Http\Controllers;

use App\Fiets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FietsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      $fietsen = DB::table('fiets')->paginate(6);
//
//      return view('categoriepagina', ['fiets' => $fietsen]);
        //$fietsen = DB::table('fiets')->get();
        $fietsen = DB::table('fiets')->paginate(3);
        $damesfietsen = DB::table('fiets')
            ->where('fiets_frameType', '=', 'Vrouwen')
            ->paginate(3);
        $herenfietsen = DB::table('fiets')
            ->where('fiets_frameType', '=', 'Mannen')
            ->paginate(3);
        $kinderfietsen = DB::table('fiets')
            ->where('fiets_frameType', '=', 'Kinderen')
            ->paginate(3);
        return view('categoriepagina', ['fietsen' => $fietsen , 'damesfietsen' => $damesfietsen , 'herenfietsen' => $herenfietsen , 'kinderfietsen' => $kinderfietsen] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fiets = Fiets::find($id);

        return View('detailpagina', compact('fiets', 'id'));
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
