<!DOCTYPE html>
<html>
<head>
	<title>TodoList</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/jumbotron.css" rel="stylesheet">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>

	<footer id="footer" class="text-center">
		<p>Copyright &copy; 2020 Plumeria Yellow</p>
	</footer>
</body>
</html>