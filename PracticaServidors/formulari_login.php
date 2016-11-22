<?php 
    session_start();
?>
<!DOCTYPE html">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			Formulari
		</title>
	</head>
	<body>
	<h1>Login</h1>
	<?php 
	if(isset($_COOKIE["errors"])){
		print_r($_COOKIE["errors"]);
	}
	?>
		<div style="margin: 30px 10%;">
			<form action="processa_login.php" method="post" id="myform" name="myform">
				<input type="text" name="user" placeholder="Nom d'usuari"/>
				<input type="text" name="password" placeholder="Contrasenya"/>
				<input type="submit" value="Entrar"/>
			</form>
		</div>
	</body>
</html>

