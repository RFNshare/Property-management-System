<?php

	if(isset($_GET['status'])){
		$status = $_GET['status'];
		if($status == "error"){
			echo "Something went wrong! Try again";
		}
        if($status == "empty"){
			echo "Fields Can not be Empty ";
		}
         if($status == "password"){
			echo "Password do not matched";
		}
        if($status == "rule"){
			echo "<center><p style='color:white;font-family:sans-serif;font-size: 150%;padding: 10px;line-height: 170%;'>"."Follow Signup Rules"."</p></center>";
		}
        if($status == "wrngemail"){
			echo "<center><p style='color:white;font-family:sans-serif;font-size: 150%;padding: 10px;line-height: 170%;'>"."Enter Valid Email Address"."</p></center>";
		}
        
	}

?>


<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">\
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<title>Admin Signup</title>
</head>
<body>


	<div class="header-area" style="opacity: 0.5;"> 
		<div class="header-top"> 
            <img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 48%;opacity:1.0;"> <h1 style="text-align: center;color: black">Admin Sign Up</h1>
		</div>
		
		
	</div>
	
	<div class="main-area"> 

		<div class="login1"> 
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-top: 4%" action="1_admin_registration_check.php" method="post" >
				<div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Name:</label>
				<input type="text" class="form-control" id="user" name="name" style="width:50%;margin-left: 24%" >
			  </div>
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Username:</label>
				<input type="text" class="form-control" id="user" name="uname" style="width:50%;margin-left: 24%" >
			  </div>
			  <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Email:</label>
				<input type="email" class="form-control" id="email" name="email" style="width:50%;margin-left: 24%" >
			  </div>
			  <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Password:</label>
				<input type="password" class="form-control" id="pwd" name="password" style="width:50%;margin-left: 24%" >
			  </div>
			  <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Re type Password:</label>
				<input type="password" class="form-control" id="pwd" name="cpassword" style="width:50%;margin-left: 24%" >
			  </div>
			  <div class="form-group">
				<label for="mbl" style="font-weight: bold;color: #000000;">Mobile:</label>
				<input type="text" class="form-control" id="mbl" name="mobile" style="width:50%;margin-left: 24%" >
			  </div>
			 <div class="form-group">
				<label for="adrs" style="font-weight: bold;color: #000000;">Address:</label>
				<input type="text" class="form-control" id="adrs" name="address" style="width:50%;margin-left: 24%" >
			  </div>
			  <div class="form-group">
				<fieldset>
					<legend style="font-weight: bold;color: #000000;">Gender</legend>
					<input type="radio" name="gender" value="male"/>Male
					<input type="radio" name="gender" value="female"/>Female
					<input type="radio" name="gender" value="others"/>Others
					
					</fieldset>
			  </div>
			  
			  <button type="submit" name="submit" class="btn btn-default">Sign Up!</button>
                <br>
                <br>
                <a href="2_admin_log.php">Go back to Login!</a>
			</form> 
			</div>
		
		<div class="signup col-sm-offset-8 col-md-8"> 		
		</div>
	
	</div>

</body>
</html>

<center>

		