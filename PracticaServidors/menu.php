<?php
session_start();
include 'comprovar_sessio.php';
print_r("<h1>MENÚ</h1>");
print_r("Benvingut " . $_SESSION["user"] . "<br><br>");
print_r("Què vols fer?
	<br>
	1. <a href=\"comprovar_divisors.php\">Comprovar divisors</a>
	<br>
	2. <a href=\"conjetura_collatz.php\">Conjetura collatz</a>
	<br>
	3. <a href=\"sortir.php\">Sortir</a>
	");

?>


