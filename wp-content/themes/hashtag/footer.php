			<!-- footer -->
			<?php the_field('widgets'); ?>
			<footer  role="contentinfo">
<div class="container">
		<div class="row">	
		<div class="col-sm-5 footer-contact">
		<img src="<?php echo get_template_directory_uri(); ?>/img/hashtag-logo-footer.png" alt="Hashtag Fresno Logo" >
		<?php echo do_shortcode ("[content_block id=82]")?></div>
	<div class="col-sm-7"></div>	
			</div>
			
				<!-- copyright -->
				<p class="copyright">
				<img src="<?php echo get_template_directory_uri(); ?>/img/bitwise-logo.png" alt="Bitwise Industries Fresno" >
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Website Design by', 'html5blank'); ?>
					<a href="//shift3tech.com" title="Shift3 Technologies, Fresno" target="_blank">Shift3 Tech</a> .
				</p>
				<!-- /copyright -->
</div>
			</footer>
			<!-- /footer -->



		<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($){

$( "h3" ).wrapInner( "<span></span>" );

});
</script>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
