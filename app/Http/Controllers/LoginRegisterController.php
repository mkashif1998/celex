<?php

namespace App\Http\Controllers;

use App\Models\LoginRegister;
use Illuminate\Http\Request;
use Hash;
class LoginRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loginregister/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_name'=> 'required',
            'user_email'=> 'required|email|unique:login_registers',
            'user_password'=> 'required|min:6',
            'confirm_password'=> 'required|same:user_password'
        ]);

        $register_user = new LoginRegister;
        $register_user->user_name = $request['user_name'];
        $register_user->user_email = $request['user_email'];
        $register_user->user_password = Hash::make($request['user_password']);

        $user = $register_user->save();
        if($user)
        {
            return back()->with('Successreg','You have successfully registered');
        }
        else
        {
            return back()->with('Failreg','You have fail to registered');
        }

        // echo '<pre>';
        // print_r($request->all());
    }
    public function login(Request $request)
    {
        $request->validate([
            'login_email'=> 'required',
            'login_password'=> 'required|min:6'
        ]);

        $user_login = LoginRegister::where('user_email','=',$request->login_email)->first();

        if($user_login)
        {
            if(Hash::check($request->login_password, $user_login->user_password))
            {
                $request->session()->put('login_id',$user_login->id);
                return redirect('/');
            }
            else
            {
                return back()->with('Failpass','Password is not correct');
            }
        }
        else
        {
            return back()->with('Faillogin','Email is not exist');
        }

        echo '<pre>';
        print_r($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoginRegister  $loginRegister
     * @return \Illuminate\Http\Response
     */
    public function show(LoginRegister $loginRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoginRegister  $loginRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(LoginRegister $loginRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoginRegister  $loginRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoginRegister $loginRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoginRegister  $loginRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoginRegister $loginRegister)
    {
        //
    }
}
