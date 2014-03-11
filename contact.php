<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="description" content="Contact Me | Digital Media Portfolio" />
<meta name="keywords" content="work, freelance, collaborations, job opportunities" />
<meta name="author" content="Steven Litton" />

   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"]]>
   <?php include 'includes/favicon.php'; ?>
   <?php include 'includes/fonts.php'; ?>

	<meta charset="utf-8" />
	<title>Contact Me | Steven Litton - Digital Media Portfolio | Bournemouth web design, photography, video, vfx and social marketing</title>
    
    <?php include 'includes/base-styles.php'; ?>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">

    function initialize() {

    var latlng = new google.maps.LatLng(50.722357,-1.889241);

    var myOptions = {

      zoom: 15,

      center: latlng,

      mapTypeId: google.maps.MapTypeId.ROADMAP

    };

    var map = new google.maps.Map(document.getElementById("map_canvas"),

        myOptions);

    }

    </script>

 

 </head>

 <body onload="initialize()">


  <script type="text/javascript" src="http://www.stevenlitton.com/contact-files/contact-form.js"></script>
	<script type="text/javascript">
		
		 // Responsive drop down
		
	 
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
		        
        
<?php
$section = "contact";
include 'includes/header.php'; ?>

            <div id="featured">
          <div id="contact-info" class="tablet-hide">
          	<h2 class="static_header">Have any questions?</h2>
          	<h3>Get in Contact</h3>
          	<p>I regularly work on freelance projects and am more than happy to give you a free quote on any work you need creative, usability or technical help with.</p>
          	
          	<ul>
          	<li>Photography, grading and retouching</li>
          	<li>Video capture and editing</li>
          	<li>Motion graphics and post production</li>
          	<li>Web Design and Front End Development</li>
          	<li>CMS or Blog builds</li>
          	</ul>
          	<p class="large-tablet-hide">I work in many areas of digital but there obviously limitations to my knowledge. But it never hurts to ask me any questions and I can always refer you to someone that can help.</p>
          </div>
         <?php
$contact_form = 1; // set desired form number.
$contact_form_path = '/var/www/stevenlitton.com/contact-files/'; // set path to /contact-files/ with slash on end.
require $contact_form_path . 'contact-form-run.php';
?>
  <h3 class="static_header map-text">Where am I?</h3>
    <div class="map">
     <div id="map_canvas"></div>  
	</div>
          
            	</div>
  
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