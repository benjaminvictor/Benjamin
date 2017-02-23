<?php
include("dbcon.php");
?>


<html>
	<head>
		<title> CONTACT US </title>
		<link rel="stylesheet" href="css\STYLE.css"/>
	</head>
 <?php if(isset($_POST['submit']))
{

//inserting to mysql

$sql="insert into contacttable(name,email,comments)values('".$_POST["fname"]."','".$_POST["email"]."','".$_POST["message"]."')";
mysql_query($sql);

echo $sql;

}
?> 
 
 
	<body>
		<div class = "container" >
			<div class = "logo"> <img src="images\logo.jpg"></div>
				<div class = "top-menu"> 
					<ul class="list-menu">
					<li><a href = "index.html">Home</a></li>
					<li><a href = "about.html">About Us</a></li>
					<li><a href = "gallery.html">Gallery</a></li>
					<li class="active" ><a href  = "contact.php">Contact Us</a></li>
				</div>
		
				<div>
			<img src="images\slide1.jpg"/>                                                                                                                                                                                                            4.jpg">
			<h1>HOW TO REACH US</h1>
			
		<p style="margin-right:300px"> Serena Hotel is a 5 star hotel that is located in Westlands, Nairobi. It caters for people from all backgrounds and serves dishes from traditional to local ones.5 star hotel that is located in Westlands, Nairobi. It caters for people from all backgrounds and serves dishes from traditional to local ones.Backgrounds and serves dishes from traditional.
		</div>
			
			<div class ="Form1"style="margin-left:600px; margin-top:-100px;">
			<form method="post">
			<label>Enter Your Name</label>
		<input type= "text" name ="fname"/><br /><br />
		<label>Enter Your Email</label>
		<input type="text" name="email"/>
		<label>Message</label>
		<textarea name="message" rows="10"> 
		</textarea>
				
		<button name="submit" type="submit">  Submit</button>
		</div>
		</form>
			<div class = "footer">Developed by: <br>Benjamin Victor. <br>All rights reserved. </div>
			</div>
			</div>