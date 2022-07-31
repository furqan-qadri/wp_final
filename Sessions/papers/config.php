
<?php

$con = mysqli_connect("localhost","root","");

if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}
if (mysqli_query($con,"CREATE DATABASE myDB")) {
echo "Database created"; }
else {
echo "Error creating database: " . mysqli_error($con); }
// mysql_close($con); 


?>
