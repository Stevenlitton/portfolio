<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="description" content="Photography | Digital Media Portfolio – Bournemouth photographer, video producer and front end web designer. Available for freelance and collaborative work." />
<meta name="keywords" content="bournemouth photographer, dorset, photography" />
<meta name="author" content="Steven Litton" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"]]>

	<meta charset="utf-8" />
	<title>Bournemouth photography, web design, photography, video, vfx, online advertising, SEO and social marketing</title>
    <?php include 'includes/base-styles.php'; ?>
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		

	 // GA CODE //
	 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22075879-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include 'includes/favicon.php'; ?>
	<?php include 'includes/fonts.php'; ?>
	
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<div id ="pull_me_button">
<img src="images/generic/corner_tab.png">
</div>

<!--Back to top location-->
  <div class="section white" id="section1">
</div>
<!--Back to top location-->

<body id="home">
	<div id="wrapper">
		

<?php include 'includes/header.php'; ?>
		<div id="featured">
				<h2 class="static_header">Photography</h2>
		
	<!--=============================
		GALLERY STARTS
		=================================-->
		 
          
         <div id="gallery">
        <ul class="column">
        <!--Repeating list item-->
       
       
               
           <li>
            <div class="photoblock">
             <!--Content--><a href="macro_photography.php"><img src="images/photography/thumbnails/macro.jpg" alt=""></a>
            <h3><a class="linked_header" href="macro_photography.php">Macro</a></h3>
            <p>Click above to view the gallery</p>
            </div>
        </li>
			
              <li>
            <div class="photoblock">
             <!--Content--><a href="wildlife_photography.php"><img src="images/photography/thumbnails/wildlife.jpg" alt=""></a>
            <h3><a class="linked_header" href="wildlife_photography.php">Wildlife</a></h3>
            <p>Click above to view the gallery</p>
            </div>
        </li>
		        
        
           <li>
            <div class="photoblock">
             <!--Content--><a href="nature_photography.php"><img src="images/photography/thumbnails/nature.jpg" alt=""></a>
            <h3><a class="linked_header" href="nature_photography.php">Nature</a></h3>
            <p>Click above to view the gallery</p>
            </div>
        </li>
        
       <!--end repeating list item-->
       <li>
            <div class="photoblock">
             <!--Content--><a href="landscape_photography.php"><img src="images/photography/thumbnails/landscape.jpg" alt=""></a>
            <h3><a class="linked_header" href="landscape_photography.php">Landscape</a></h3>
            <p>Click above to view the gallery</p>
            </div>
        </li>
        
           <li>
            <div class="photoblock">
             <!--Content--><a href="studio_photography.php"><img src="images/photography/thumbnails/studio.jpg" alt=""></a>
            <h3><a class="linked_header" href="studio_photography.php">Studio</a></h3>
            <p>Click above to view the gallery</p>
            </div>
        </li>
 
        
        <li>
            <div class="photoblock">
             <!--Content--><a href="sports_photography.php"><img src="images/photography/thumbnails/sports.jpg" alt=""></a>
            <h3><a class="linked_header" href="sports_photography.php">Sports</a></h3>
            <p>Click above to view the gallery</p>
            </div>
        </li>
        
         <li>
            <div class="photoblock">
             <!--Content--><a href="underwater_photography.php"><img src="images/photography/thumbnails/underwater.jpg" alt=""></a>
            <h3><a class="linked_header" href="underwater_photography.php">Underwater</a></h3>
            <p>Click above to view the gallery</p>
            </div>
        </li>
             
         <li>
            <div class="photoblock">
             <!--Content--><a href="misc_photography.php"><img src="images/photography/thumbnails/misc.jpg" alt=""></a>
            <h3><a class="linked_header" href="misc_photography.php">Misc</a></h3>
            <p>Click above to view the gallery</p>
            </div>
        </li>
        
</ul>
          
        </div>
              <!--=============================
		GALLERY ENDS
		=================================-->  
</div> <!-- END Featured -->
<br class="clearfix">

 <hr/>
 
 <?php include 'includes/footer.php'; ?>
 
        
	</div> <!-- END Wrapper -->
<script type="text/javascript">
 <!-- Back to top script -->
     $(function() {
                $('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    event.preventDefault();
                });
            });
		
		/*  Back to top scroll fades  */
		document.getElementById("backtotop").style.display = 'none';
			$(window).scroll(function() {
				
    if ($(this).scrollTop() == 0) {
        $("#backtotop").fadeOut(750);
    }
    else {
        $("#backtotop").fadeIn(750);
    }
});
</script>

</body>
</html>