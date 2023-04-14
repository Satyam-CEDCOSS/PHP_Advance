<?php
setcookie("mail",$_POST["email"]);
setcookie("password",$_POST["password"]);
header("Location: http://localhost:8080/login.php");
?>