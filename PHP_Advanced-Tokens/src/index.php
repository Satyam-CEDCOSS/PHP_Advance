<?php
session_start();
$conn = $conn = new mysqli("mysql-server", "root", "secret", "myDB");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$txt="";
$sql = "SELECT * FROM `name`";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){
    $data = mysqli_fetch_assoc($result);
    $txt.="(name: ".$data["name"].",age: ".$data["age"].")";
    print_r($txt);
}
$_SESSION["token"] = base64_encode($txt);

print_r("Token: ".$_SESSION["token"])
// print_r($_SESSION["TOKEN"]);
?>