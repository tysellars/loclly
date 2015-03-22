<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$eventAddress = $_POST['location'];
$eventDate = $_POST['date'];
$eventPrice = $_POST['price'];
$hashTags = $_POST['hashTags'];
echo "<h3 align='center'>Summary of your order</h3>";
			
?>