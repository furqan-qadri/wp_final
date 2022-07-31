<?php

$con= mysqli_connect("localhost","root","");

mysqli_select_db( $con,"myDB");


$name=$_POST['st_name'];
$email=$_POST['st_email'];
$matric=$_POST['st_matric'];

$sql = "INSERT INTO staff (staff_name,staff_email,staff_matric) VALUES ('$name', '$email', ' $matric')";

//if inserted successfully then give a message to the user

if (!mysqli_query($con, $sql)){
    die ('Error: ' . mysqli_error($con));
}

echo "The data has been inserted into the database"





?>