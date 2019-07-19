<?php 

	funtion DBconnection()
	{
		$conn = mysqli_connect('localhost', 'root', '', 'admin');
		return $conn;

	}

	
	//if (!$conn) {
		
		//echo "db err".mysqli_connect_error();
	//}
	//else
	//{
		//echo "Sucsess";
	//}


?>