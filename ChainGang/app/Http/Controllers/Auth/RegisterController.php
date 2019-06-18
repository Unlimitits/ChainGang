<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_gebruikersnaam' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_voornaam' => ['required', 'string', 'min:2'],
            'user_achternaam' => ['required', 'string', 'min:2'],
            'user_telefoonnummer' => ['required', 'string', 'min:7'],
            'user_straat' => ['required', 'string', 'min:2'],
            'user_postcode' => ['required', 'string', 'min:2'],
            'user_plaats' => ['required', 'string', 'min:2'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'user_gebruikersnaam' => $data['user_gebruikersnaam'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_voornaam' => $data['user_voornaam'],
            'user_achternaam' => $data['user_achternaam'],
            'user_telefoonnummer' => $data['user_telefoonnummer'],
            'user_straat' => $data['user_straat'],
            'user_postcode' => $data['user_postcode'],
            'user_plaats' => $data['user_plaats'],
        ]);
    }
}
