<?php


$con= mysqli_connect("localhost","root","");

mysqli_select_db( $con,"my_db");



$name= $_POST['entered_name'];
$id= $_POST['entered_id'];

$result = "UPDATE Persons set FirstName='$name' where id=$id"; 

mysqli_query($con,$result);

// Close the database connection mysql_close($con);

echo "The record has been updated. \n New table: ";






$result3 = mysqli_query($con, "SELECT * FROM Persons WHERE FirstName='$name' ");

echo "<table border='3'>
<tr>

<th>Firstname</th>
<th>Lastname</th>
<th>Age </th>

</tr>";
while($row = mysqli_fetch_array($result3))
{

echo "<tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "</tr>";

}


echo "</table>";


?>