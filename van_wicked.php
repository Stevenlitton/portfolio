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
		
function smartColumns() { //Create a function that calculates the smart columns

        //Reset column size to a 100% once view port has been adjusted
	$("ul.column").css({ 'width' : "100%"});

	var colWrap = $("ul.column").width(); //Get the width of row
	var colNum = Math.floor(colWrap / 200); //Find how many columns of 200px can fit per row / then round it down to a whole number
	var colFixed = Math.floor(colWrap / colNum); //Get the width of the row and divide it by the number of columns it can fit / then round it down to a whole number. This value will be the exact width of the re-adjusted column

	$("ul.column").css({ 'width' : colWrap}); //Set exact width of row in pixels instead of using % - Prevents cross-browser bugs that appear in certain view port resolutions.
	$("ul.column li").css({ 'width' : colFixed}); //Set exact width of the re-adjusted column	

}	

smartColumns();//Execute the function when page loads

$(window).resize(function () { //Each time the viewport is adjusted/resized, execute the function
	smartColumns();
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
				<h2 class="static_header">Van Wicked artwork</h2>
		<p>This is some work I did for a semi-professional wrestler who wanted some designs made up for posters, online promo and clothing</p>
		<p>Click on the thumbnails to see larger images</p>

<a class="three_thumbs" rel="prettyPhoto[vw]" href="images/design/van_wicked_1.jpg"  title="Promo artwork"><img src="images/design/van_wicked_1_tb.jpg" alt="Promo artwork" /></a>
<a class="three_thumbs" rel="prettyPhoto[vw]" href="images/design/van_wicked_2.jpg"  title="Promo artwork"><img src="images/design/van_wicked_2_tb.jpg" alt="Promo artwork" /></a>
<a class="three_thumbs" rel="prettyPhoto[vw]" href="images/design/van_wicked_3.jpg" title="Clothing artwork"><img src="images/design/van_wicked_3_tb.jpg" alt="Clothing artwork" /></a>

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