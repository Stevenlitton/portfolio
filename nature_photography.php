<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="description" content="Nature Photography | Digital Media Portfolio – Bournemouth photographer, video producer and front end web designer. Available for freelance and collaborative work." />
<meta name="keywords" content="silhouette, light painting, long exposure" />
<meta name="author" content="Steven Litton" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"]]>

	<meta charset="utf-8" />
	<title>Bournemouth photographer, web design, photography, video, vfx, online advertising, SEO and social marketing</title>
    <?php include 'includes/base-styles.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/elastislide.css" media="screen" />
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.elastislide.js"></script>
        <script src="js/gallery.js"></script>
		<script src="js/jquery.tmpl.min.js"></script>
		
		<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
		
		
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
      <button id="ios-arrow-left" class="left" onclick="goBack()"><p>Back</p></button>
				<h3 class="static_header">Nature Photography</h3>
		
	
					<div id="featured">

		<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
									<li><a href="#"><img src="images/photography/nature_gallery/thumbs/nature_1.jpg" data-large="images/photography/nature_gallery/nature_1.jpg" alt="nature photography 1" data-description="Dandelion" /></a></li>
									<li><a href="#"><img src="images/photography/nature_gallery/thumbs/nature_2.jpg" data-large="images/photography/nature_gallery/nature_2.jpg" alt="nature photography 2" data-description="Plant Macro" /></a></li>
									<li><a href="#"><img src="images/photography/nature_gallery/thumbs/nature_3.jpg" data-large="images/photography/nature_gallery/nature_3.jpg" alt="nature photography 3" data-description="The Moon" /></a></li>
									<li><a href="#"><img src="images/photography/nature_gallery/thumbs/nature_4.jpg" data-large="images/photography/nature_gallery/nature_4.jpg" alt="nature photography 4" data-description="Wagon wheel" /></a></li>
									<li><a href="#"><img src="images/photography/misc_gallery/thumbs/other_1.jpg" data-large="images/photography/misc_gallery/other_1.jpg" alt="image01" data-description="New Forest, Hampshire" /></a></li>						
								
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
		
		
		
		
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