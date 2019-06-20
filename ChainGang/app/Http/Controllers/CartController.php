<?php

namespace App\Http\Controllers;

use App\Fiets;
use App\Bestelling;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $fiets = Fiets::all();
//        dd("test");
        return view('winkelwagen', compact('fiets'));
    }


    public function addToCart($id){

        $fiets = Fiets::find($id);

        if(!$fiets) {

            abort(404);

        }

        $cart = session()->get('cart');


        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "name" => $fiets->fiets_naam,
                    "quantity" => 1,
                    "fiets_prijs" => $fiets->fiets_prijs,
//                    "fiets_foto" => utf8_encode($fiets->fiets_foto)
                ]
            ];


            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Het product is succesvol toegevoegd aan de winkelwagen!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Het product is succesvol toegevoegd aan de winkelwagen!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $fiets->fiets_naam,
            "quantity" => 1,
            "fiets_prijs" => $fiets->fiets_prijs,
//            "fiets_foto" => utf8_encode($fiets->fiets_foto)
        ];


        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Het product is succesvol toegevoegd aan de winkelwagen!');

    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'De winkelwagen is succesvol bijgewerkt');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);


                session()->put('cart', $cart);

            }
            session()->flash('success', 'Het product is succesvol verwijderd');
        }
    }

    public function getCheckout(){

        $cart = session()->get('cart');

        if (!$cart){
                return view('winkelwagen');
        }
        return view('checkout');


    }

    public function postCheckout(Request $request){
        $cart = session()->get('cart');

        if (!$cart){
            return view('winkelwagen');
        }


        $bestelling = new Bestelling();
        $bestelling->voornaam = $request->input('user_voornaam');
        $bestelling->achternaam = $request->input('user_achternaam');
        $bestelling->rekeningnummer = $request->input('rekeningnummer');
        $bestelling->straat = $request->input('user_straat');
        $bestelling->postcode = $request->input('user_postcode');
        $bestelling->plaats = $request->input('user_plaats');

        $bestelling->cart = serialize($cart);

        Auth::user()->bestellingen()->save($bestelling);
        Session::forget('cart');
        return redirect()->route('home')->with('success', 'De producten in de winkelwagen zijn succesvol gekocht');
    }
}
