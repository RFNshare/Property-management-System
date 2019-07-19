<?php
error_reporting(0);
	//require 'db.php';

	if(isset($_POST['submit']))
	{

		$name 	= trim($_POST['name']);
		//$utype = $_POST['utype'];
		$uname 	= trim($_POST['uname']);
		$password 	= trim($_POST['password']);
        $repassword = trim($_POST['cpassword']);
        $email = trim($_POST['email']);
        $gender = $_POST['gender'];
        //$ddob = $_POST['ddob'];
        //$mdob = $_POST['mdob'];
       // $ydob = $_POST['ydob'];

		
		// empty(trim($_POST['name'])) || empty(trim($_POST['email']))
		        
        if( empty(trim($_POST['password'])) || empty(trim($_POST['uname'])) || empty(trim($_POST['cpassword'])) )
        {
            header('location: 0_admin_registration.php?status=empty');
        }
		else
        {
		 if($password == $repassword) 
		{
		 		$conn = mysqli_connect('localhost', 'root', '', 'Property');
            	if(!$conn)
            	{
					echo "DB Error: ".mysqli_connect_error();
				}	
				else
				{

					$sql = "INSERT into adminlogin VALUES('','$uname','$password')";
					$sql1 = "INSERT into admin VALUES('$email','$mobile','$adress','$uname','','$name','$gender')";
					$result = mysqli_query($conn, $sql);
					$result1 = mysqli_query($conn, $sql1);
					if($result && $result1)
					{
						header('location: 2_admin_log.php?status=success');
		            }
	                else
	                {
                          header('location: 0_admin_registration.php?status=rule');
	                }
					
            	}
        }
            	
        }
        	
               
                 
    }//data receive condition close

	 //submit if condition close
		
	else
	{
		echo "Invalid request";
	}

?>