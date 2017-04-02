<?php
/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 02/04/17
 * Time: 16:59
 */

namespace App\Http\Controllers;


class EditProfileController
{
    /**
     * Edit the user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('profileEdit');
    }
}