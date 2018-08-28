<?php

?>
</div><!-- #content -->

	<?php 

		do_action( 'metrostore_footer_before' );

		/**
		 * @see  metrostore_footer_widget_area() - 10
		 */
		do_action( 'metrostore_footer_widget' ); 

		
			do_action( 'metrostore_sub_footer_before' );

				/**
				 * @see  metrostore_footer_credit() - 10
				 * @see  metrostore_social_media() - 15
				 */
				do_action( 'metrostore_sub_footer' ); 

			do_action( 'metrostore_sub_footer_after' );

	
	 	do_action( 'metrostore_footer_after' ); 
	?>

</div><!-- #page -->

<?php wp_footer(); ?>
<a href="#" class="scrollup">
	<i class="fa fa-angle-up" aria-hidden="true"></i>
</a>

</body>
</html>
