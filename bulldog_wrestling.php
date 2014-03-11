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
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:700,400,400italic,700italic' rel='stylesheet' type='text/css'>
	
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
        <button id="ios-arrow-left" onclick="goBack()"><p>Back</p></button>
				<h2 class="static_header">Bulldog Pro Wrestling</h2>
		<p>This was some logo work I did for a wrestling promotions company. The brief was a contemporary logo with the tagline 'Best of British', the name couldn't be abbreviated and they wanted a splash of colour in there. I came up with a run of designs for them and then we came up with a final image from there.</p>
		<p>Click on the thumbnails to see larger images</p>

<a class="three_thumbs" href="images/design/bulldog_pro_1.jpg" rel="prettyPhoto[]" title="Initial idea"><img src="images/design/bulldog_pro_1_tb.jpg" alt="Initial idea" /></a>
<a class="three_thumbs" href="images/design/bulldog_pro_2.jpg" rel="prettyPhoto[]" title="Initial idea"><img src="images/design/bulldog_pro_2_tb.jpg" alt="Initial idea" /></a>
<a class="three_thumbs" href="images/design/bulldog_pro_3.jpg" rel="prettyPhoto[]" title="Final design"><img src="images/design/bulldog_pro_3_tb.jpg" alt="Final design" /></a>

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

  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>

</body>
</html>