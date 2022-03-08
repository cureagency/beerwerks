	<footer id="colophon" class="site-footer" style="padding-bottom: 0;">
		<div class="site-info cure-2021-footer">
			<div class="cure-2021-footer-col" style="margin-bottom: 50px;">
				<a target="_blank" href="https://beerwerkstrail.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/beerwerks-logo@2x.png" /></a>
			</div>
			<div class="cure-2021-footer-col" style="margin-bottom: 50px;">
				<p class="footer-header">Explore</p>
					<div class="cure-2021-footer-menu">
						<div class="cure-2021-footer-menu-left">
							<a href="<?php echo get_home_url(); ?>/breweries">Breweries</a><br>
							<a href="<?php echo get_home_url(); ?>/passport">Passport</a><br>
							<a href="<?php echo get_home_url(); ?>/things-to-do">Things To Do</a><br>
							<a href="<?php echo get_home_url(); ?>/contact-us">Contact Us</a>
						</div>
						<div class="cure-2021-footer-menu-right">
							<a href="<?php echo get_home_url(); ?>/places-to-stay">Places To Stay</a><br>
							<a href="<?php echo get_home_url(); ?>/events">Events</a><br>
							<a href="<?php echo get_home_url(); ?>/blog">Blog</a><br>
						</div>
					</div>
			</div>
			<div class="cure-2021-footer-col" style="margin-bottom: 50px;">
					<p class="footer-header">Brought To You By</p>
					<p class="footer-paragraph" style="margin-bottom: 50px;">Staunton, Augusta, and Waynesboro Tourism<br>
					Harrisonburg Tourism<br>
					Lexington & The Rockbridge Area Tourism<br>
					Rockingham County Tourism</p>
					<p><a target="_blank" href="https://www.instagram.com/shenandoahbeerwerks/"><span class="social-button"><i class="fab fa-instagram"></i></span></a> <a target="_blank" href="https://www.facebook.com/ShenandoahBeerwerks/"><span class="social-button"><i class="fab fa-facebook-f"></i></span></a></p>
			</div>
			<div class="cure-2021-footer-col">
				<a target="_blank" href="https://www.vatc.org/"><img class="footer-image" src="<?php echo get_template_directory_uri(); ?>/images/vifl-logo.png" style="max-width: 184px;"/></a><br>
				<p class="footer-gentle">Please Drink Responsibly</p>
			</div>
		</div>

			<div class="site-info cure-2021-footer" style="padding-top: 10px; border-top: 1px solid gray;">
				<div class="cure-2021-footer-col">
					<p>©2022. Shenandoah Beerwerks Trail | All Rights Reserved.</p>
				</div>

				<div class="cure-2021-footer-col">	 
					<p style="text-align: right;"><a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a></p>
				</div>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-77032528-1', 'auto');
	  ga('send', 'pageview');
	
	</script>

<script>
	jQuery(document).ready(function ($) {
		$('a').click(function(){
		    $('html, body').animate({
		        scrollTop: $( $(this).attr('href') ).offset().top
		    }, 500);
		    return false;
		});
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

</body>
</html>