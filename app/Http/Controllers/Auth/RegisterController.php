<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'date_of_birth' => ['required', 'date'],
            // 'cpf' => ['required', 'numeric', 'max:11'],
            // 'address' => ['required', 'string'],
            // 'number' => ['required', 'numeric'],
            // 'complement' => ['string'],
            // 'ufs_id' => ['required'],
            // 'neighbourhood' => ['string', 'required'],
            // 'city' => ['required', 'string'],
            // 'cep' => ['required', 'max:8', 'numeric'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    protected function create(array $data) {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // 'date_of_birth' => $data['date_of_birth'],
            // 'cpf' => $data['cpf'],
            // 'address' => $data['address'],
            // 'number' => $data['number'],
            // 'complement' => $data['complement'],
            // 'ufs_id' => $data['ufs_id'],
            // 'neighbourhood' => $data['neighbourhood'],
            // 'city' => $data['city'],
            // 'cep' => $data['cep'],
        ]);
    }

    public function showRegistrationForm()
    {
        $ufs = \App\UF::all();
        return view('auth.register', compact('ufs'));
    }
}
