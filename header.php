<?php
	echo "<nav>
			<div  id='menubar'>
				<ul>
					<li id='burger'><button id='hiddenbtn' onclick='show()'><img src='burger-bar.png' id='burgericon' alt='menu'></button></li>
					<li><a href='page.php'>Home</a></li>
					<li><a href='themepage.php'>Themes</a></li>
					<li class='tohover'>Lessons
						<ul class='dropdown'>
  							<li class='dropitem firstdropdown'><a href='conjugation.php'>Conjugation</a></li>
    						<li class='dropitem'>Grammar</li>
			 			</ul>
  					</li>
					<li><a href='quizes.php'>Quizes</a></li>
					<li><a href='mediaressources.php'>Media Ressources</a></li>
					<li><a href='#abtus'>About us</a></li>
				</ul>	
			</div>
		</nav>";
?>