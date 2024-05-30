<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DIGITAL ART|MUSEUM</title>
	<style>
		body{
			background: url(images/4.jpg)no-repeat;
			background-size: cover;
		}
		*{
			padding: 0;
			margin:0;
			font-family: poppins;
		}  

		ul a{
			display: flex;
			column-gap:50px;
			text-decoration: none;
			float: right;
			color:white;
            

		}
		.nav{
          display: flex;
          background: black;
          position: relative;
            padding: 20px;
			width:97.1%;

		}
		.content{
      margin-left: 530px;
      margin-top: 220px;
		}
		.content p{
			font-size: 55px;
			color: white;
		}
		.content button{
			border-color: white;
			background:transparent;
			width: 200px;
			height: 50px;
			color: white;
			margin-bottom: 90px;
			font-size: 15px;
			outline: white;
			margin-left: 90px;
			border-radius: 4px;
		}
		.content button:hover{
			border-color: transparent;
			background:black;
			width: 200px;
			height: 50px;
			color: white;
			margin-bottom: 90px;
			font-size: 15px;
			outline: transparent;
			margin-left: 90px;
			border-radius: 4px;
		}
		.content button  a{
			text-decoration: none;
			color: white;
		}
		h2 a{
			text-decoration: none;
			color: white;
			padding: 10px;
			margin-bottom: 5px;
			}
 .footer{
 	padding-bottom: 0;
 	background: black;
 	color: white;
 	width:95.6%;
 	
 	padding: 30px;
 }
 .nav p{
 	color: white;
 }
 .nav p a{
 	text-decoration: none;
 	color: white;
 }
	</style>
</head>
<body>
<div class="main">
	<div class="nav">
		<h2><a href="index.php">Digital Art Museum</a></h2>
		<center><p style="padding:7px; margin-left: 70px;"><a href="ticket.php">Buy tickets</a></p></center>
		<!-- <ul><a href="#">Home</a></ul>
		<ul><a href="">About us</a></ul>
		<ul><a href="">Service</a></ul>
		<ul><a href="">Contact Us</a></ul>
	</div> -->
</div>
<div class="content">
	<p>Welcome to The <br>Digital Art Museum</p>
	<br><button><a href="plan.php">Plan Your Visit</a></button>
</div> 
<div class="footer">
	<footer><center>&copy Copyright DIGITAL ART MUSEUM 2024</center></footer>
</div>
</body>
</html>