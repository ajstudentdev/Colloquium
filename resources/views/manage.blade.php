<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Colloquium</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    

<script src="{{asset('incl/jquery.js')}}"></script>
<link rel="stylesheet" href="{{asset('incl/style.css')}}">

	<div class="hamburger-menu">
		<div class="hamburger"></div>
	</div>
	<navbar class="sliding-navbar">
		<ul class="navbar--items">
			<li class="navbar--item">
				<a href="{{ url('') }}">HOME</a>
			</li>
			<li class="navbar--item">
				<a href="{{ url('login') }}">INLOGGEN</a>
			</li>
            <li class="navbar--item">
				<a href="{{ url('manage') }}">MIJN LEZINGEN</a>
			</li>
		</ul>
	</navbar>
    	<div class="mask"></div>


<script>

    /* ---- wissel de schermen ---- */

   $(window).load(function(){
        $('.open-add-screen, .open-overview-screen').on('click',
            function()
            {
                $('.manage-page-add-container, .manage-page-overview-container').slideToggle()
            }
        );
    });

</script>



<div class="manage-page-overview-container">

    <h1 style="text-align:center;">Lezingen beheren</h1>

        <div style= "width: 80%;" class="manage-page-overview">

            <center>
            <a href ="/"><button>Homepagina</button></a>
            <button class="open-add-screen" id="btnAddSession">Voeg een lezing toe</button>
            </center>

            <h2 style="text-align:left">Actieve lezingen</h2>


            @if($data->where('Is_Gearchiveerd','0')->count() > 0)


            <!-- Eerste tabel-->
					<table class="upcoming-table">
						<thead>
							<tr>
								<th class="hidemobile">Type</th>
								<th>Naam spreker</th>
								<th>Titel</th>
								<th class="hidemobile">Datum</th>
								<th>Starttijd</th>
								<th class="hidemobile">Duur</th>
								<th>Locatie</th>
                                <th>Acties</th>
							</tr>
						</thead>

						<tbody id="basic-modal" class="sessions">
                        <?php $rownumber=0; ?>

                          @foreach($data as $item)
                          @if(!$item->Is_Gearchiveerd)
                          
                           <tr class="clickable-row basic1" id="row{{++$rownumber}}" data-href='#'>
								<td class="hidemobile">{{ $item->Colloquium }}</td>
								<td>{{ $item->Naam }}</td>
								<td>{{ $item->Titel }}</td>
                                  
								<td class="hidemobile">{{date('d-m-Y', strtotime($item->Datum))}}</td>
								<td>
                                {{date('H:i', strtotime($item->Start_tijd))}}</td>
								<td class="hidemobile">{{ $item->Duur }}</td>
								<td>{{ $item->Locatie }}</td>
                                <td>
                                     <a href="{{ route('wijzigsessie', $item->Lezing_ID) }}"><button class="button edit" title="Bewerken/Bekijken"></button></a>
      <!--                                <a href="{{ route('bekijksessie', $item->Lezing_ID) }}"><button class="button publiceer" title="Publiceren"></button></a> -->
                                    <a href="{{ route('archiveersessie', $item->Lezing_ID) }}"><button class="button archive" title="Archiveren"></button></a>
                                </td>
							</tr>


                            @endif
                        @endforeach

						</tbody>
					</table>


                    
                    @else

                    <p style="text-align:left">U heeft geen actieve lezingen.</p>

                    @endif


                    <br><br>

                     <h2 style="text-align:left">Gearchiveerde lezingen</h2>


                     @if($data->where('Is_Gearchiveerd')->count() > 0)


                     <!-- Tweede tabel -->
                    	<table class="upcoming-table">
						<thead>
							<tr>
								<th class="hidemobile">Type</th>
								<th>Naam spreker</th>
								<th>Titel</th>
								<th class="hidemobile">Datum</th>
								<th>Starttijd</th>
								<th class="hidemobile">Duur</th>
								<th>Locatie</th>
                                <th>Acties</th>
							</tr>
						</thead>

						<tbody id="basic-modal" class="sessions">
                        <?php $rownumber=0; ?>


                         

                            @foreach($data as $item)


                          @if($item->Is_Gearchiveerd)
                          
                           <tr class="clickable-row basic1" id="row{{++$rownumber}}" data-href='#'>
								<td class="hidemobile">{{ $item->Colloquium }}</td>
								<td>{{ $item->Naam }}</td>
								<td>{{ $item->Titel }}</td>
                                  
								<td class="hidemobile">{{date('d-m-Y', strtotime($item->Datum))}}</td>
								<td>
                                {{date('H:i', strtotime($item->Start_tijd))}}</td>
								<td class="hidemobile">{{ $item->Duur }}</td>
								<td>{{ $item->Locatie }}</td>
                                <td>
                                <a href="{{ route('wijzigsessie', $item->Lezing_ID) }}"><button class="button edit" title="Bewerken/Bekijken"></button></a>
                                <a href="{{ route('dearchiveersessie', $item->Lezing_ID) }}"><button class="button publiceer" title="Publiceren"></button></a>
                                </td>
							</tr>
                          @endif

                       @endforeach


                       

						</tbody>
					</table>


                    @else

                    <p style="text-align:left">U heeft geen gearchiveerde lezingen. Druk op het rode pijltje om lezingen te archiveren.</p>

                    @endif
                    

        </div>

</div>





	<div class="manage-page-add-container" style="display:none">
            <h2>Lezing toevoegen</h2>
		<div class="manageform-add">


        <center>
        <button class="open-overview-screen" style="max-width:400px;">< Terug naar overzicht</button>
        </center>


<form style="margin-top:50px" class="manage-form-add" action="{{ route('savesessie') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="angry-grid">

  <div id="item-0">


                <h3>Type</h3>
                <select id="cars" name="type">
                </select>

                 <h3>Titel</h3>
                <input id='titlebox' type="textbox" name="titel" placeholder="titel"/>
                <p class="aantal">Je hebt nu <span id="characters-title">0</span> karakters getypt (max 40)</p>

                <h3>Omschrijving</h3>
            	<textarea id='descriptionbox' type="omschrijving" name="omschrijving" placeholder="omschrijving"/></textarea>
                <p class="aantal">Je hebt nu <span id="characters-description">0</span> karakters getypt (max 400)</p>


                <h3>Naam spreker</h3>
                <input id='sprekerbox' type="textbox" name="sprekernaam" placeholder="spreker naam"/>
                 <p class="aantal">Je hebt nu <span id="characters-spreker">0</span> karakters getypt (max 40)</p>

                <h3>Foto spreker</h3>
                <input type="file" accept="image/*" onchange="loadFile(event)" name="fotospreker">

  </div>
  <div id="item-1">

                 <h3>Locatie en/of ruimte</h3>
                <input id='locatiebox' type="locatie" name="locatie" placeholder="locatie"/>
                <p class="aantal">Je hebt nu <span id="characters-locatie">0</span> karakters getypt (max 40)</p>


                <h3>Datum</h3>
				<input type="date" name="datum" placeholder="datum" value="<?php echo date('Y-m-d'); ?>"/>

                <h3>Starttijd</h3>
                <input type="time" name="starttijd" placeholder="starttijd"/>

                <h3>Tijdsduur (min.)</h3>
                <input type="number" max="1200" name="duur" placeholder="duur"/>

                <h3>Bedrijfslogo</h3>
                <input type="file" accept="image/*" onchange="loadFile(event)" name="bedrijfslogo">

                <h3>Bedrijfsnaam</h3>
                <input id='bedrijfsnaambox' type="textbox" name="bedrijfsnaam" placeholder="bedrijfsnaam"/>
                 <p class="aantal">Je hebt nu <span id="characters-bedrijfsnaam">0</span> karakters getypt (max 40)</p>


  </div>

</div>

<center>
  <button id="btnSave" style="max-width:400px; margin-top: 50px;">opslaan</button>
</center>

  </form>




















		</div>

	</div>

  	<script src="{{asset('incl/scripts.js')}}"></script>

      <script>
     function addOption(name) {
        optText = name;
        optValue = name;
        $('#cars').append(new Option(optText, optValue));
      }

$("#btnAddSession").click(function(){
    $('#cars').empty();

    console.log("The btn was clicked.");
  $.get("http://localhost:8000/type", function(data, status){
      //console.log(data);
       for(var i =0;i < data.length;i++)
{
  var item = data[i];
  //console.log(item.colloquium);
  addOption(item.type);
}
  });
});

//btnSave
      
      </script>
      <style>
      li.navbar--item
      {width: 130px!important;}

      </style>
    </body>
</html>
