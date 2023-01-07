<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController; 
use Illuminate\Http\Request;
use Carbon\Carbon;


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

    public function save(Request $request)
    {
        $gelukt = false;

        //Controleren of alle velden aanwezig zijn



        $type = strval($request->get('type'));
        $titel = strval($request->get('titel'));
        $omschrijving = strval($request->get('omschrijving'));
        $sprekernaam = strval($request->get('sprekernaam'));
        $locatie = strval($request->get('locatie'));
        $datum = $request->get('datum');
        $starttijd = $request->get('starttijd');
        $duur = intval($request->get('duur'));



        //Als de sprekernaam bestaat dan niet opslaan!! bestaande gebruiken

        //Sla sprekernaam op

        DB::table('spreker')->insert(
        ['Naam' => $sprekernaam, 'Foto_Spreker' => '']);

        //Get Spreker_ID
        $id = DB::table('spreker')->where(['Naam' => $sprekernaam])->get()->value('Spreker_ID');

        //Sla de lezing op
        DB::table('lezing')->insert(
        ['Spreker_ID' => $id, 'Datum' => $datum, 'Duur' => $duur, 'Locatie' => $locatie,
        'Omschrijving' => $omschrijving, 'Start_tijd' => $starttijd, 'Titel' => $titel,
        'Colloquium' => $type, 'Is_Gearchiveerd' => 0]
        );

        //Sla de lezing op
        

        $gelukt = true;

        //return $gelukt;
    }

    public function read($lezingid)
    {
        $lezing = DB::table('lezing')
              ->where('Lezing_ID', $lezingid)->get();

        return view('read', compact('lezing'));
    }
}
