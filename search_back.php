<?php


$con= mysqli_connect("localhost","root","");

mysqli_select_db( $con,"my_db");


$name= $_POST['entered_name'];
echo "The search results for ". $name . " are: ";

//putting variabe name in '' is very important

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

