<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use DB;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    Returns homepage
    GET
    */
    public function register(Request $request)
    {
        //username
        $username = $request->username;

        //password
         $password = $request->password;

        //email
         $email = $request->email;


         DB::table('user')->insert(
        ['Username' => $username, 'E-mailadres' => $email, 'Wachtwoord' => $password]);

        return true;

    }
}
