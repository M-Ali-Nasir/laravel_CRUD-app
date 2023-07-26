<?php
// app/Http/Controllers/AuthController.php

// app/Http/Controllers/AuthController.php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class AuthController extends Controller
{
    public function showLoginForm()
    {
        
        return view('products.login');
    }

    public function login(Request $request,)
    {
        $logedin = false;
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Access the email and password submitted from the form
        $email = $request->input('email');
        $password = $request->input('password');
        

        // access users form user table
        $users = User::all();
        $yes = false;

        // Check if user is present or not

        foreach ($users as $user){
            if($user->email == $email){
                if($user->password == $password){
                    $yes=true;
                    break;
                }
            }
        }

        
       // $adminEmail = $user->email;
       // $adminpswd = $user->password;
        // Your authentication logic using $email and $password goes here
        
        //if (($email == $adminEmail) && ($password == $adminpswd)) {
            if ($yes==true) {
            // Authentication successful, redirect to the index route.
            $logedin=true;
            session(['key' => $logedin]);
            return redirect()->route('products.index');
        } elseif($yes==false) {
            // Authentication failed, redirect back to the login form with an error message.
            $logedin=false;
            session(['key' => $logedin]);
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }



        /*
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication successful, redirect to the index route.
            return redirect()->route('index');
        } else {
            // Authentication failed, redirect back to the login form with an error message.
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }*/
    }

    public function logout(){
        $logedin = false;

        session(['key' => $logedin]);
            return redirect()->route('login')->with('error', 'Loged out');
    }
}
