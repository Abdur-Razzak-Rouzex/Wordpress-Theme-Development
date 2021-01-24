<?php get_header() ?>

    <!-- ***********************************************************       Main Section Starts       *************************************************** -->
    <main class="container pb-5">
        <!--    ========================================================        Blog Posts Area          ======================================================-->
        <div class="row">
            <div class="col-md-8">
                <?php
                if (have_posts()):
                    while (have_posts()): the_post(); ?>
                        <article class="blog-post pb-4 mb-4">
                            <h2 class="blog-post-title">
                                <?php the_title() ?>
                            </h2>
                            <p><?php the_content(); ?></p>
                        </article>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
            <!--        ****************************            Sidebar         *****************************************-->

    <!-- ******************************************************       Main Section Ends       *************************************************** -->

<?php get_footer() ?>