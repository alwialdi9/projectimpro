<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Exception;
use App\User;
use Illuminate\Support\Facades\Session;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $finduser = User::where('google_id', $user->id)->first();

        // if ($findemail->facebook_id == null) {
        //     User::where('email', $user->email)
        //         ->update(['facebook_id' => $user->id]);
        // }

        if ($finduser) {
            Session::put('nama', $finduser->nama);
            Session::put('email', $finduser->email);
            Session::put('nomor_hp', $finduser->hp);
            Session::put('login', TRUE);
            return redirect('/')->with('success');
        } else {
            User::create([
                'nama' => $user->name,
                'email' => $user->email,
                'nomor_hp' => '0',
                'google_id' => $user->id,
                'password' => encrypt('Superman_test')
            ]);

            session()->flash('addSuccess', 'Your email has been successfully added');

            Session::put('nama', $user->name);
            Session::put('email', $user->email);
            Session::put('login', TRUE);
            return redirect('/')->with('success');
        }
    }
}
