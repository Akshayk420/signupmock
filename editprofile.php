<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign Up Mock</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="text/css" href="favicon.ico">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script> 



</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-8 col-offset-2">
<div class="page-header">
<br>
<h2>Hello!!</h2>
</div>
<p>You can update your data here</p>
<br>
<p id="show_message" style="display: none">Thank you for your time, your account has been created!</p>
<span id="error" style="display: none"></span>
<form action="updater.php" method="post" id="ajax-form">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" id="name" class="form-control" value="" maxlength="50" >
</div>

<div class="form-group">
<label>Age</label>
<input type="text" name="age" id="age" class="form-control" value="" maxlength="12" >
</div>
<div class="form-group">
<label>Date of birth</label>
<input type="text" name="dob" id="dob" class="form-control" value="" maxlength="12" >
</div>
<div class="form-group">
<label>Contact</label>
<input type="text" name="contact" id="contact" class="form-control" value="" maxlength="12" >
</div> 
<input type="submit" class="btn btn-primary" name="submit" value="UPDATE">

<br>
<br>

</form>

 

</div>
</div>    
</div>
</body>
</html>
