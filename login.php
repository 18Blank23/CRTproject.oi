
	
<!DOCTYPE html>
<html lang="en">	
<head>
	<title>CRT | Login</title>
	<meta name="theme-color" content="#42bcf4">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset="utf-8"> 
	 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="gen.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		@import 'https://fonts.googleapis.com/css?family=Baloo+Bhai|Roboto+Condensed';
	die();
	</style>
	

    
</head>

<body>

<div class="fixed-top">
  
  <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear" >
    <div class="container" >
      <a class="navbar-brand" href="index.php" style="text-transform: uppercase; font-size:29px;"> CRT Online Counseling</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
	  <ul class="navbar-nav ml-auto" style="float: right;">

<li class="nav-item active" style="margin-top:10px; margin-right:10px;">
  <a class="nav-link" href="index.php">Home
	<span class="sr-only">(current)</span>
  </a>
</li>

<li class="nav-item active" style="margin-top:10px; margin-right:10px;" >
  <a class="nav-link" href="about.php">About</a>
</li>

<li class="nav-item active" style="margin-top:10px; margin-right:10px;">
<a class="nav-link" href="contact.php">Vision and Mission</a>
</li>

<li class="nav-item active" style="margin-top:10px; margin-right:10px;">
<a class="nav-link" href="login.php">Admin</a>
</li>
      
      </div>
    </div>
  </nav>
</div>

	<div class="container">
		<center>

		<div class="row">
			
		</div><br><br><br>
		<div class="row"><!-- login screen-->
			<div class="panel panel-danger" id="error_wrap">
      			<div class="panel-heading" id="error"></div>
     
			</div>
		<div class="main">

<section class="signup">
	<!-- <img src="images/signup-bg.jpg" alt=""> -->
	<div class="container">
		<div class="signup-content">
		
		<form method="POST" action="login.php?submit=true">
		<h2 class="form-title">Login</h2>
					<div class="form-group">
				<!--	<label for="usr"><h3>User Id:</h3></label>-->
                            <input type="text" class="form-input" name="usr" id="usr" placeholder="Username" autocomplete="off"/>
                        </div>

					<div class="form-group">
                            <input type="password" class="form-input" name="pwd" id="pwd" placeholder="Password" autocomplete="off"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
					<input type="submit" value="Login"  class="form-submit" style="width:90%">
		
				</form>
				
				
				</div>

			</div>
	
        </section>
      		
   
		
		</div>

	
</body>
</html>
<?PHP
include "config.php";
error_reporting(0);
ini_set('display_error',0);

$uname=$_POST['usr'];
$pass=$_POST['pwd'];
$sql="select * from user_mail WHERE username='$uname' AND password='$pass' ";
 $result=$con->query($sql);

if(!$row=$result->fetch_assoc())
{
  echo"<script>alert('User and password error!');</script>";  
}
else
{
   
    header("Location:admin/index.php");
}
 

?>
