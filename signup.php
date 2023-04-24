<?php
$name=$_GET["nm"];
$email=(string)$_GET["email"];
$pass=$_GET["pass"];
$repass=$_GET["repass"];
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
$sql1 = "INSERT INTO signup (nm,email,pass,repass)
VALUES ('$name', '$email', '$pass' , '$repass')";
if(mysqli_query($conn,$sql1))
echo"Record inserted successfully<br>";
else
echo("could not insert record".mysqli_error($conn));
mysqli_close($conn);
?>