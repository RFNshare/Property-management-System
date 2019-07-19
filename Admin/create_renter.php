<!DOCTYPE html>
<html class="no-js"> 
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="..........................................................................." />
	<meta name="description" content="........................................................................" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Renter Signup</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />

</head>


<body>
<div class="header-area" style="opacity: 0.5;"> 
		<div class="header-top"> 
            <img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 47%;opacity: 1.0;"><h1 style="text-align: center;color: black">Renter Signup</h1>->
		</div>
		
		
	</div>
	
	<div class="main-area"> 
		
		
		
		
		<div class="login1"> 
			<form class="col-md-4 col-sm-offset-4 text-center" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
				<div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Flat No:</label>
				<input type="text" class="form-control" id="user" name="flatno" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Renter Name:</label>
				<input type="text" class="form-control" id="user" name="rname" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Renter Father Name:</label>
				<input type="text" class="form-control" id="user" name="rfname" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group center">
				<label for="user" style="font-weight: bold;color: #000000;">Renter Mother Name:</label>
				<input type="text" class="form-control" id="user" name="rmname" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="region" style="font-weight: bold;color: #000000;">Renter religion:</label>
				    <select name="religion">
                        <option value="islam">Islam</option>
                        <option value="hindu">Hinduism</option>
                        <option value="Buddhism ">Buddhism </option>
                        <option value="Christianity  ">Christianity  </option>
                        <option value="others ">Others </option>
                      
                    </select>
			  </div>
			  <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Renter Permanent Adress:</label>
				<input type="text" class="form-control" id="email" name="radress" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Renter Email:</label>
				<input type="email" class="form-control" id="email" name="remail" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group center">
				<label for="email" style="font-weight: bold;color: #000000;">Family Member:</label>
				<input type="text" class="form-control" id="rmember" name="rmember" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="mbl" style="font-weight: bold;color: #000000;">Mobile:</label>
				<input type="text" class="form-control" id="mbl" name="rmobile" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="adrs" style="font-weight: bold;color: #000000;">NID no:</label>
				<input type="text" class="form-control" id="adrs" name="nid" style="width:50%;margin-left: 24%" required>
			  </div>
			  <div class="form-group">
				<label for="adrs" style="font-weight: bold;color: #000000;">Emergency Contact Details:</label>
				<input type="text" class="form-control" id="adrs" name="emergency" style="width:50%;margin-left: 24%" required>
			  </div>
                <div class="form-group">
				<label for="gender" style="font-weight: bold;color: #000000;">Gender:</label>
				    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                      
                    </select>
			  </div>
                
			  
			  <button type="submit" class="btn btn-default">Create</button>
                <br>
                <br>
                <a href="4_admin_home.php">Go back to Admin Page!</a>
			</form> 
			<?php
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
            	$flatno=$_POST["flatno"];
                $rname=$_POST["rname"];
                $rfname=$_POST["rfname"];
                $rmname=$_POST["rmname"];
	            $religion=$_POST["religion"];
	            $radress=$_POST["radress"];
	            $remail=$_POST["remail"];
	            $rmember=$_POST["rmember"];
	            $rmobile=$_POST["rmobile"];
	            $nid=$_POST["nid"];
	            $emergency=$_POST["emergency"];
                $gender = $_POST['gender'];  // Storing Selected Value In Variable
                
	            $conn=mysqli_connect("localhost","root","","Property");
	               if(!$conn){
		              die("Connection failed: ".mysqli_connect_error);
	               }
	               else
	               {
		               $sql = "INSERT into renter VALUES('','$flatno','$rname','$rfname','$rmname','$religion','$radress','$remail','$rmember','$rmobile','nid','$emergency','$gender')";
	           $result = mysqli_query($conn, $sql);
	           //header('location: 4_admin_home.php?status=success');
	          
	           }
	
	          
            }
            ?>
			
		</div>
		
		<div class="signup col-sm-offset-8 col-md-8"> 
			
			
		</div>
		
		
		
		
		
		
		
		
		
		
		
	</div>
	
	
</body>
</html>