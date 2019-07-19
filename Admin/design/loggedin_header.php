<?php
 session_start();
 error_reporting(0);
   
    if(!isset($_SESSION['name']))
    {
        header('location: AdminLog.php');
      
    }
?>
<?php


            
            $myfile = fopen("user.txt", 'r');
            $uname = " ";
            $name=" ";
            $utype=" ";
            while (!feof($myfile)) 
            {   
                $data = fgets($myfile);
                $arr = explode("|", $data); 
                if($_SESSION['name']== $arr[2]){
                    $_SESSION['uname'] =  $arr[0];
                    $_SESSION['name1'] =  $arr[2];
                    $_SESSION['utype'] =  $arr[3];
                    $_SESSION['email'] =  $arr[4];
                    $_SESSION['gender'] =  $arr[5];
                    $_SESSION['ddob'] =  $arr[6];
                    $_SESSION['mdob'] =  $arr[7];
                    $_SESSION['ydob'] =  $arr[8];

                }
            }
            fclose($myfile);

?>
<table width="100%" align="center" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="2" valign="middle" height="70">
            <table width="100%">
                <tr>
                    <td>
                        <a href="#">
                            <img height="48" src="../image/logo.png">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as <a href="#"><?php  echo($_SESSION['name']); ?></a>&nbsp;|
                        <a href="Logout.php">Logout</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>