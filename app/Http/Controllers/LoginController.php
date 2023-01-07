<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use DB;

class LoginController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    Returns homepage
    GET
    */
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        //username and pass
        $count = DB::table('user')->where(['Username' => $username, 'Wachtwoord' => $password])->get()->count();

        return $count;
    }
}
