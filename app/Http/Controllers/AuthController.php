<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function welcome(Request $request)
    {
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            // Add other form data as needed
        ];

        return view('welcome', $data);
    }
}
