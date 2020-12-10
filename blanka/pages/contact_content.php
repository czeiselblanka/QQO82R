<?php
	
	$config['hostname'] = "localhost";
	$config['dbuser'] = "root";
	$config['dbpassword'] = "";
	$config['dbname'] = "hoonigan";
	
	$name = "";
	$email    = "";
	$msg    = "";
	$errors = array(); 


$db = mysqli_connect($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);


if (isset($_POST['kuld'])) {
  
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $msg = mysqli_real_escape_string($db, $_POST['msg']);


  if (empty($name)) { array_push($errors, "Név mező üres!"); }
  if (empty($email)) { array_push($errors, "Email mező üres!"); }
  if (empty($msg)) { array_push($errors, "Szöveg mező üres!"); }
  

  if (count($errors) == 0) {

  	$query = "INSERT INTO messages (name, email, msg) 
  			  VALUES('$name', '$email', '$msg')";
  	mysqli_query($db, $query);
  	header('location: index.php');
  }else{
	  print_r($errors);
  } 
}
?>
	<script> 
	function validateForm() {
			var x = document.forms["myForm"]["name"].value;
			var y = document.forms["myForm"]["email"].value;
			var z = document.forms["myForm"]["msg"].value;
			
			if (x == "") {
				alert("A név mezőt ki kell tölteni!");
				return false;
			}
			if (y == "") {
				alert("Az email mezőt ki kell tölteni!");
				return false;
			}
			if (z == "") {
				alert("A szöveg mezőt ki kell tölteni!");
				return false;
			}
			if (x.length > 30) {
				alert("A név túl hosszú!");
				return false;
			}
			if (y.length > 30) {
				alert("Az email túl hosszú!");
				return false;
			}
			if (z.length > 100) {
				alert("A szöveg túl hosszú!");
				return false;
			}

		}
	</script>
	<header class="major"><h2>Kapcsolat</h2></header>
	<div class="regcontent">
		<div class="login-container">
			<h3 class="login-title">Írj üzenetet, ha mersz! :)</h3>
			<form  name="myForm" action="pages/contact_content.php" onsubmit="return validateForm()" method="post">												
				<div class="input-group"> 
					<input type="text" id="name" name="name" placeholder="neved" required>
				</div>
				<div class="input-group">
					<input type="email" id="email" name="email" placeholder="email címed" required>
				</div>
				<div class="input-group">
					<textarea id="szoveg" name="msg" cols="40" rows="10" placeholder="üzeneted..." required></textarea>
				</div>
				<div class="input-group">					
					<input name="kuld" type="submit" value="Küld" class="login-button">
				</div>
			</form>
		</div>
	</div>

