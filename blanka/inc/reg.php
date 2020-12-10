<?php
	session_start();	
	include 'db.php';
	
	$username = "";
	$password    = "";
	$fname    = "";
	$lname    = "";
	$errors = array(); 


$db = mysqli_connect($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);


if (isset($_POST['reg'])) {
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Email is required"); }

  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Felhasznállónév már foglalt!");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password);

  	$query = "INSERT INTO users (username, password, fname, lname) 
  			  VALUES('$username', '$password', '$fname', '$lname')";
  	mysqli_query($db, $query);
  	header('location: /blanka');
  }
}
?>
