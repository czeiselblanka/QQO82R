<?php
	session_start();
	
	include 'db.php';
	$con = mysqli_connect($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);
	mysqli_select_db($con, 'users');
	$error = "";
		if(isset($_POST["submit"])){	 									
			if(empty($_POST["username"]) || empty($_POST["password"])){	
				$error = "Az összes mezőt ki kell tölteni.";
			}else{		
				$username=$_POST['username'];
				$password=$_POST['password'];
				$username = stripslashes($username);
				$password = stripslashes($password);
				$password = md5($password);        											 
				$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
				$result=mysqli_query($con,$sql);
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				if(mysqli_num_rows($result) == 1){												// Amennyiben a a felhasznállónév, jelszó páros megtalálható az adatbázisban
					$_SESSION['username'] = $row['username']; 											// A felhasznállónév eltárolódik egy session ben.
					$_SESSION['fname'] = $row['fname'];
					$_SESSION['lname'] = $row['lname'];
					header("location: /blanka"); 
				}else{
					$error = "Hibás felhasznállónév vagy jelszó.";
				}
			}
		}
?>