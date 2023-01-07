<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <script src="{{asset('incl/jquery.js')}}"></script>
        <title>Colloquium</title>
    </head>
    <body class="antialiased home">
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
	<div class="container">
	<h1>Losse lezing</h1>
    
    <div style="margin-top:300px">

    {{$lezing}}

    </div>

    <script src="{{asset('incl/scripts.js')}}"></script>


    <style>
      li.navbar--item
      {width: 130px!important;}

      </style>
    </body>
</html>
