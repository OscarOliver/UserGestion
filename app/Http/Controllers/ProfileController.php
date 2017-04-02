<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 02/04/17
 * Time: 12:52
 */

namespace App\Http\Controllers;


use App\User;

class ProfileController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('profile');
    }
}