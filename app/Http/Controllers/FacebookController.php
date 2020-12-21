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
        return Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender', 'birthday'
        ])->scopes([
            'email', 'user_birthday'
        ])->stateless()->redirect();
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
        $findemail = User::where('email', $user->email)->first();

        // dd($finduser, $user);

        if ($user->email == null) {
            $userEmail = $user->name;
        } else {
            $userEmail = $user->email;
        }

        if ($findemail->facebook_id == null) {
            User::where('email', $user->email)
                ->update(['facebook_id' => $user->id]);
        }

        if ($finduser || $findemail) {
            Session::put('nama', $user->name);
            Session::put('email', $userEmail);
            Session::put('login', TRUE);
            return redirect('/')->with('success');
        } else {
            User::create([
                'nama' => $user->name,
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
