<?php

	if(isset($_GET['status'])){
		$status = $_GET['status'];
		if($status == "error"){
			echo "<center><p style='color:white;font-family:sans-serif;font-size: 150%;padding: 10px;line-height: 170%;'>"."Username or Password do not matched!"."</p></center>";
		}
        if($status == "rule"){
			echo "Please follow Rules";
		}
        if($status == "success"){
			echo "Registration Successfull";
		}
		if($status == "invalid"){
			echo "USername or password do not matched";
		}
        
	}
	
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	
</head>
<body>
		<div class="header-area" style="opacity: 0.5;"> 
		<div class="header-top"> 
            <img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 48%;opacity:1.0;"> <h1 style="text-align: center;color: black">Sign in</h1>
		</div>
		
		
	</div>
	<div class="login"> 
			<form class="col-md-4 col-sm-offset-4 text-center" action="2_admin_log_check.php" method="post" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;">
			  <div class="form-group center" >
				<label for="uname" style="font-weight: bold;color: #000000;">Username:</label>
				<input type="text" class="form-control" id="email" name="uname" style="width:50%;margin-left: 24%;" required>
			  </div>
			  <div class="form-group">
				<label for="pwd" style="font-weight: bold;color: #000000;">Password:</label>
				<input type="password" class="form-control" id="pwd" name="password" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="checkbox">
				<label style="font-weight: bold;color: #000000;"><input type="checkbox"> Remember me</label>
			  </div>
			  
			  
			  <button type="submit" class="btn btn-default" name="submit" style="font-weight: bold;color: #000000;">Login</button>
			  <br>
			  <br>
			  <label style="font-weight: bold;color: #000000;">Don't have an account? <a href="0_admin_registration.php">Sign Up!</a> </label>
			  <br>
			
			</form>
			</div>

</body>
</html>



	