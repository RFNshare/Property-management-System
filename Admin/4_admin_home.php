<?php
session_start();
?>
<!DOCTYPE html>

<html class="no-js">
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="..........................................................................." />
    <meta name="description" content="........................................................................" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <title>Home</title>
    
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    

</head>


<body>
    <div class="header-area"> 
        <div class="header-top"> 
            <div class="container"> 
                <a href="#"><img src="img/client-1295901_960_720.png" style="max-height: 5%;max-width: 5%;margin-left: 50%;opacity:1.0;"></a>
                <div class="menu col-md-5" style="margin-left: 20%;margin-top: 2%"> 
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="5_admin_profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        
                    </ul>
                </div>
                
            </div>
        </div>
        
        
    </div>
    
        
        
        
        <div class="login">
        <div class="cushome" > 
        <div class="chome"> 
            <div class="cus-top text-center"> 
                <div class="container"> 
                    <h2 style="margin-left: 7%">Admins's Panel</h2>
                </div>
            </div>
            <div class="cus-bottom" style="margin-top: 5%"> 
                <div class="container"> 
                    <div class="img-row1">
                    <div class="img col-md-4" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-top: 4%">
                    <a href="create_renter.php"><img src="img/HomeownerIcon.png" alt="" style="max-height: 35%;max-width: 35%"></a> 
                    <br>
                    <br>
                    <label style="margin-left: 2%">Create Renter</label>
                    </div>
                    <div class="img col-md-4" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-top: 4%"><a href="6_admin_view_users.php"><img src="img/people.png" alt="" style="max-height: 29%;max-width: 29%;margin-left: 12%"></a>
                    <br>
                    <label style="margin-left: 14%">View Renter</label>
                    </div>
                   <div class="img col-md-4" style="margin: 2%;background-color: #e3e8ef;border: 1px #e3e8ef;border-radius: 5%; opacity:0.6;filter: alpha(opacity=60);text-align: center;margin-left: 35%;padding-top: 2%;padding-bottom: 2%;box-shadow: 5px 10px #989ba0;margin-top: 4%"><a href="#"><img src="img/icon_header_severly-cost-burdened-owner-renter.png" alt="" style="max-height: 29%;max-width: 29%;margin-left: 12%"></a>
                    <br>
                    <label style="margin-left: 14%">Financial Details</label>
                    </div>
                
                    </div>
                    
                </div>
            </div>
        </div>
            
            
</div>
        
    </div>
 
</body>
</html>

<?php
    // Connect to the database
                        $con=mysqli_connect("localhost","root","");
                        // Make sure we connected successfully
                        if(! $con)
                        {
                            die('Connection Failed'.mysql_error());
                        }

                        // Select the database to use
                        mysqli_select_db($con,'Property');

                        $result = mysqli_query($con,"SELECT id FROM adminlogin where uname='".$_SESSION["uname"]."' and password='".$_SESSION["password"]."';") ;

                        $row = mysqli_fetch_array($result);

                        $_SESSION["id"]=$row["id"];
                        
    ?>