<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Char-IT-y</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/welcome.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>
<style type="text/css">
            body{
                  width: 100%;
				  background: url(image/bg3.png) ;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }
          </style>
<style>
.poster {

                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                
            }
        </style>

<body>
    <nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Javascript:void(0)"><b>Char-IT-y</b></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dashboard.php?q=0">Home<span class="sr-only">(current)</span></a></li>
                    <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="dashboard.php?q=1">User</a></li>
                    <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="dashboard.php?q=2">List of Person in Need</a></li>
                    <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="dashboard.php?q=3">List of Donater</a></li>
                    <li <?php if(@$_GET['q']==4) echo'class="active"'; ?>><a href="dashboard.php?q=4">List of Status Donation</a></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo''; ?> > <a href="logout1.php?q=dashboard.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(@$_GET['q']==0)
                {
                
                   echo '<br><br><br><br><br><center><img class="poster" src="image/logo.png" alt="img04" /></center>';
                   echo "<h1> <center><br><br>WELCOME TO Admin Page!!</center>
					</h1>";

        

					
                }
                


                ?>

        
                   <?php if(@$_GET['q']==1) 
                    {
                        $result = mysqli_query($con,"SELECT * FROM user") or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center></td><td><center><b>IC Number</b></center></td><td><center><b>Phone Number</b></center></td><td><center><b>Roles</b></center></td><td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $email = $row['email'];
                            $phonenumber = $row['phonenumber'];
                            $roles = $row['roles'];

                            
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$email.'</center></td><td><center>'.$phonenumber.'</center></td><td><center>'.$roles.'</center></td><td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }
                ?>

                <?php
                    if(@$_GET['q']== 2) 
                    {
                        $result = mysqli_query($con,"SELECT * FROM personinneed") or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center></td><td><center><b>Address</b></center></td><td><center><b>Phone Number</b></center></td><td><center><b>Type of Need</b></center></td><td><center><b>Bank Account</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $address = $row['address'];
                            $phonenumber = $row['phonenumber'];
                            $typeofneed = $row['typeofneed'];
                            $bankaccount = $row['bankaccount'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$address.'</center></td><td><center>'.$phonenumber.'</center></td><td><center>'.$typeofneed.'</center></td><td><center>'.$bankaccount.'</center></td><td><center><a title="Delete User" href="update.php?daddress='.$address.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }

                    if(@$_GET['q']== 3) 
                    {
                        $result = mysqli_query($con,"SELECT * FROM donater") or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center></td><td><center><b>Type of Help</b></center></td><td><center><b>Phone Number</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $phonenumber = $row['phonenumber'];
                            $typeofhelp = $row['typeofhelp'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$typeofhelp.'</center></td><td><center>'.$phonenumber.'</center></td><td><center><a title="Delete User" href="update.php?dphonenumber='.$phonenumber.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }
                    if(@$_GET['q']== 4) 
                    {
                        $result = mysqli_query($con,"SELECT * FROM donationstatusform") or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center></td><td><center><b>Type of Help</b></center></td><td><center><b>Phone Number</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $phonenumber = $row['phonenumber'];
                            $typeofhelp = $row['typeofhelp'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$typeofhelp.'</center></td><td><center>'.$phonenumber.'</center></td><td><center><a title="Delete User" href="update.php?dname='.$name.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
