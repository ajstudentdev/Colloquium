<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use DB;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    Returns homepage
    GET
    */
    public function home()
    {
        //Get the data for the homepage
        //DB::table('lezing')->with('spreker')->get();

        $data = DB::table('spreker')
      //  ->select('users.id','users.name','profiles.photo')
        ->join('lezing','spreker.Spreker_ID','=','lezing.Spreker_ID')
       // ->where(['something' => 'something', 'otherThing' => 'otherThing'])
        ->get();

        //Return the view
        return view('home',compact('data'));
    }

    /*
    Returns loginpage
    GET
    */
    public function login()
    {
            //Return the view
        return view('login');
    }



    /*
    Returns managepage
    GET
    */
    public function manage()
    {
            //Return the view
        return view('manage');
    }
}
