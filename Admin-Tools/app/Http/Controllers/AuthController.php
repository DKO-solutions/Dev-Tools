<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pin;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                ->withSuccess('Signed in');
        }

        return redirect('login')->with('error', 'Oopses! You have entered invalid credentials');
    }

    public function Signup()
    {
        return view('auth.registration');
    }

    public function Registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'pin' => 'required'
        ]);

        $pin = $request->only('pin');
        $pin = DB::table('adminpin')->where('pin', $pin)->first();
        if (!$pin) {
           return redirect("/registration")->with('msg', 'You have entered an invalid authentication pin');
        }

            $data = $request->all();
            $check = $this->create($data);
            return redirect("/login")->withSuccess('You have signed-up');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => '0'
        ]);
        
    }



    public function Signout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

}
