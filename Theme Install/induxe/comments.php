<?php
/**
 * The template for displaying comments.
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @package Induxe
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
$post_comments_form_on =induxe_get_opt( 'post_comments_form_on', true );

if($post_comments_form_on) : ?>

    <div id="comments" class="comments-area">

        <?php
        // You can start editing here -- including this comment!
        if ( have_comments() ) : ?>
            <div class="comment-list-wrap">
                <h2 class="comments-title">
                    <?php
                    $comment_count = get_comments_number();
                    if ( 1 === intval($comment_count) ) {
                        echo esc_html__( '1 Comment', 'induxe' );
                    } else {
                        echo esc_attr( $comment_count ).' '.esc_html__('Comments', 'induxe');
                    }
                    ?>
                </h2><!-- .comments-title -->

                <?php the_comments_navigation(); ?>

                <ul class="comment-list">
                    <?php
                        wp_list_comments( array(
                            'style'      => 'ul',
                            'short_ping' => true,
                            'callback'   => 'induxe_comment_list'
                        ) );
                    ?>
                </ul><!-- .comment-list -->

                <?php the_comments_navigation(); ?>
            </div>
            <?php if ( ! comments_open() ) : ?>
                <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'induxe' ); ?></p>
            <?php
            endif;

        endif; // Check for have_comments().

    $args = array(
            'id_form'           => 'commentform',
            'id_submit'         => 'submit',
            'title_reply'       => esc_attr__( 'Leave A Reply', 'induxe'),
            'title_reply_to'    => esc_attr__( 'Leave A Reply To ', 'induxe') . '%s',
            'cancel_reply_link' => esc_attr__( 'Cancel Reply', 'induxe'),
            'label_submit'      => esc_attr__( 'Submit', 'induxe'),
            'comment_notes_before' => '',
            'fields' => apply_filters( 'comment_form_default_fields', array(

                    'author' =>
                    '<div class="row"><div class="comment-field comment-form-author col-xl-4 col-lg-4 col-md-12 col-sm-12">'.
                    '<i class="far fac-user"></i><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="30" placeholder="'.esc_attr__('Type your name....', 'induxe').'"/></div>',

                    'email' =>
                    '<div class="comment-field comment-form-email col-xl-4 col-lg-4 col-md-12 col-sm-12">'.
                    '<i class="far fac-envelope"></i><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30" placeholder="'.esc_attr__('Type your email....', 'induxe').'"/></div>',

                    'website' =>
                    '<div class="comment-field comment-form-website col-xl-4 col-lg-4 col-md-12 col-sm-12">'.
                    '<i class="far fac-globe"></i><input id="website" name="website" type="text" value="" size="30" placeholder="'.esc_attr__('Type your website....', 'induxe').'"/></div></div>',
            )
            ),
            'comment_field' =>  '<div class="comment-field comment-form-comment"><i class="far fac-pencil"></i><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.esc_attr__('Type your comments....', 'induxe').'" aria-required="true">' .
            '</textarea></div>',
    );
    comment_form($args);
    ?>

    </div><!-- #comments -->

<?php endif; ?>