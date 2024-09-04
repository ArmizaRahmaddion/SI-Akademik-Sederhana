<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Tbuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function processlogin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
            
        ], [
            'email.required' => 'Email field is required.',
            'password.required' => 'Password field is required.',
            
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Tbuser::where('email', $credentials['email'])->first();

            
            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_name', $user->name);
            $request->session()->put('user_mail', $user->mail);
            
            return redirect('welcome2');
        } else {
            return redirect()->back()->with('error', );
            
        }
    }
}