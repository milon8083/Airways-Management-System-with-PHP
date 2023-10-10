<?php
	include("db.php");

?>
<?php

if(isset($_POST['Log In']))
	{
		$username=$_POST['Username'];
		$password=$_POST['Password'];
		
		
		
		$sql="INSERT INTO `boot`.`mb` (`Username`, `Password`) VALUES";
		
		mysqli_query($con,$sql);
	}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title> Airways management system Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="custom.css" />



</head>
<body background-image ="bbc.jpg">

    <section class="intro">
        
        <div class="inner">
            
            <div class="content">
                
                <img src="ddc.png" class="photo" >
                <input type="text" placeholder="Username" class="input1" name="Username" >
                <input type="password" placeholder="Password" class="input2" name="Password" >
                <a href="bootstrap.php" class="btn" >Log In</a>
                
            </div>
            
        </div>
        
    </section>
	
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
<script>
	$.stellar();
</script>
	
</body>
</html>