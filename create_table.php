<?php

$con= mysqli_connect("localhost","root","");

mysqli_select_db( $con,"my_db");


$sql = "CREATE TABLE Persons(
    -- personID NOT NULL AUTO_INCREMENT,
    -- PRIMARY KEY (personID),
    FirstName varchar(15),
    LastName varchar(15),
    Age int

)";



mysqli_query($con, $sql);




?>