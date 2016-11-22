<?php
session_start();
if(isset($_SESSION["user"])){
}else{
  print_r("Soc dins de lerror");
  setcookie("errors", "T'has d'autentificar per poder entrar!!!");
  header("location:formulari_login.php");
}
?>


