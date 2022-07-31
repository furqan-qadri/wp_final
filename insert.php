
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//connection and selecting db
$con= mysqli_connect("localhost","root","");

mysqli_select_db( $con,"my_db");

// $firstname= $_POST['firstname'];
// echo $firstname;

$sql = "INSERT INTO Persons (FirstName,LastName,Age) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[age]')";

//if inserted successfully then give a message to the user

if (!mysqli_query($con, $sql)){
    die ('Error: ' . mysqli_error($con));
}

echo "1 record added successfully";

?>
<br>
<br>

<a href="./form1.html">Fill another entry</a>
</body>
</html>
