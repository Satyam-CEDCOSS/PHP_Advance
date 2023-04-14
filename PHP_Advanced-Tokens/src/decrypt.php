<?php
session_start();
$txt = base64_decode($_SESSION["token"]);
print_r($txt);
?>