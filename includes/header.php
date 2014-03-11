		<header>
			<a href="index.php"><div id="logo"><img src="images/generic/logo.png"></div>
			
			<div id="logo_text"><h1 class="desktop">Steven Litton - Digital Media Portfolio</h1></a></div>
			
			<nav>
				<ul>
	                <li class="mobile menu-open"><a href="#">Menu</a></li>
	                <li><a class="<?php if ($section == "home"){echo "activelink";} ?>" href="index.php" class="active">Home</a></li> 
	                <li><a class="<?php if ($section == "about"){echo "activelink";} ?>" href="about.php">About</a></li>
	                <li><a class="<?php if ($section == "cv"){echo "activelink";} ?>" href="cv.php">CV</a></li>
	                <li class="dropdown"> <a class="<?php if ($section == "portfolio"){echo "activelink";} ?>" href="portfolio.php">Portfolio</a>
	                	<ul class="sub-nav">
		                	<li><a href="photography.php">Photography</a></li>
		                	<li><a href="digital_imaging.php">Digital Imaging</a></li>
		                	<li><a href="video.php">Video</a></li>
		                	<li><a href="web_design.php">Web Design</a></li>
		                	<li><a href="print.php">Print</a></li>
		                	<li><a href="design.php">Design</a></li>
		                </ul>
	                </li>
	                <li> <a class="<?php if ($section == "blog"){echo "activelink";} ?>" href="scribble.php">Scribble</a></li>
					<li><a class="<?php if ($section == "contact"){echo "activelink";} ?>" href="contact.php">Contact</a></li>
				</ul>
                <div class="clearfix"></div>
			</nav>	</header>
			
			