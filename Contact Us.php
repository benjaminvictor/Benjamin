<html>
	<head>
		<title>Contact Us</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="logo"><img src="images\logo.jpg"></div>
				
			<div class="top-menu">
				<ul class="list-menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="About Us.html">About Us</a></li>
					<li><a href="Gallery.html">Gallery</a></li>
					<li class="active"><a href="Contact Us.php">Contact Us</a></li>
				</ul>
			</div><!--close topmenu-->
			<div style="margin-right:500px;">
			<img src="images/slide4.jpg">
			<h1>Our Contact Information</h1>
			<p>Our lines are open every weekday from:
			<b>0700hrs to 2300hrs;</b>
			Saturdays from <b>0900hrs to 2100hrs</b>
			and
			Sundays from <b>1000hrs to 1700hrs</b>
			<i>Feel free to contact us during the mentioned time above on:
			0701022017
			<b>OR</b>
			0737987521</i></p>
			</div>
			<div class="form1" style="margin-left:600px;margin-top:-100px">
			<h1>Contact us on:</h1>
			<form>
			
			<label>Last Name</label>
			<input type="text" name="lname"/><br /><br />
			
			<label>First Name</label>
			<input type="text" name="fname"/><br /><br />
			
			<label>Gender</label>
		<input name="gender" value="male" type="radio"/>Male
		<input  name="gender" value="female" type="radio"/>Female
		<br /><br />
		
			<label>Message</label>
			<textarea name="message" rows="8">
			</textarea><br /><br />
			
			<button type="submit" value="submit"> Submit</button>
			
			</form>
			<?php
if (isset($_POST['lastname'])){
$fname = $_POST['firstname'];
$lname = $_POST['gender'];
$reg_no=$_POST['message'];



$query = mysql_query("select * from users where gender='male''female'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count >0){ ?>
<script>
alert('User already exist in the database try registering new student');
</script>
<?php
}else{
mysql_query("insert into users(firstname,lastname,gender,message) values('$lastname','$firstname','$gender','$message')")or die(mysql_error());
?>
<script>
alert('New user has been registered.Use your registraion Number as password');
window.location = "index.php";
</script>
<?php
}
}
?>
			</div><!--close form1-->
			<div class="footer">
			<b>&copyAngela Ivey</b>
			</div><!--close footer-->
			
		</div><!--close container-->
	</body>




</html>