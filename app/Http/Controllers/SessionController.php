<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController; 
use Illuminate\Http\Request;
use DB;

class SessionController extends BaseController
{
    ///Functie die archiveert
    public function archiveer(Request $request)
    {
        $id = $request->id;

        if($id != "")
        {
            //Archiveer!
            $affected = DB::table('lezing')
              ->where('Lezing_ID', $id)
              ->update(['Is_Gearchiveerd' => 1]);

            return redirect()->to('/manage'); 
        }
    }

    ///Functie die archiveert
    public function dearchiveer(Request $request)
    {
        $id = $request->id;

        if($id != "")
        {
            //Dearchiveer!
            $affected = DB::table('lezing')
              ->where('Lezing_ID', $id)
              ->update(['Is_Gearchiveerd' => 0]);

            return redirect()->to('/manage'); 
        }
    }

    //Functie die viewt
    public function viewsession(Request $request)
    {
        $id = $request->id;

        if($id != "")
        {
            //bekijk!
            $affected = DB::table('lezing')
              ->where('Lezing_ID', $id)->get();
              //->update(['Is_Gearchiveerd' => 0]);
              dd($affected);
            //return redirect()->to('/view'); 
        }
    }

     //Functie die edit
    public function editsession(Request $request)
    {
        $id = $request->id;

        if($id != "")
        {
            //edit!
            $affected = DB::table('lezing')
              ->where('Lezing_ID', $id)->get();
              //->update(['Is_Gearchiveerd' => 0]);
              dd($affected);
            //return redirect()->to('/view'); 
        }
    }


}
