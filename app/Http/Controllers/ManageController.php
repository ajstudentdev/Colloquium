<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController; 
use Illuminate\Http\Request;

class ManageController extends BaseController
{
    //
    public function index()
    {
        return "<h1>Admin beheer</h1>";
    }
}
