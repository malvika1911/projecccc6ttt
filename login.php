<?php
$email=(string)$_GET["e"];
$pass=$_GET["pas"];
$server="localhost";
$user="root";
$pass="";
$db="form";
$conn= mysqli_connect($server,$user,$pass,$db);
if(!$conn)
{
    die("Could not connect".mysqli_error());
}
else
 echo"Connection created successfully<br>";
$sql1 = "INSERT INTO login (e,pas)
VALUES ('$email', '$pass')";
if(mysqli_query($conn,$sql1))
echo"Record inserted successfully<br>";
else
echo("could not insert record".mysqli_error($conn));
mysqli_close($conn);
?>