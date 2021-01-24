<article class="blog-post pb-4 mb-4 border-bottom">
    <h2 class="blog-post-title">
        <?php if (is_single()): ?>
            <?php the_title() ?>
        <?php else: ?>
            <a href="<?php the_permalink(); ?>"> <?php the_title() ?> </a>
        <?php endif; ?>
    </h2>
    <p class="blog-post-meta"><?php the_time('F j, Y'); ?> at <?php the_time('g: i a'); ?></p>
    <p>Posted By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a></p>
    <?php if (has_post_thumbnail()): ?>
        <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <?php if (is_single()): ?>
        <p><?php the_content(); ?></p>
    <?php else: ?>
        <p><?php the_excerpt(); ?></p>
    <?php endif; ?>
</article><!-- /.blog-post -->


<!--*******************     comment Section     **************************-->
<?php if (is_single()): ?>
    <?php if (comments_open()):
        comments_template();
    endif;
endif; ?>



