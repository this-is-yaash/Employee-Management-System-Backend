<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'email'     => 'required|email',
            'password'  => 'required|min:3'
        ]);
         if ($validator->fails()) {
            $errors = $validator->errors();
            return back()->with('errors', $errors);
        }
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
}
