<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use DB;


 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show() //$id
    {
        $user = DB::table('items')->insert([
    'naam' => 'Juan Dela Cruz Alexius'
]);

    return View('profile');
    }
}
