<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $data = $request->all();

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required'    =>"Incorrect Email",
            'password.required' =>"Incorrect Password"
        ]);

        //  if ($validator->fails()) {
        //     $errors = $validator->errors();
        //     return back()->with('errors', $errors);
        // }
        $user_data = array(
            'email'     => $data['email'],
            'password'  => $data['password']
        );
        if (Auth::attempt($user_data)) {
            return redirect('/dashboard');
        }else{
            return back()->with('error', 'Invalid Credentials!');
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/auth/login');
      }
}
