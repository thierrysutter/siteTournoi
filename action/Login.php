<?php
session_start(); // Starting Session

$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
		$error = "Email ou mot de passe invalide";
		$_SESSION['error']=$error;
		header("location: ../index.php"); // Redirecting To The Login Page
	} else {
		// Define $username and $password
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "");
		// To protect MySQL injection for Security purpose
		$email = stripslashes($email);
		$password = stripslashes($password);
		$email = mysql_real_escape_string($email);
		$password = mysql_real_escape_string($password);
		// Selecting Database
		$db = mysql_select_db("gestifoot", $connection);
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select * from user where password='$password' AND email='$email'", $connection);
		$rows = mysql_num_rows($query);
		if ($rows == 1) {
			$_SESSION['email_user']=$email; // Initializing Session
			header("location: ../accueil.php"); // Redirecting To Other Page
		} else {
			$error = "Email ou mot de passe invalide";
			$_SESSION['error']=$error; // Initializing Session
			header("location: ../index.php"); // Redirecting To The Login Page
		}
		mysql_close($connection); // Closing Connection
	}
}

?>