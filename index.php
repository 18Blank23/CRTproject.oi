<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Counceling</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/roboto/roboto.css">
	<link rel="stylesheet" href="assets/main.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="bg2">
	</div>
<div class ="bg">
	<center><p3>CRT Online Counseling</p3></center>
		
	<a href="#"><center><p5>Get started!Click here ---></p5></center></a>
	
	<a href="login.php"><center><p6>Admin</p6></center></a>
		</div>
		
	<div class="box">

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
	



	<style>
	
	.bg{

position: absolute;
 height: 100%;
 width: 100%;
 background-image: url("avatar.png");
 background-repeat:no-repeat;
 		background-size:50%,50%;
		 background-position: center,center;
		
		 
 top:0;
 position: fixed;
}
.bg2{
position:absolute;
height:100%;
width:100%;
background-image: linear-gradient(aqua,blue);


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
font-size: 70px;
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
 font-size: 35px;
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
