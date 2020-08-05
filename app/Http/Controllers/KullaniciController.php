<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullaniciController extends Controller
{
    public function index()
    {
        return view('giris');
    }
    public function giris_yap()
    {
        if(auth()->attempt(['email'=>request('email'),'password'=>request('password')]))
        {
            request()->session()->regenerate();
            return redirect()->route('diaindex');
        }
        else{
            $errors = ['email' => 'Hatalı Giriş'];
            return back()->withErrors($errors);

        }

    }
    public function oturumukapat()
    {
        auth()->logout();;
        request() -> session() -> flush();
        request() -> session() -> regenerate();
        return redirect() -> route('giris');


    }

}
