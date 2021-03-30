<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function signup(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $isUserExist = User::where('email', $email)->first();

        if($isUserExist){
            return redirect(route('auth-signup'));
        }
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        if($user){
            // https://laravel.com/docs/8.x/authentication#authenticate-a-user-instance
            Auth::login($user);
            return redirect('/');
        } else {
            return redirect(route('auth-signup'));
        }
    }
    public function signin(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $save_credentials = $request->input('save_credentials');

        $user = User::where('email', $email)->first();

        if($user){
            if (Hash::check($password, $user->password)) {
                Auth::login($user, $save_credentials);
                return redirect('/');        
            }
        } 
        return redirect(route('auth-signup'));
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function dashboard(Request $request){
        // https://laravel.com/docs/8.x/authentication#determining-if-the-current-user-is-authenticated
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return redirect('/auth-signin');
    }
}

