</div><!-- end main-container -->
</div><!-- end page-area -->
<?php if ( is_active_sidebar( 'envo-online-store-footer-area' ) ) { ?>  				
	<div id="content-footer-section" class="container-fluid clearfix">
		<div class="container">
			<?php dynamic_sidebar( 'envo-online-store-footer-area' ); ?>
		</div>	
	</div>		
<?php } ?>
<?php do_action( 'envo_online_store_before_footer' ); ?> 
<footer id="colophon" class="footer-credits container-fluid">
	<div class="container">
		<?php do_action( 'envo_online_store_copyright_footer' ); ?> 
	</div>	
</footer>
</div><!-- end page-wrap -->
<?php do_action( 'envo_online_store_after_footer' ); ?>
<?php wp_footer(); ?>
</body>
</html>
