<?php
$back_totop_on =induxe_get_opt('back_totop_on', true);
$footer_layout_custom =induxe_get_opt('footer_layout_custom');
$custom_footer =induxe_get_page_opt('custom_footer', 'false');
$footer_layout_page =induxe_get_page_opt('footer_layout');
$footer_layout_custom_page =induxe_get_page_opt('footer_layout_custom');
if($custom_footer && $footer_layout_page == 'custom' && !empty($footer_layout_custom_page) ) {
    $footer_layout_custom = $footer_layout_custom_page;
}
?>
<footer id="colophon" class="site-footer-custom">
    <?php if(!empty($footer_layout_custom)) :  ?>
        <div class="footer-custom-inner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php induxe_content_by_slug($footer_layout_custom, 'footer'); ?>
                    </div>
                </div>
                <?php if (isset($back_totop_on) && $back_totop_on) : ?>
                    <a href="#" class="ct-scroll-top"><span>Back To Top</span> <i class="far fac-arrow-up"></i></a>
                    <a href="#" class="ct-scroll-top-mobile"><i class="far fac-arrow-up"></i></a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</footer>