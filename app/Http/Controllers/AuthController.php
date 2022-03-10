<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showFormRegister()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $data = $request->only('name','email','password');
        $data['password'] = Hash::make($data['password']);
        DB::table('users')->insert($data);
        return redirect()->route("showLogin");
    }

    public function showFormLogin()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->only("email","password");
        if (Auth::attempt($data)){
            return redirect()->route("note.index");
        }else{
        Session::flash("msg","tai khoan khong dung");
        return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
