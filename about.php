<!DOCTYPE html>
<html>
<head>
	   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"]]>
	<meta name="description" content="About Me | Digital Media Portfolio – Bournemouth photographer, video producer and front end web designer. Available for freelance and collaborative work. " />
<meta name="keywords" content="bournemouth, dorset, photography, web design, videography, motion graphics, digital, media," />
<meta name="author" content="Steven Litton" />
	<title>Bournemouth web design, photography, video, vfx, online advertising, SEO and social marketing</title>	
    
    <?php include 'includes/base-styles.php'; ?>
        <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	
	<script type="text/javascript">
		
		 // Responsive drop down
		
		
		//GA CODE//
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


	<div id="wrapper">

<?php
$section = "about";
 include 'includes/header.php'; ?>
				

			<div id="latest">
					<h2 class="static_header">About Me</h2>
			
					<img src="images/generic/bio_pic.jpg" class="colour-effect text_image bio_pic">

					<p class="about-me-text">I am a Bournemouth Arts Institute Graphic Design / Interactive Media BA (Hons) graduate currently working at Folk Digital. I love shooting photo and video and bringing it all together in responsive websites.</p>

<p>Feel free to drop me an email with any questions, work, or collaborative ideas you may have.</p>
			</div> <!-- END Latest -->
			<div class="clearfix"></div>
            <div id="featured">
             <h2 class="static_header">My work studio</h2>

        <img id="studio-image" class="colour-effect" style="margin-bottom:10px;" src="images/studio/studio_image_web.jpg">
    
       			<aside class="sidebar quicklinks">	
					<div class="quick-links">
						<h2 class="static_header">Quick Links</a></h2>
						<ul>
	                    	<p><li><a href="cv.php">CV</a></li>
							<li><a href="contact.php">Contact</a></li></p>
					
						</ul>	
					</div>
					<div class="portfolio">
	                    <h2 class="static_header">Portfolio</h2>
						<ul>
							<p><li><a href="photography.php">Photography</a></li>
							<li><a href="web_design.php">Web Design</a></li>
							<li><a href="video.php">Showreel</a></li></p>
						</ul>
					</div> 
				</aside>	
    
      <h2 class="static_header">What I do</h2>
      
    <p>I currently freelance making -</p> 

    <ul id="quals">
    	<li><p>Responsive Websites</p></li>
		<li><p>Responsive Blog Builds</p></li> 
		<li><p>Interactive Online Advertisments</p></li>
		<li><p>Social Optimisation</p></li>
               
</ul>
    
    <ul id="quals">	
		<li><p>Event Photography</p></li>
        <li><p>Event Videography</p></li>
        <li><p>Video Editing</p></li>
        <li><p>Motion Graphics and VFX</p></li>
		
		
</ul>
     
  
     
     <div class="clearfix"></div>
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