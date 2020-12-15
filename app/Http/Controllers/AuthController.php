<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Sign In';
        return view('auth.signin', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->forget('addSuccess');
        $title = 'Sign Up';
        return view('auth.signup', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('afterlogin', true);
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|min:4|email:rfc,dns|unique:tb_users',
            'password' => 'required|min:4',
            'nomor_hp' => 'required|numeric|min:10',
        ], [
            'email.required' => 'We need to know your e-mail address!',
            'email.email' => 'Format Email is Wrong',
            'nama.required' => 'We need to know your name',
            'email.min' => 'oops, your email is wrong',
            'email.unique' => 'oops, your email already registered',
            'password.required' => 'enter a password for your security',
            'password.min' => 'your password is weak',
            'nomor_hp.required' => 'We need to know your phone number',
            'nomor_hp.numeric' => 'oops, something is wrong',
            'nomor_hp.max' => 'oops, you send too many numbers',
            'nomor_hp.min' => 'oops, something is wrong'
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor_hp' => '0' . $request->nomor_hp,
            'password' => Hash::make($request->password),
            'google_id' => '0',
        ]);

        // $request->session()->flash('addSuccess', 'Your account has been successfully registered');

        session()->flash('addSuccess', 'Your account has been successfully registered');

        // Session::flash('addSuccess', 'Your account has been successfully registered');
        return redirect('login')->with('alertSuccess', 'Success');
    }

    public function signin(Request $request)
    {
        //login akun
        $this->validate($request, [
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:4'
        ]);
        $request->flashOnly(['email']);

        $email = $request->old('email');
        $password = $request->password;


        $data = User::where('email', $email)->first();
        if ($data) { //apakah email tersebut ada atau tidak
            if (Hash::check($password, $data->password)) {
                Session::put('nama', $data->nama);
                Session::put('email', $data->email);
                Session::put('nomor_hp', $data->hp);
                Session::put('login', TRUE);
                return redirect('/')->with('success');
            } else {
                Session::flash('notif', 'Wrong Password');
                return redirect('login')->with('error');
            }
        } else {
            Session::flash('notif', 'Email not registered');
            return redirect('login')->with('error');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Session::flush();
        return redirect('/');
    }
}
