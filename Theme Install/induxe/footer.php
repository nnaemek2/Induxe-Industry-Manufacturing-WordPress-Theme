<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 *
 * @package Induxe
 */
$back_totop_on =induxe_get_opt('back_totop_on', true); 
$footer_style =induxe_get_opt( 'footer_style', 'style1' );
$custom_footer =induxe_get_page_opt('custom_footer', false); 
$footer_style_page =induxe_get_page_opt('footer_style', 'themeoption'); 
if($custom_footer && isset($footer_style_page) && $footer_style_page != 'themeoption' ) {
    $footer_style = $footer_style_page;
}
?>

		</div><!-- #content inner -->
	</div><!-- #content -->

	<?php induxe_footer(); ?>
	
	<?php if (isset($back_totop_on) && $back_totop_on && $footer_style == 'style1') : ?>
        <a href="#" class="ct-scroll-top"><i class="far fac-arrow-up"></i></a>
    <?php endif; ?>
    
	</div><!-- #page -->
	
	<?php induxe_popup_search(); ?>

	<?php induxe_hidden_sidebar(); ?>

	<?php wp_footer(); ?>

	<?php echo induxe_get_opt( 'site_footer_code', '' ); ?>
	
	</body>
</html>
