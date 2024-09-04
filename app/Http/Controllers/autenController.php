<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class autenController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function process_login(Request $request)
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
            $user = User::where('email', $credentials['email'])->first();

            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_name', $user->name);
            $request->session()->put('user_mail', $user->mail);
            
            return redirect('Admin');
        } else {
            return redirect()->back()->with('error', );
            
        }
    }
}