			<ul>
				<li class="active"><a href="index.php" class="active">Kezdőlap</a></li>
				<li><a href="index.php?oldal=videos">Videók</a></li>
				<li><a href="index.php?oldal=album">Album</a></li>
				<li><a href="index.php?oldal=contact">Kapcsolat</a></li>
				<li><a href="index.php?oldal=msg">Üzenetek</a></li>
				<?php 
					if(isset($_SESSION['username'])){
						echo "<li><a href='index.php?oldal=logout'>Kilépés</a></li>";
					}else{
						echo "<li><a href='index.php?oldal=login'>Belépés</a></li>";
					} 
				?>
			</ul>