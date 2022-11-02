<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
      
<script src="{{asset('incl/jquery.js')}}"></script>

<style>

	

</style>

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
		</ul>
	</navbar>
	<div class="mask"></div>
	<div class="container">
		<div class="Title">
			<h1>Nieuwe iPhone in de markt gebracht!</h1>
		</div>
		<div class="Description">
			<div class="omschrijving-lezing">
				<p style="padding:2%;">De laatste keer dat het iPhone-ontwerp drastisch veranderde, was bij de iPhone X in 2017. </p>
			</div>
		</div>
		<div class="Avatar">
			<div class="avatar-img"></div>
			<div class="spreker-naam"> Steve Jobs </div>
		</div>
		<div class="Metadata">



        <style>


.point {
  stroke: white;
  stroke-width: 0.5;
}


</style>












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
              </tr>
              <tr>
                <td>Presentatie</td>
                <td>New York</td>
                <td>01/11/2020</td>
                <td>15:00 uur</td>
              </tr>
            </thead>
            </table>



		</div>
		<div class="Logo-company">
			<div class="logo-company-container">
				<img class="logo-company-img" src="./content/apple.png">
				</div>
				<div class="naam-company">Apple</div>
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
						<tbody id="basic-modal">
							<tr class="clickable-row basic1" data-href='#'>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
								<td>inhoud</td>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
							</tr>
							<tr class="clickable-row basic2" data-href='#'>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
								<td>inhoud</td>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
							</tr>
							<tr class="clickable-row basic3" data-href='#'>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
								<td>inhoud</td>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
							</tr>
							<tr class="clickable-row basic4" data-href='#'>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
								<td>inhoud</td>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
							</tr>
							<tr class="clickable-row basic5" data-href='#'>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
								<td>inhoud</td>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
								<td class="hidemobile">inhoud</td>
								<td>inhoud</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="upcoming-container-right">
					<img class="qrcode" src="./content/qrcode_example.gif">
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
