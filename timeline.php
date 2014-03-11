<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="CV | Digital Media Portfolio – Bournemouth photographer, video producer and front end web designer. Available for freelance and collaborative work." />
<meta name="keywords" content="aucb, imagine publishing, science museum, new college, kingsdown school" />
<meta name="author" content="Steven Litton" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"]]>

	<meta charset="utf-8" />
	<title>Bournemouth web design, photography, video, vfx, online advertising, SEO and social marketing</title>
    
    <?php include 'includes/base-styles.php'; ?>
        <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
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
 </script>
 
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
			<h2 class="static_header">Timeline</h2>
			<p>Click on the images to read more</p>
			<ul class="timeline">
					
					<li class="event">
						<input type="radio" name="tl-group" checked/>
						<label></label>
						<div class="thumb user-6"><span>2013 - Now</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>2013 - Now</h3>
									<p>I left digital publishing to work as a Front End Developer for Folk Digital. I now build bespoke websites and custom Magento skins for online luxury fashion brands.</p>
								</div>
							</div>
						</div>
					</li>
					
					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-5"><span>2007 - 2013</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>2007 - 2013</h3>
									<p>I interviewed for a job with Imagine Publishing in my 3rd year of University. I was offered a job as a Multimedia Editor in their growing Digital Department and have since worked my way up to Digital Projects Coordinator. I also regularly write articles for the photography and technology titles.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-4"><span>2005 - 2007</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>2005 - 2007</h3>
									<p>In my holidays from university I worked as a tour guide at the Science Museum in Wroughton. Sandstorm Productions shared the same site as the museum and Tom kindly gave me the chance to do some video and interface work for them.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-3"><span>2004 - 2007</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>2004 - 2007</h3>
									<p>I decided to apply for Digital Media courses and was accepted to all 5 of my choices. After going to the open days I decided to do the Bournemouth Arts Institute course in Graphic Design and Interactive Media.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-2"><span>2000 - 2003</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>2000 - 2003</h3>
									<p>I attended New College Swindon for 2 years whilst studying an Art A Level and a GNVQ in Business / ICT. I went on to start a 2 year HND in Business / ICT, I passed the first year HNC with a merit and decided to look for a University course.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-1"><span>1995 - 2000</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>1995 - 2000</h3>
									<p>I attended Kingsdown School in my home town of Swindon and came away with 10 GCSE's all A - C. I left school with a passion for Art, Graphic Design and Computing.</p>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</section>

	</div>

 <br class="clearfix">
<hr> 
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