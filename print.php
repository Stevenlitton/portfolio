<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="description" content="Print | Digital Media Portfolio – Bournemouth photographer, video producer and front end web designer. Available for freelance and collaborative work." />
<meta name="keywords" content="web design, motion graphics, seo, photography, vfx, digital imaging, social networking" />
<meta name="author" content="Steven Litton" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"]]>

	<meta charset="utf-8" />
	<title>Bournemouth web design, photography, video, vfx, online advertising, SEO and social marketing</title>
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
			    <button id="ios-arrow-left" onclick="goBack()"><p>Back</p></button>
				<h2 class="static_header">Print</h2>
		
	<!--=============================
		GALLERY STARTS
		=================================-->
		 
          
         <div id="gallery">
        <ul class="column">
        <!--Repeating list item-->
       
        <li>
            <div class="printblock">   
            <a href="print/spe/using_zdbox.pdf" target="_blank"><img src="images/print/spe.jpg"/></a>
			<h3><a class="linked_header" href="print/spe/using_zdbox.pdf" target="_blank">Smartphone Essentials</a></h3>
            <p>Two page feature on using ZDBox to backup and Android phone.</p>
            </div>
        </li>
       
       
        <li>
            <div class="printblock">   
            <a href="print/wpgg/Set_User_Priviliges.pdf" target="_blank"><img src="images/print/wpgg.jpg"/></a>
			<h3><a class="linked_header" href="print/wpgg/Set_User_Priviliges.pdf" target="_blank">WordPress Genius Guide</a></h3>
            <p>Two page spread on setting user privileges in WordPress.</p>
            </div>
        </li>
       <!--end repeating list item-->

        
 
        <li>
            <div class="printblock">
             <!--Content--><a href="print/dcb/compact_review.pdf" target="_blank"><img src="images/print/dcb.jpg" alt=""></a>
            <h3><a class="linked_header" href="print/dcb/compact_review.pdf" target="_blank">Digital Camera Essentials</a></h3>
            <p>Regular two page compact camera reviews.</p>
            </div>
        </li>
        
               <li>
            <div class="printblock">
             <!--Content--><a href="print/wfb/FAQ_Guide.pdf" target="_blank"><img src="images/print/wfb.jpg" alt=""></a>
            <h3><a class="linked_header" href="print/wfb/FAQ_Guide.pdf" target="_blank">WordPress for Beginners</a></h3>
            <p>Ten page FAQ section for troubleshooting WordPress.</p>
            </div>
        </li>
        
        
          <li>
            <div class="printblock">
             <!--Content--><a href="print/pfb/using_picasa.pdf" target="_blank"><img src="images/print/pfb.jpg" alt=""></a>
            <h3><a class="linked_header" href="print/pfb/using_picasa.pdf" target="_blank"">Photography for Beginners</a></h3>
            <p>Two page feature on how to use Google Picasa.</p>
            </div>
        </li>
        
               <li>
            <div class="printblock">
             <!--Content--><a href="print/bgtwp/Managing_Plugins.pdf" target="_blank"><img src="images/print/bgtwp.jpg" alt=""></a>
            <h3><a class="linked_header" href="print/bgtwp/Managing_Plugins.pdf" target="_blank">Beginner's Guide to WordPress</a></h3>
            <p>Two page article on managing plugins in WordPress.</p>
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