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
            
            $data = DB::table('spreker')
            ->join('lezing','spreker.Spreker_ID','=','lezing.Spreker_ID')
            ->where(['Lezing_ID' => $id])
            ->first();

            //Return the view
            return view('edit',compact('data'));
      }
    }

    public function save(Request $request)
    {
        $prepath = "./content/";

        //Controleren of alle velden aanwezig zijn
        $type = strval($request->get('type'));
        $titel = strval($request->get('titel'));
        $omschrijving = strval($request->get('omschrijving'));
        $sprekernaam = strval($request->get('sprekernaam'));
        $locatie = strval($request->get('locatie'));
        $datum = $request->get('datum');
        $starttijd = $request->get('starttijd');
        $duur = intval($request->get('duur'));
        $bedrijfsnaam = strval($request->get('bedrijfsnaam'));

        //Controle fotospreker
         if ($request->hasFile('fotospreker')) {
        $image = $request->file('fotospreker');
        $teaser_image1 = time().'-'.$image->getClientOriginalName();
        $destinationPath = public_path('/content');
        $image->move($destinationPath, $teaser_image1);
        } 

        //Controle bedrijfslogo
        if ($request->hasFile('bedrijfslogo')) {
        $image = $request->file('bedrijfslogo');
        $teaser_image2 = time().'-'.$image->getClientOriginalName();
        $destinationPath = public_path('/content');
        $image->move($destinationPath, $teaser_image2);
        } 

        $teaser_image1 = $prepath . $teaser_image1;
        $teaser_image2 = $prepath . $teaser_image2;

        //Als de sprekernaam bestaat dan niet opslaan!! bestaande gebruiken

        //Sla sprekernaam op
        
        DB::table('spreker')->insert(
        ['Naam' => $sprekernaam, 'Bedrijfsnaam' => $bedrijfsnaam, 'Foto_Spreker' => $teaser_image1,  'Logo_Bedrijf' =>  $teaser_image2]);

        //Get Spreker_ID
        $id = DB::table('spreker')->where(['Naam' => $sprekernaam, 'Bedrijfsnaam' => $bedrijfsnaam])->get()->value('Spreker_ID');

        //Sla de lezing op
        DB::table('lezing')->insert(
        ['Spreker_ID' => $id, 'Datum' => $datum, 'Duur' => $duur, 'Locatie' => $locatie,
        'Omschrijving' => $omschrijving, 'Start_tijd' => $starttijd, 'Titel' => $titel,
        'Colloquium' => $type, 'Is_Gearchiveerd' => 0]
        );

        return redirect('/manage');
    }

     public function update(Request $request)
    {
        $prepath = "./content/";

        dd($request);
        //Controleren of alle velden aanwezig zijn
        /*
        $type = strval($request->get('type'));
        $titel = strval($request->get('titel'));
        $omschrijving = strval($request->get('omschrijving'));
        $sprekernaam = strval($request->get('sprekernaam'));
        $locatie = strval($request->get('locatie'));
        $datum = $request->get('datum');
        $starttijd = $request->get('starttijd');
        $duur = intval($request->get('duur'));
        $bedrijfsnaam = strval($request->get('bedrijfsnaam'));

        //Controle fotospreker
         $teaser_image1 = "";
         if ($request->hasFile('fotospreker')) {
        $image = $request->file('fotospreker');
        $teaser_image1 = time().'-'.$image->getClientOriginalName();
        $destinationPath = public_path('/content');
        $image->move($destinationPath, $teaser_image1);

        $teaser_image1 = $prepath . $teaser_image1;
        } 

        $teaser_image2 = "";
        //Controle bedrijfslogo
        if ($request->hasFile('bedrijfslogo')) {
        $image = $request->file('bedrijfslogo');
        $teaser_image2 = time().'-'.$image->getClientOriginalName();
        $destinationPath = public_path('/content');
        $image->move($destinationPath, $teaser_image2);

        $teaser_image2 = $prepath . $teaser_image2;
        } */

        //Als de sprekernaam bestaat dan niet opslaan!! bestaande gebruiken

        //Sla sprekernaam op

         //Get Spreker_ID
       // $id = DB::table('spreker')->where(['Naam' => $sprekernaam, 'Bedrijfsnaam' => $bedrijfsnaam])->get()->value('Spreker_ID');

        //print($id);

        /*
        if($teaser_image1 == "" && $teaser_image2 == "") //beide leeg
        {
            DB::table('spreker')->where('Spreker_ID', intval($id))->update(
        ['Naam' => $sprekernaam, 'Bedrijfsnaam' => $bedrijfsnaam]);
        }
        else if($teaser_image1 != "" && $teaser_image2 == "") //foto spreker gevuld
        {
             DB::table('spreker')->where('Spreker_ID', intval($id))->update(
        ['Naam' => $sprekernaam, 'Bedrijfsnaam' => $bedrijfsnaam, 'Foto_Spreker' => $teaser_image1]);
        }
        else if($teaser_image1 == "" && $teaser_image2 != "") //bedrijfsfoto gevuld
        {
             DB::table('spreker')->where('Spreker_ID', intval($id))->update(
        ['Naam' => $sprekernaam, 'Bedrijfsnaam' => $bedrijfsnaam, 'Logo_Bedrijf' =>  $teaser_image2]);
        }
        else //anders
        {
             DB::table('spreker')->where('Spreker_ID', intval($id))->update(
        ['Naam' => $sprekernaam, 'Bedrijfsnaam' => $bedrijfsnaam, 'Foto_Spreker' => $teaser_image1,  'Logo_Bedrijf' =>  $teaser_image2]);
        }
        
       

        //update de lezing 
        DB::table('lezing')->where('Spreker_ID', intval($id))->update(
        ['Datum' => $datum, 'Duur' => $duur, 'Locatie' => $locatie,
        'Omschrijving' => $omschrijving, 'Start_tijd' => $starttijd, 'Titel' => $titel,
        'Colloquium' => $type]);
        
        return redirect('/manage');
        */
    }


    public function read($lezingid)
    {
        $lezing = DB::table('lezing')
              ->where('Lezing_ID', $lezingid)->get();

        return view('read', compact('lezing'));
    }
}
