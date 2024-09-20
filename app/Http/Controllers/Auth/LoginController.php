<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
    
        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['username' => 'These credentials do not match our records.']);
        }
    
        return redirect('/dashboard');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
    
}
