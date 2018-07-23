<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style-table.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<title>Test-case</title>
</head>

<body>
<header>
	<div class="center-block-main">
		<h2 class="logo">B2Btest-case</h2>
		<nav>
			<ul class="menu">
				<li><a href="{{ route('home') }}">Home</a></li>
				<li><a href="{{ route('domain') }}">Domain</a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="center-block-main content">
	<main>
		@yield('content')
	</main>
</div>
<footer>
	<div class="center-block-main">
		<p>Copyright &copy; 2018 b2btest.dev - All right reserved - Find more Templates</p>
	</div>
</footer>

<!--spinner-->
<div id="spinner">
	<div class="loader"></div>
</div>

<!-- alert modal -->
<div id="myModal" class="modal-alert">
	<!-- Modal content -->
	<div class="alert-content">
		<div class="alert-header">
			<span class="alert-close" onclick="closeAlert()">&times;</span>
			<h3>Внимание ошибка!</h3>
		</div>
		<div class="alert-body">
			<p>Непредвиденная ошибка</p>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="{{ asset('js/jquery.tablesorter.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
