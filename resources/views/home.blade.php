<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{asset('incl/jquery.js')}}"></script>
        <title>Laravel</title>
    </head>
    <body class="antialiased">
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
				<a href="{{ url('manage') }}">MIJN SESSIES</a>
			</li>
		</ul>
	</navbar>
	<div class="mask"></div>
	<div class="container">
		<div class="Title">
			<h1></h1> 
		</div>
		<div class="Description">
			<div class="omschrijving-lezing">

                  <div style='' class='omschrijvingcontainer'>
                    @foreach($data as $item)
                        <h1 class='omschrijving'>{{ $item->Omschrijving }}</h1>
                    @endforeach
                  </div>

			</div>
		</div>
		<div class="Avatar">
			<div class="avatar-img"></div>
			<div class="spreker-naam"> </div>
		</div>
		<div class="Metadata">
            <table class="metadata-table">
            <thead>
              <tr>
                <td class="column-name">TYPE</td>
                <td rowspan="2">
                    <svg width="30px" height="30px" viewBox="0 0 10 10">
                        <line class="point" x1="0" x2="10" y1="5" y2="5" />
                        <line class="point" x1="5" x2="5" y1="0" y2="10" />
                     </svg>
                </td>
                <td class="column-name">LOCATIE</td>
                <td rowspan="2">
                    <svg width="30px" height="30px" viewBox="0 0 10 10">
                        <line class="point" x1="0" x2="10" y1="5" y2="5" />
                        <line class="point" x1="5" x2="5" y1="0" y2="10" />
                     </svg>
                </td>
                <td class="column-name">DATUM</td>
                <td rowspan="2">
                    <svg width="30px" height="30px" viewBox="0 0 10 10">
                        <line class="point" x1="0" x2="10" y1="5" y2="5" />
                        <line class="point" x1="5" x2="5" y1="0" y2="10" />
                     </svg>
                </td>
                <td class="column-name">TIJDSTIP</td>
                <tr>
                    <td>
                    <div class="typecontainer">
                            @foreach($data as $item)
                                <div class="type">
                                {{ $item->Colloquium }}
                                </div>
                            @endforeach
                         </div>
                    </td>
                    <td>
                        <div class="locatiecontainer">
                            @foreach($data as $item)
                                <div class="locatie">
                                {{ $item->Locatie }}
                                </div>
                            @endforeach
                         </div>
                     </td>
                    <td>
                        <div class="datumcontainer">
                            @foreach($data as $item)
                                <div class="datum">
                                {{date('d-m-Y', strtotime($item->Datum))}}

                              
                                </div>
                            @endforeach
                         </div>
                     </td>
                    <td>
                        <div class="tijdcontainer">
                            @foreach($data as $item)
                                <div class="tijd">
                                {{ $item->Start_tijd }}
                                </div>
                            @endforeach
                         </div>
                     </td>
                </tr>
              </tr>
            </thead>
            </table>
		</div>
		<div class="Logo-company">
			<div class="logo-company-container">
				<img class="logo-company-img" src="img/sony.jpg"> <!--  asset($data->Logo_bedrijf) -->
				</div>
				<div class="naam-company">
                 <div class="bedrijfsnaamcontainer">
                            @foreach($data as $item)
                                <div class="bedrijfsnaam">
                                {{ $item->Bedrijfsnaam }}
                                </div>
                            @endforeach
                         </div>
                </div>
			</div>
			<div class="Upcoming">
				<div class="upcoming-container-left">
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
							</tr>
						</thead>

						<tbody id="basic-modal" class="sessions">
                        <?php $rownumber=0; ?>

                          @foreach($data as $item)

                           <tr class="clickable-row basic1" id="row{{++$rownumber}}" data-href='#'>
								<td class="hidemobile">{{ $item->Colloquium }}</td>
								<td>{{ $item->Naam }}</td>
								<td>{{ $item->Titel }}</td>
                                  
								<td class="hidemobile">{{date('d-m-Y', strtotime($item->Datum))}}</td>
								<td>
                                {{date('H:i', strtotime($item->Start_tijd))}}</td>
								<td class="hidemobile">{{ $item->Duur }}</td>
								<td>{{ $item->Locatie }}</td>
							</tr>

                        @endforeach

						</tbody>
					</table>
				</div>
				<div class="upcoming-container-right">
					</div>
				</div>
			</div>
			<div id="basic-modal-content1">
				<h3>titel1</h3>
				<p>inhoud van de modalbox1</p>
			</div>
			<div id="basic-modal-content2">
				<h3>titel2</h3>
				<p>inhoud van de modalbox2</p>
			</div>
			<div id="basic-modal-content3">
				<h3>titel3</h3>
				<p>inhoud van de modalbox3</p>
			</div>
			<div id="basic-modal-content4">
				<h3>titel4</h3>
				<p>inhoud van de modalbox4</p>
			</div>
			<div id="basic-modal-content5">
				<h3>titel5</h3>
				<p>inhoud van de modalbox5</p>
			</div>
		</div>

        <script src="{{asset('incl/scripts.js')}}"></script>
        <script src="{{asset('incl/jquery.simplemodal.js')}}"></script>
    </body>
</html>
