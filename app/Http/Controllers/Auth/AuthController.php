<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required'    =>"Incorrect Email",
            'password.required' =>"Incorrect Password"
        ]);
        $user_data = array(
            'email'     => $data['email'],
            'password'  => $data['password']
        );
        if (Auth::attempt($user_data)) {
            $request->session()->put('admin',$request->input());
            return redirect('/dashboard');

        }else{
            return back()->with('error', 'Invalid Credentials!');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        session()->forget('admin');
        return redirect('/');
    }
    public function register(){
        return view('register');
    }
    public function validate_registration(Request $request){
        $request->validate([
            'user_name'     => 'required',
            'email'             => 'required',
            'password'          => 'required',
            'role'              => 'required',
            'designation'       => 'required',
            'phone_number'      => 'required',
            'salary'            => 'required',
            'age'               => 'required',
            'dob'               => 'required',
            'image'             => 'required'
        ]);
    }
}
