<?php
if (have_comments()) : ?>
    <ol class="post-comments">
        <?php
        wp_list_comments(array(
            'style' => 'ol',
            'short_ping' => true,
        ));
        ?>
    </ol>
<?php endif;

if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
    wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
}
?>

<?php
comment_form();
?>

