<!DOCTYPE html>
<html>
<head>
	
	<title>Online Counseling</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/roboto/roboto.css">
	<link rel="stylesheet" href="assets/main.css">
	<link type="text/css" rel="stylesheet" href="css/slideshow.css"></link>
	<link rel="stylesheet" href="style.css">
	<script src="js/slideshow.js"></script>
    <script src="js/description.js"></script>
	<meta name="theme-color" content="#42bcf4">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset="utf-8"> 
	 


	<link rel="stylesheet" href="gen.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		@import 'https://fonts.googleapis.com/css?family=Baloo+Bhai|Roboto+Condensed';
	die();
	</style>
</head>

<body>

		

	<div class="bg2">
	</div>
<div class ="bg">
	
	</div>
	
	
	
	<script src="assets/jquery/jquery.min.js"></script>
	<script src="assets/popper/popper.min.js"></script>
	<script src="assets/sweetalert/sweetalert.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/moment/moment.min.js"></script>
	<script src="assets/moment/id.js"></script>
	<script src="assets/chatbox.js"></script>
	
	<script>
		$(document).ready(function() {
			$('.box').chatBox({
				api: {
					request: 'v1/request.php',
					send: 'v1/send.php',
					replies: 'v1/replies.php',
					history: 'v1/history.php',
					destroy: 'v1/destroy.php',
					status: 'v1/status.php',
				},
				sessionIndex: 'chatBoxToken',
				status: 'online',
				refreshInterval: 7500,
				limit: 10,
				updateStatusInterval: 60000,
				thankYouDict: 'Thank you! The conversation has ended.'
			});
		});

	</script>
		
		
<center>
      <table id="outerTable">
        <tr>
          <td>
        
          </td>
        </tr>
        <tr>
          <td>
            <table id="innerTable"><tr><td>
              <img class="tripPix" src="1.jpg" style="width:100%; height:100%;">
              <img class="tripPix" src="2.jpg" style="width:100%; height:100%;">
              <img class="tripPix" src="3.jpg" style="width:100%; height:100%;">
              <img class="tripPix" src="4.jpg" style="width:100%; height:100%;">
			  <img class="tripPix" src="5.jpg" style="width:100%; height:100%;">
              <img class="tripPix" src="6.jpg" style="width:100%; height:100%;">
              
			  </td></tr></table>
          </td>
        </tr>
        <tr>
          <td>
            <button onclick="changePic(-1)" title="Previous slide"><b>&#10094;</b></button>
            <button onclick="toggleFlow(this)" id="buttonPlayPause" title="Play/pause">&#10074;&#10074;</button>
            <button onclick="changePic(1)" title="Next slide"><b>&#10095;</b></button>
          </td>
        </tr>
        <tr>
          <td>
            <b><span id="slideName"></span></b>
          </td>
        </tr>
      </table>
      <script type="text/javascript">
        if (MANUAL_SLIDESHOW) {
          hidePlayButton();
          slideIndex = 1;
          showPic(slideIndex);
        } else {
          slideIndex = 0;
          slideshow();
        }
      </script>
    </center>
	
	
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
<a class="nav-link" href="mv.php">Terms of Use</a>
</li>
<li class="nav-item active" style="margin-top:10px; margin-right:10px;">
<a class="nav-link" href="login.php">Admin</a>
</li>
      
      </div>
    </div>
  </nav>
</div>

		
		<div class="box">

</div>
	<style>
	
	.bg{

position: absolute;
 height: 100%;
 width: 100%;

 background-repeat:no-repeat;
 		background-size:50%,50%;
		 background-position: center,center;
		
		 
 top:0;
 position: fixed;
}
.bg2{
position:absolute;
height:120%;
width:100%;
background-image: linear-gradient(aqua,blue);
top:0;

}

p5{
font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
 font-size: 30px;
 -webkit-text-stroke:1px;
 -webkit-text-fill-color:rgb(225, 225, 225);
 -webkit-animation:fill 0.5s infinite alternate;
position:absolute;
bottom:0;
right:110px;

}

p3{


font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
font-size: 70px;
-webkit-text-stroke:2px;
-webkit-text-fill-color:rgb(225, 225, 225);
-webkit-animation:fill 0.5s infinite alternate;

}
p6{
font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
 font-size: 35px;
 -webkit-text-stroke:1px;
 -webkit-text-fill-color:rgb(225, 225, 225);
 -webkit-animation:fill 0.5s infinite alternate;
position:absolute;
top:0;
right:0;

}

@media screen and (min-width: 320px) and (max-width:480px) {
	p3{


font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
font-size: 50px;
-webkit-text-stroke:2px;
-webkit-text-fill-color:rgb(225, 225, 225);
-webkit-animation:fill 0.5s infinite alternate;
position: absolute;
text-align:center;
top:40px;
left:0;
}
p6{
font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
 font-size: 25px;
 -webkit-text-stroke:1px;
 -webkit-text-fill-color:rgb(225, 225, 225);
 -webkit-animation:fill 0.5s infinite alternate;
position:absolute;
top:0;
right:0;

}
p5{
font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
 font-size: 20px;
 -webkit-text-stroke:1px;
 -webkit-text-fill-color:rgb(225, 225, 225);
 -webkit-animation:fill 0.5s infinite alternate;
position:absolute;
bottom:0;
right:110px;

}


}

	</style>
</body>
</html>
<?php
date_default_timezone_set("Asia/Bangkok");
?>
