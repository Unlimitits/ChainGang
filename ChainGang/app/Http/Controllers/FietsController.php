<?php

namespace App\Http\Controllers;

use App\Fiets;
use App\Review;
use App\User;
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
        $fiets = Fiets::all();
        $fietsen = DB::table('fiets')->paginate(3);

        $arrayFrameType = array();
        foreach ($fiets as $frametype) {
            $arrayFrameType[] = $frametype->fiets_frameType;
        }
        $arrayFrameTypeUnique = array_unique($arrayFrameType);

        $arrayBrand = array();
        foreach ($fiets as $frametype) {
            $arrayBrand[] = $frametype->fiets_merk;
        }
        $arrayBrandUnique = array_unique($arrayBrand);




//        dd($unique_data);


        return view('categoriepagina', ['fietsen' => $fietsen , 'fiets' => $fiets, 'arrayFrameTypeUnique' => $arrayFrameTypeUnique, 'arrayBrandUnique' => $arrayBrandUnique] );
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


        $review = Review::all()->where('fiets_id', '==', $id);

        $user = User::all();




        foreach ($review as $reviews)
        {
            $users = User::all()->where('id', '=', $reviews->user_id);

            foreach ($users as $user){
                $user->user_gebruikersnaam;
            }
        }



        return View('detailpagina', compact('fiets', 'id', 'review', 'user', 'users'));
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

    public function filterBrand($brand)
    {

        $fiets = Fiets::all();
        $fietsen = DB::table('fiets')->where('fiets_merk', '=', $brand)->paginate(3);

        $arrayFrameType = array();
        foreach ($fiets as $frametype) {
            $arrayFrameType[] = $frametype->fiets_frameType;
        }
        $arrayFrameTypeUnique = array_unique($arrayFrameType);

        $arrayBrand = array();
        foreach ($fiets as $frametype) {
            $arrayBrand[] = $frametype->fiets_merk;
        }
        $arrayBrandUnique = array_unique($arrayBrand);


        return view('categoriepagina', compact('fiets', 'fietsen', 'arrayFrameTypeUnique', 'arrayBrandUnique'));

    }

    public function filterFrameType($frametype)
    {
        $fiets = Fiets::all();
        $fietsen = DB::table('fiets')->where('fiets_frameType', '=', $frametype)->paginate(3);
//        dd($fietsen);
        $arrayFrameType = array();
        foreach ($fiets as $frametype) {
            $arrayFrameType[] = $frametype->fiets_frameType;
        }
        $arrayFrameTypeUnique = array_unique($arrayFrameType);

        $arrayBrand = array();
        foreach ($fiets as $frametype) {
            $arrayBrand[] = $frametype->fiets_merk;
        }
        $arrayBrandUnique = array_unique($arrayBrand);


        return view('categoriepagina', compact('fiets', 'fietsen', 'arrayFrameTypeUnique', 'arrayBrandUnique'));
    }

    public function filterPrice($priceMin)
    {
//        dd($priceMin);
        $fiets = Fiets::all();
        $fietsen1 = DB::table('fiets')->whereBetween('fiets_prijs', [0, 999])->paginate(3);
        $fietsen2 = DB::table('fiets')->whereBetween('fiets_prijs', [1000, 1999])->paginate(3);
        $fietsen3 = DB::table('fiets')->whereBetween('fiets_prijs', [2000, 2999])->paginate(3);
        $fietsen4 = DB::table('fiets')->whereBetween('fiets_prijs', [3000, 3999])->paginate(3);
        $fietsen5 = DB::table('fiets')->whereBetween('fiets_prijs', [4000, 4999])->paginate(3);
        $fietsen6 = DB::table('fiets')->whereBetween('fiets_prijs', [5000, 5999])->paginate(3);
        $fietsen7 = DB::table('fiets')->whereBetween('fiets_prijs', [6000, 6999])->paginate(3);

        if ($priceMin >= 0 && $priceMin < 1000) {
            $fietsen = $fietsen1;
        } elseif ($priceMin >= 1000 && $priceMin < 2000) {
            $fietsen = $fietsen2;
        } elseif ($priceMin >= 2000 && $priceMin < 3000) {
            $fietsen = $fietsen3;
        }elseif ($priceMin >= 3000 && $priceMin < 4000) {
            $fietsen = $fietsen4;
        }elseif ($priceMin >= 4000 && $priceMin < 5000) {
            $fietsen = $fietsen5;
        }elseif ($priceMin >= 5000 && $priceMin < 6000) {
            $fietsen = $fietsen6;
        }elseif ($priceMin >= 6000 && $priceMin < 7000) {
            $fietsen = $fietsen7;
        } else {
            $fietsen = null;
        }



        $arrayFrameType = array();
        foreach ($fiets as $frametype) {
            $arrayFrameType[] = $frametype->fiets_frameType;
        }
        $arrayFrameTypeUnique = array_unique($arrayFrameType);

        $arrayBrand = array();
        foreach ($fiets as $frametype) {
            $arrayBrand[] = $frametype->fiets_merk;
        }
        $arrayBrandUnique = array_unique($arrayBrand);

//        dd($fietsen);

        return view('categoriepagina', compact('fiets', 'fietsen', 'arrayFrameTypeUnique', 'arrayBrandUnique'));
    }
}
