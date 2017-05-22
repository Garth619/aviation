
<section id="free_consulation" class="request">
	
	<div class="inner_request">
		
		<span class="large_header">Request <br class="mobile"/>Your Free Consultation</span><!-- large_header -->
		
		<span class="fields_required">All Fields Are Required <span>*</span></span><!-- fields_required -->
		
		<div class="form_wrapper">
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
		</div><!-- form_wrapper -->
		
	</div><!-- inner_request -->
	
	
	
</section><!-- request -->


<footer>
	
	<div class="inner_footer">
		
		<div class="locations_wrapper">
		
			
			
			<div class="single_location_wrapper">
				
				<span class="large_header">Panish Shea & Boyle LLP <br class="mobile">- Strength By Your Side <sup>TM</sup></span>
				
				<div class="tablet_squares">
					
					<div class="tablet_offices">Offices</div><!-- offices -->
					
					<div class="tablet_single_square la">
						
						<span class="">LA</span>
						
						<div class="tri_wrapper">
							
							<div class="tri"></div><!-- tri -->
							
						</div><!-- tri_wrapper -->
						
					</div><!-- tablet_single_square -->
					
					<div class="tablet_single_square oc">
						
						<span class="">OC</span>
						
					</div><!-- tablet_single_square -->
					
					
				</div><!-- tablet_squares -->
			
				<div class="single_location">
					
					<div class="white_square">
						
						<span class="city_abbr">LA</span><!-- city_abbr -->
						
					</div><!-- white_square -->
					
					<span class="office">Office</span><!-- office -->
					
					<a class="address" href="" target="_blank">
						11111 Santa Monica Blvd.<br class="desktop" />
						#700<br class="desktop" />
						Los Angeles, California<br class="desktop" />
						90025
					</a>
					
					<a class="get_directions" href="" target="_blank">Get Directions</a><!-- get_directions -->
					
				</div><!-- single_location -->
				
				
				<div class="single_location">
					
					<div class="white_square">
						
						<span class="city_abbr">OC</span><!-- city_abbr -->
						
					</div><!-- white_square -->
					
					<span class="office">Office</span><!-- office -->
					
					<a class="address" href="" target="_blank">
						17500 Red Hill Ave.<br/>
						#100<br/>
						Irvine, California<br/>
						92614
					</a>
					
					<a class="get_directions" href="" target="_blank">Get Directions</a><!-- get_directions -->
					
				</div><!-- single_location -->
			
			</div><!-- single_location_wrapper -->
			
			
			
			<div class="call_us_wrapper">
				
				<div class="call_us_gradient">
					
					<div class="call_us_inner_gradient">
						
						<span class="large_header"><span class="twenty_four">24/7</span>  accessibility<br/> 
to our clients</span><!-- large_header -->

						<span class="call_us_content">Our firm's track record for prosecuting airline accident cases is unmatched. Phone us toll-free at <a href="tel:1-877-800-1700"> 1-877-800-1700</a> to set up a free consultation&nbsp;now.</span><!-- call_us_content -->
						
					</div><!-- call_us_inner_gradient -->
					
				</div><!-- call_us_gradient -->
				
			</div><!-- call_us_wrapper -->
			
		</div><!-- locations_wrapper -->
		
		
		
		<div class="latest_news_wrapper">
			
			<div class="latest_news_inner">
			
			
			<span class="large_header">Latest Firm News</span><!-- large_header -->
			
			<div class="white_line_wrapper">
				
				<div class="white_line"></div><!-- white_line -->
				
				<div class="news_square"></div><!-- news_square -->
				
			</div><!-- white_line_wrapper -->
			
			
			<div class="post_wrapper">
			
			
			<div class="single_news_post">
				
				<a href="">
					
					<span class="post_title">Civil Trial for 2006 Robinson Helicopter Accident Begins </span><!-- large_header -->
					
					<span class="news_content">Since the introduction of the R-44 more than a decade ago, Robinson Helicopter Co. was allegedly aware of the vibrations present in the main rotor mast.</span><!-- news_content -->
					
					<span class="read_more">Read More</span>
					
				</a>
				
			</div><!-- single_news_post -->
			
			
			<div class="single_news_post">
				
				<a href="">
					
					<span class="post_title">Yoon v. Boeing Don Yoon</span><!-- large_header -->
					
					<span class="news_content">A University City man whose wife, two baby daughters, and mother-in-law were killed Dec. 8, 2008, when a Marine Corps jet crashed onto their home, has sued the government and Boeing for negligence.</span><!-- news_content -->
					
					<span class="read_more">Read More</span>
					
				</a>
				
			</div><!-- single_news_post -->
			
			
			<div class="single_news_post">
				
				<a href="">
					
					<span class="post_title">Litwack v. Sierra Tucson</span><!-- large_header -->
					
					<span class="news_content">Sierra Tucson treatment center must make improvements in its care or lose its state license. The firm represents the family of a doctor who died during a stay at Sierra Tucson.</span><!-- news_content -->
					
					<span class="read_more">Read More</span>
					
				</a>
				
			</div><!-- single_news_post -->
			
			
		</div><!-- post_wrapper -->
		
		</div><!-- latest_news_inner -->
			
			
		</div><!-- latest_news_wrapper -->
		
		<div style="clear:both"></div>
		
	</div><!-- inner_footer -->
	
	
	
	<div class="lower_footer">
		
		
		<ul class="copyright">
			
			<li><span>Copyright &copy;2017</span>  Panish Shea & Boyle LLP</li>
			<li>All Rights Reserved</li>
			<li><a class="" href="">Disclaimer</a></li>
			<li><a class="" href="">Blog</a></li>
		
		</ul>
		
	
		<div class="social_wrapper">
			
			<ul>
				<li><a class="" href="">Facebook</a></li>
				<li><a class="" href="">google+</a></li>
				<li><a class="" href="">twitter</a></li>
			</ul>
			
			<img class="svg" src="<?php bloginfo('template_directory');?>/images/footer_logo_ilawyer.svg"/>
			
			
		</div><!-- social_wrapper -->
		
	</div><!-- lower_footer -->
	

	
</footer>





<?php wp_footer();?>




<script type="text/javascript">

jQuery(document).ready(function(){

let angle = 0;
  let lastTime = null;

  function Animate(time){
    //if last time is not equal to 0
    if (lastTime != null){
      angle += (time - lastTime) * 0.0013;
    }
      
    lastTime = time;



     let wave = document.querySelector('#wave_set_1');
     let paths = Array.from( document.querySelectorAll('svg#wave_set_1 path') );
     let width = window.innerWidth;




      wave.setAttribute('width', width);
     

     for (let i = 0; i < paths.length; i++) {
      //primary
      // paths[0].setAttribute('d', 'M0,250 C'+width*.33+','+(300 + Math.cos(angle) * 250)+' '+width*.75+','+(300 + Math.sin(angle) * 300)+' '+width+',250 v250 h'+(-width)+' Z');
      
      
      paths[0].setAttribute('d', 'M0,250 C'+width*.33+','+(300 + Math.cos(angle) * 250)+' '+width*.75+','+(300 + Math.sin(angle) * 300)+' '+width+',250 v250 h'+(-width)+' Z');
      
      

      //secondary
      paths[1].setAttribute('d', 'M0,350 C'+width*.33+','+(300 + Math.cos(angle -i+2) * 250)+' '+width*.75+','+(300 + Math.sin(angle-i+2) * 300)+' '+width+',350 v350 h'+(-width)+' Z');
 
     }
   

      
       requestAnimationFrame(Animate);

    }

    Animate();

}); // Document Ready

</script>


<!-- svgs gradient styles -->

<img class="svg gradient_preload" src="<?php bloginfo('template_directory');?>/images/svgs/gradientstyles.svg"/>


</body>
</html>
