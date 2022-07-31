<?php

$con= mysqli_connect("localhost","root","");

mysqli_select_db( $con,"my_db");

$result = mysqli_query($con, "SELECT * FROM Persons");


//showing without HTML table

// while ($row = mysqli_fetch_array($result)){
//     echo $row['FirstName']. "  ". $row['LastName'] . " " . $row['Age'];

//     echo "<br>";
// }b


//displaying with html table
echo "<table border='1'>
<tr>

<th>Firstname</th>
<th>Lastname</th>
<th>Age </th>

</tr>";
while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "</tr>";

}


echo "</table>";
// mysql_close($con);


echo "<br/>";
echo "<br/>";
echo "<br/>";














echo "People with Qadri as the their surname";
echo "<br/>"; echo "<br/>";

$result1 = mysqli_query($con, "SELECT * FROM Persons WHERE LastName ='Qadri' ");


echo "<table border='3'>
<tr>

<th>Firstname</th>
<th>Lastname</th>
<th>Age </th>

</tr>";
while($row = mysqli_fetch_array($result1))
{

echo "<tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "</tr>";

}


echo "</table>";










echo "<br/>"; echo "<br/>";
echo "Table sorted in asceding order of age";


$result2 = mysqli_query($con, "SELECT * FROM Persons ORDER BY Age");



echo "<table border='3'>
<tr>

<th>Firstname</th>
<th>Lastname</th>
<th>Age </th>

</tr>";
while($row = mysqli_fetch_array($result2))
{

echo "<tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['Age'] . "</td>";
echo "</tr>";

}


echo "</table>";


echo "<br/>"; echo "<br/>";
echo "Table sorted in descending order of age";


$result3 = mysqli_query($con, "SELECT * FROM Persons ORDER BY Age DESC");



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