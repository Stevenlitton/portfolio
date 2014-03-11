<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Steven Litton | Digital Media Portfolio – Bournemouth photographer, video producer and front end web designer. Available for freelance and collaborative work." />
<meta name="keywords" content="photography, web design, videography, motion graphics, bournemouth, dorset, digital, media" />
<meta name="author" content="Steven Litton" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"]]>

	<meta charset="utf-8" />
	<title>Bournemouth web design, photography, video, vfx, online advertising, SEO and social marketing</title>
    <?php include 'includes/base-styles.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen" />
    
        <script src="js/jquery.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({animation: "slide"});
		});
		
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

<!--Back to top location-->
  <div class="section white" id="section1">
</div>
<!--Back to top location-->

<div id ="pull_me_button">
<img src="images/generic/corner_tab.png">
</div>

<body id="home">
	<div id="wrapper">

<?php
$section = "home";
include 'includes/header.php'; ?>
				

					<div id="featured">
			
			<h2 style="color:#609b99;">Hello,</h2>
			<p>I am Steven Litton, a Front End Web Developer and Creative Director based in Bournemouth, UK. I have worked in creative industry and digital media for over 7 years. Over that time I have worked on a huge range of projects for clients big and small. </p>
			<p>Feel free to<a href="contact.php">contact me</a> for quotes on work or any collaborative ideas you may have.</p>
		
	<!--=============================
		FLEX SLIDER STARTS
		=================================-->
			<div class="flexslider">
	    <ul class="slides">
	    	<li>
	    	<a href="photography.php"><img src="images/welcome-slider/photography.jpg" /></a>
	    			<p class="flex-caption"><a href="photography.php">Photography</a></p>
	    	</li>
	    	<li>
	    		<a href="web_design.php"><img src="images/welcome-slider/web_design.jpg" /></a>
	    		<p class="flex-caption"><a href="web_design.php">Web Design</a></p>
	    	</li>
	    	<li>
	    		<a href="print.php"><img src="images/welcome-slider/print.jpg" /></a>
                <p class="flex-caption"><a href="print.php">Print</a></p> 
	    	</li>

	    
	    
	    </ul>
	  </div>
              <!--=============================
		FLEX SLIDER ENDS
		=================================-->  
</div> <!-- END Featured -->

            
			<div class="clearfix"></div>
			
           
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