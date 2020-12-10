<?php 
require_once('inc/db.php');
	
$conn = mysqli_connect($config['hostname'], $config['dbuser'], $config['dbpassword'], $config['dbname']);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT name, email, msg FROM messages ORDER BY time DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {



mysqli_close($conn);

		
?>
	<div class="rightcontent">
		<div class="fooldal_focimcontainer">
			<header class="major"><h2>Üzenetek</h2></header>
		</div>
		<div>
					<?php
					while($row = mysqli_fetch_assoc($result)) {
    echo "<h1>Név:</h1> " . $row["name"]. " <br> <h1>Email cím:</h1> " . $row["email"]. "<br><h1> Üzenet </h1>" . $row["msg"]. "<br><hr>";
  }
} else {
  echo "0 results";
}
					?>
		</div>

	</div>

