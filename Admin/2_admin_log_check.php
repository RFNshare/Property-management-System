
<?php
	
	session_start();
	error_reporting(0);

	if(isset($_POST['submit']))

	{
						$_SESSION["uname"]= $_POST["uname"];
                   		$_SESSION["password"]= $_POST["password"];
                    	$uname = $_POST["uname"];
                    	$password = $_POST["password"];
						$con=mysqli_connect("localhost","root","");
                        // Make sure we connected successfully
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }

                        // Select the database to use
                        mysqli_select_db($con,'Property');

                        $result = mysqli_query($con,"SELECT * FROM adminlogin where uname='".$uname."' and password='".$password."';") or die("Failed to Login".mysql_error());

                        $row = mysqli_fetch_array($result);

                        if($row["uname"]==$uname && $row["password"]==$password)
                        {
                            header("Location:4_admin_home.php");
                        }
	}


			
			

			//echo $isvalid;

		
      
		
	else
	{
		echo "Invalid request";
	}

?>