<pre>
<?php

$s=$_FILES['fileToUpload']['tmp_name'];
$n=$_FILES['fileToUpload']['name'];
$sz=$_FILES['fileToUpload']['size'];

if(file_exists("uploads/".$n)){
	echo "file already exists";
}
else{
	move_uploaded_file($s,"uploads/".$n);
	echo "File upload successfully";
}
/*echo $_FILES['fileToUpload']['name']."<br>";
echo $_FILES['fileToUpload']['type']."<br>";
echo $_FILES['fileToUpload']['tmp_name']."<br>";
echo $_FILES['fileToUpload']['error']."<br>";
echo $_FILES['fileToUpload']['size']."<br>";*/
?>
</pre>