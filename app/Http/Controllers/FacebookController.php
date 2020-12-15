<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Exception;
use App\User;
use Illuminate\Support\Facades\Session;

class FacebookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        $finduser = User::where('facebook_id', $user->getId())->first();

        if ($user->getEmail() == null) {
            $userEmail = $user->getName();
        }
        // dd($user);
        if ($finduser) {
            Session::put('nama', $finduser->nama);
            Session::put('email', $finduser->email);
            Session::put('login', TRUE);
            return redirect('/')->with('success');
        } else {
            User::create([
                'nama' => $user->getName(),
                'email' => $userEmail,
                'nomor_hp' => '0',
                'facebook_id' => $user->getId(),
                'password' => encrypt('Superman_test')
            ]);

            session()->flash('addSuccess', 'Your email has been successfully added');

            Session::put('nama', $user->getName());
            Session::put('email', $user->getEmail());
            Session::put('login', TRUE);
            return redirect('/')->with('success');
        }
    }
}
