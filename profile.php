<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Name</th>
<th>Age</th>
<th>Date of birth</th>
<th>Contact</th>

</tr>
<?php
session_start();
$servername='remotemysql.com';
    $username='Vmb34Q50d5';
    $password='X172GRQhLl';
    $dbname = "Vmb34Q50d5";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
// Check connection
$sql = "SELECT name, email, age, dob, contact FROM customers where email=   '$_SESSION[email]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["name"]. "</td>
<td>" . $row["age"]. "</td>
<td>" . $row["dob"]. "</td>
<td>" . $row["contact"]. "</td>
</tr>
"
;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<br>
<br>
<form method="POST" action="editprofile.php">
<input type="submit" class="btn btn-primary" name="submit" value="EDIT PROFILE">
</form>
<br>
<form method="POST" action="index.php">
<input type="submit" class="btn btn-primary" name="submit" value="LOGOUT">

</body>
</html>
