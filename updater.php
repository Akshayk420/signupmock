<?php
session_start();
$servername='remotemysql.com';
    $username='Vmb34Q50d5';
    $password='X172GRQhLl';
    $dbname = "Vmb34Q50d5";
/*$servername='localhost';
    $username='root';
    $password='';
    $dbname = "customers";*/
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

$name = mysqli_real_escape_string($conn, $_POST['name']);
//$email = mysqli_real_escape_string($conn, $_POST['email']);
//$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);


if(mysqli_query($conn, "UPDATE customers SET name = '" . $name . "', age = '" . $age . "', dob = '" . $dob . "', contact = '" . $contact . "' WHERE email= '$_SESSION[email]'  ")) {

header("Location:/profile.php");

            exit();
	
echo '1';
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
?>