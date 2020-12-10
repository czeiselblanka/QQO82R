<header class="major"><h2>Album</h2></header>

<div class="row">
  <div class="column">
    <img src="kepek/1.jpg" alt="Nature" onclick="myFunction(this);" width="300" height="234">
  </div>
  <div class="column">
    <img src="kepek/2.jpg" alt="Snow" onclick="myFunction(this);" width="300" height="234">
  </div>
  <div class="column">
    <img src="kepek/3.jpg" alt="Mountains" onclick="myFunction(this);" width="300" height="234">
  </div>
  <div class="column">
    <img src="kepek/4.jpg" alt="Lights" onclick="myFunction(this);" width="300" height="234">
  </div>
</div>

<?php 
if(isset($_SESSION['username'])){
	include 'inc/imgupload.inc.php';
}else{
	echo "A képfeltöltéshez előbb be kell jelentkezned!";
}
?>

</body>
</html>