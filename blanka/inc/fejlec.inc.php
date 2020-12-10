<?php 
if(isset($_SESSION['username'])){
	echo "<h1>Hoonigan Riders</h1>";
	echo "<h2>'Gumid kopjon ne a lelked' </h2><br> Bejelentkezve mint: ".$_SESSION['fname']." ".$_SESSION['lname']."<div style='color:red'>".$_SESSION['username']." </p>";
}else{
	echo "<h1>Hoonigan Riders</h1>";
	echo "<h2>'Gumid kopjon ne a lelked' </h2><br> Nem vagy bejelentkezve";
}

?>
