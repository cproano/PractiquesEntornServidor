<?php
session_start();
$users = array("admin" => "admin", "sergi" => "coll");
$user = $_POST["user"];
$password = $_POST["password"];

if(isset($users[$user])){
	if($users[$user] == $password){
		$_SESSION["user"] = $user;	
		header("location:menu.php");
	
	}else{
	header("location:formulari_login.php");
	setcookie("errors", "Usuari o contrasenya invàlids.", time()  + (3600));
	}
}else{
 	setcookie("errors", "Usuari o contrasenya invàlids.", time() + (3600));
	header("location:formulari_login.php");
}
?>
