<!DOCTYPE html>
<html lang="en" style="width: 100%; height: 100%">
<head>
	<meta charset="UTF-8">
	<title>{{$contacts->shopname}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="{{$contacts->keywords}}">
	<meta name="description" content="{{$contacts->description}}">
	@yield('meta')
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Oswald" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="{{asset('images/logo-small.png')}}">
	<link rel="stylesheet" href="{{asset('css/all.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	
	@yield('css')

</head>
<body>
	<div class="wraper">
		<header>
			@yield('header')
		</header>
		
		<main>
			@yield('main')
		</main>
		
		<footer>
			@yield('footer')
		</footer>
	</div>


	@yield('jss')
</body>
</html>