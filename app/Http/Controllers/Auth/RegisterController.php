<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function showRegistrationForm(Request $request)
    {
       /* $validatedData = $request->validate([
            'type' => ['required', 'string'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'phone' => ['required', 'string', 'min:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.($request->input('type') == 'user' ? 'users' : 'staffs')],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'passport_photo' => ['nullable', 'image'],
            'id_front' => ['nullable', 'image'],
            'id_back' => ['nullable', 'image'],
            'user_role' => ['required', 'string'],
            'status' => ['required', 'string'],
        ]);
    
        $model = $request->input('type') == 'user' ? User::class : Staff::class;
    
        $instance = $model::create($validatedData);
        */
        
        return view('auth.register');
    }

    /*public function __invoke(Request $request)
    {
        
    
        return redirect('/dashboard');
    }*/
}
