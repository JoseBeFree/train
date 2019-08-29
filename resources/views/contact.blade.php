@extends('welcome')

@section('content')
<html>
	<head>
		<title>Contacto</title>
	</head>
	<body>
	
<div class="container">
<div class="row">
<div class="col-md-6">
		

		<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username">email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-default">Acceder</button>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>

@endsection