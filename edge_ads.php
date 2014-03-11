<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="description" content="Web Design | Digital Media Portfolio – Bournemouth photographer, video producer and front end web designer. Available for freelance and collaborative work." />
<meta name="keywords" content="web design bournemouth, website design bournemouth, dorset, seo, advertising " />
<meta name="author" content="Steven Litton" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"]]>

	<meta charset="utf-8" />
	<title>Bournemouth web design, blog design, photography, video, vfx, online advertising, SEO and social marketing</title>
    <?php include 'includes/base-styles.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen" />
    
        <script src="js/jquery.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider();
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
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:700,400,400italic,700italic' rel='stylesheet' type='text/css'>
	
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

<?php include 'includes/header.php'; ?>
				<div id="featured">
	    <button id="ios-arrow-left" onclick="goBack()"><p>Back</p></button>

		<h2 class="static_header">Adobe Edge Advertisements</h2>
		<p>With a huge percentage of website traffic coming from mobile devices, web advertising has to move away from Adobe Flash. The simple solution
		to this is a static placeholder image, but this looks dull and lifeless. We decided to create some new interactive ads in the new version of 
		Adobe Edge. Adobe Edge uses the latest HTML5 and CSS3 technologies along with Javascript to create impressive animation that works on all devices.</p>
		<p>These ads were created for Imagine Publishing's magazine brands.</p>
		<p>The ads below should loads cross browser and work fully on mobile devices excluding hover events.</p>
           <p>Click on the images below to view the ads in a new tab.</p>
           
           <a href="websites/EDGE_ads/AAS_ad_3/publish/web/aas_mpu.html" target="_blank"><img style="margin: 10px 20px 10px 0px" src="images/websites/ass_mpu.jpg"/></a>
           <a href="websites/EDGE_ads/greatdigitalmags/publish/web/gdm_mpu.html" target="_blank"><img style="margin: 10px 0px 10px 0px" src="images/websites/gdm_mpu.jpg"/></a>
           <a href="websites/EDGE_ads/pacman_leaderboard/publish/web/pacman_leaderboard.html" target="_blank"><img style="margin: 10px 0px 0 0" src="images/websites/pacman_leaderboard.jpg"/></a>
           <a href="websites/EDGE_ads/Retro_MPU2/publish/web/Retro_MPU.html" target="_blank"><img style="margin: 20px 10px 10px 0px" src="images/websites/rg_mpu.jpg"/></a> 
            
            
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