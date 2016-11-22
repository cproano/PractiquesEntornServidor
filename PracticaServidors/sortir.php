<?php
session_start();
$_SESSION = null;
session_destroy();
setcookie("errors", null);
header("location:formulari_login.php");
?>
