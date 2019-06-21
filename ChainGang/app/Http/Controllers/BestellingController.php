<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bestelling;

class BestellingController extends Controller
{
    public function index()
    {
        $bestelling = Bestelling::all();
        return view('Bestellingbeheer.index', compact('bestelling'));
    }
}
