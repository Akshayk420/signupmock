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

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$_SESSION[email] = $email;
		#$email = stripcslashes($email);  
        #$mobile = stripcslashes($mobile);  
        $email = mysqli_real_escape_string($conn, $email);  
        $mobile = mysqli_real_escape_string($conn, $mobile);
        $sql = "SELECT * FROM customers where email='$email' and mobile='$mobile'" ;
        $result = mysqli_query($conn,$sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        #$result = mysqli_query($conn,$sql);
          
        if($count>0)
        { 

            header("Location:profile.php");
	    exit();
	}  
        else{  

            header("Location:error.php");
	    exit();
        }     
mysqli_close($conn);
?>
