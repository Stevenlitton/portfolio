<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="description" content="Design | Digital Media Portfolio – Bournemouth photographer, video producer and front end web designer. Available for freelance and collaborative work." />
<meta name="keywords" content="bournemouth designer, dorset, photography" />
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
				<h2 class="static_header">Design</h2>
		
	<!--=============================
		GALLERY STARTS
		=================================-->
		 
          
         <div id="gallery">
        <ul class="column">
        <!--Repeating list item-->
       
			
              <li>
            <div class="photoblock">
            <a href="van_wicked.php"><img src="images/design/van_vicked.jpg" alt=""></a>
            <h3><a class="linked_header" href="van_wicked.php">Van Wicked Wrestling</a></h3>
            <p>Click to see more</p>
            </div>
        </li>
        
       <li>
            <div class="photoblock">
             <a href="med_posters.php"><img src="images/design/med_posters.jpg" alt=""></a>
            <h3><a class="linked_header" href="med_posters.php">Petic Medical Posters</a></h3>
            <p>Click see more</p>
            </div>
        </li>
        
            <li>
            <div class="photoblock">
             <a href="bulldog_wrestling.php"><img src="images/design/bulldog_pro_wrestling.jpg" alt=""></a>
            <h3><a class="linked_header" href="bulldog_wrestling.php">Bulldog Pro Wrestling</a></h3>
            <p>Click see more</p>
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