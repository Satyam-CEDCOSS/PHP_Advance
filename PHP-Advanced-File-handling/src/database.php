<?php
$conn = new mysqli("mysql-server", "root", "secret", "myDB");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
print_r($_POST["name"]);
$name = $_POST["name"];
$sql = "INSERT INTO `name` (`name`) VALUES ('$name'); ";
$result = mysqli_query($conn,$sql);


$logFileName = './my_log.log';
$date = (new DateTime('NOW'))->format("y:m:d h:i:s");
if ($handle = fopen($logFileName, 'a')) 
{
  fwrite($handle, $date);
}
 fclose($handle);
?>