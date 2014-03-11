		<footer>   	

          <aside class="sidebar copyright">
            <p>&copy; 2014 - Steven Litton </p>
          </aside>

           <div id="social_icons">           
             <a href="https://www.facebook.com/ungroomed" target="_blank"><i class="fa fa-facebook"></i></a>           
             <a href="https://twitter.com/#!/stevelitton" target="_blank"><i class="fa fa-twitter"></i></a>
             <a href="http://uk.linkedin.com/pub/steven-litton/24/a3b/783" target="_blank"><i class="fa fa-linkedin"></i></a>
             <a href="http://pinterest.com/stevelitton/" target="_blank"><i class="fa fa-pinterest"></i></a>
           </div>
 
    </footer>		
        
                <!--=============================
		BACK TO TOP BUTTON STARTS
		=================================-->  
         <div class="access_button">
         <div id="backtotop">
          <ul class="nav">
         <a href="#section1" class="button blue backtotop">Back to top</a>
			</div>
       
			</div>
            
    	<!--=============================
		BACK TO TOP BUTTON ENDS
		=================================-->  	
		
		<script type="text/javascript">
			$(document).ready(function() {
				    				$(".menu-open").click(function(){
    					if($("nav").hasClass("open")){
    						$("nav").removeClass("open").animate({height:40},200);
    					}
    					else{
    						$("nav").addClass("open").animate({height:308},200);
    					}
  					});
				if ($(window).width() < 500) {
								var stickyNavTop = $('nav').offset().top;  
  					var stickyNav = function(){  
					var scrollTop = $(window).scrollTop();  
			
					if (scrollTop > stickyNavTop) {   
    					$('nav').addClass('sticky');  
						} else {  
    						$('nav').removeClass('sticky');   
						}  
					};
			  
  					stickyNav();  
  
					$(window).scroll(function() {  
    					stickyNav();  
					});
  					
    			};

          $("nav > ul > li.dropdown").hover(function(){
            if ($(window).width() > 500){
              $(this).children("ul.sub-nav").slideDown();
              }},function(){
                $("ul.sub-nav").slideUp();
          });

    			     			
    		});
    			
    		
		
		function goBack()
  		{
  			window.history.back()
  		}
		</script>