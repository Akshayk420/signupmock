<?php
$servername='remotemysql.com';
    $username='Vmb34Q50d5';
    $password='X172GRQhLl';
    $dbname = "Vmb34Q50d5";
$conn=mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);


    $query = "SELECT * FROM customers WHERE email = '$email'";
    $result=mysqli_query($conn,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
               //echo "<script>alert('Email already exists');</script>";

               $message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";

        }
        
          else
          {



if(mysqli_query($conn, "INSERT INTO customers(name, email, mobile, age, dob, contact) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "','','','')")) {
	
echo '1';
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
}
mysqli_close($conn);
?>