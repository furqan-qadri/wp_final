<?php

$con= mysqli_connect("localhost","root","");

mysqli_select_db( $con,"my_db");

// mysqli_query($con,"INSERT INTO Persons(FirstName,LastName,Age) VALUES ('Peter','Griffin','35')");


mysqli_query($con,"INSERT INTO Persons(FirstName,LastName,Age) VALUES ('Glenn','Quagmire','33')");





?>