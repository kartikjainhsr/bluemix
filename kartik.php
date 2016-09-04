<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact - Mustache Enthusiast</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
	<div id="header">
		<a href="index.html" class="logo">
			<img src="images/logo.jpg" alt="">
		</a>
		<ul id="navigation">
			<li>
				<a href="index.html">home</a>
			</li>
			<li>
				<a href="about.html">about</a>
			</li>
			<li>
				<a href="gallery.html">gallery</a>
			</li>
			<li>
				<a href="blog.html">blog</a>
			</li>
			<li class="selected">
				<a href="contact.html">contact</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h1><span>let's keep in touch</span></h1>
		<form action="kartik.php" method="POST">
			<input type="text" name="fname" id="fname" value="name">
			<input type="text" name="address" id="address" value="address">
			<input type="text" name="email" id="email" value="email">
			<input type="text" name="phone" id="phone" value="phone number">
			<textarea name="message" id="message">message</textarea>
			<input type="submit" name="send" id="send" value="send">
		</form>
	</div>
	<div id="footer">
		<div>
			<p>&copy; 2023 by Mustacchio. All rights reserved.</p>
			<ul>
				<li>
					<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
				</li>
				<li>
					<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
				</li>
				<li>
					<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
				</li>
				<li>
					<a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
				</li>
			</ul>
		</div>
	</div>
<?php
$servername = "krtik.database.windows.net";
$username = "kartik_jain_hsr";
$password = "justjoking1#";
$dbname="kartik2";

// Create connection
$conn = new mysql($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO MyGuests (name,address,email,number,message)
VALUES ('$_POST[fname]','$_POST[address]','$_POST[email]','$_POST[phone]','$_POST[message]');
?>
</body>
</html>


