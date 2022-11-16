<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UsersInfo;
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
            // 'nickname' => ['required', 'string', 'max:255'],
            // 'nid' => ['required', 'string', 'max:255'],
            // 'phone' => ['required', 'string', 'max:14'],
            // 'gender' => ['required', 'string', 'max:255'],
            // 'department' => ['required', 'string', 'max:255'],
            // 'hall' => ['required', 'string', 'max:255'],
            // 'bloodgroup' => ['required', 'string', 'max:255'],
            // 'birthdate' => ['required', 'string', 'max:255'],
            // 'district' => ['required', 'string', 'max:255'],
            // 'address' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
//        dd($data);

        $test = UsersInfo::create([
            'name'  =>  $data['name'],
            // 'nickname'  =>  $data['nickname'],
            // 'image_path'  =>  'test',
            'email'  =>  $data['email'],
            // 'nid'  =>  $data['nid'],
            'phone'  =>  $data['phone'],
            // 'gender'  =>  $data['gender'],
            // 'department'  =>  $data['department'],
            // 'hall'  =>  $data['hall'],
            // 'bloodgroup'  =>  $data['bloodgroup'],
            // 'birthdate'  =>  $data['dob'],
            // 'district'  =>  $data['district'],
            'address'  =>  $data['address'],
            'subscription'  =>  'none',
            'status'  =>  'unregistered',
        ]);
        // dd($test);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // 'nickname' => $data['nickname'],
            // 'nid' => $data['nid'],
            // 'phone' => $data['phone'],
            // 'gender' => $data['gender'],
            // 'department' => $data['department'],
            // 'hall' => $data['hall'],
            // 'bloodgroup' => $data['bloodgroup'],
            // 'birthdate' => $data['dob'],
            // 'district' => $data['district'],
            // 'address' => $data['address'],
        ]);
    }
}
