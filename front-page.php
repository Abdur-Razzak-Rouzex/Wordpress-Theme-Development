<?php get_header() ?>

    <!-- ***********************************************************       Header Section Ends       *************************************************** -->


    <!-- ***********************************************************       Main Section Starts       *************************************************** -->
    <main>
        <!-- **************************************   Section 1: Purchase Cards Starts: Latest Posts  ******************************** -->
        <section class="section-1 container-fluid p-0">
            <div class="purchase text-center">
                <h1>Our Latest Posts</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, ratione?
                </p>
                <div class="cards">
                    <div class="d-flex flex-row justify-content-center flex-wrap">
                        <?php
                        $args = array(
                            'type' => 'post',
                            'posts_per_page' => 3,
                            'category_in' => array('politics', 'motivation', 'technology'),
                        );
                        $last_post = new WP_Query($args);
                        if ($last_post->have_posts()):
                            while ($last_post->have_posts()):
                                $last_post->the_post();
                                ?>
                                <div class="card">
                                    <div class="card-img-top">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                    <div class="card-body">
                                        <div class="title">
                                            <h5 class="card-title"><?php the_title() ?></h5>
                                        </div>
                                        <?php
                                        if (!has_excerpt()):
                                            echo 'No excerpt to show';
                                        else:
                                            the_excerpt();
                                        endif;
                                        ?>
                                    </div>
                                    <a href="<?php the_permalink(); ?>"
                                       class="btn btn-outline-info">Read
                                        More..
                                    </a>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****************************    Section 1: Purchase Cards Ends: Latest Posts       ***************************** -->

        <!-- *****************************     Section 2: Features Starts         *********************** -->
        <section class="section-2 container-fluid p-0 pb-2">
            <div class="cover">
                <div class="overlay"></div>
                <div class="content text-center">
                    <h1>Some Features that made us Unique</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, eligendi.
                    </p>
                </div>
            </div>
            <div class="container-fluid text-center">
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                    <div class="rect">
                        <h1>590</h1>
                        <p>Happy Clients</p>
                    </div>
                    <div class="rect">
                        <h1>50</h1>
                        <p>Courses</p>
                    </div>
                    <div class="rect">
                        <h1>56000</h1>
                        <p>Questions</p>
                    </div>
                    <div class="rect">
                        <h1>1200</h1>
                        <p>Tests</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ************************************     Section 2: Features Ends       ****************************** -->

        <!-- ************************************     Section 3: Review             ****************************** -->
        <section class="section-3 p-5">
            <div class="container text-center">
                <h1 class="text-dark">What our readers say about us</h1>
                <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="team row">

                <div class="mobile col-md-4 col-sm-12 text-center mb-2">
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/UI-face-1.jpg') ?>"
                                 alt="clients" class="img-fluid border-radius p-4">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Rouzex</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dignissimos fuga
                                maiores placeat suscipit voluptatibus.
                            </p>
                            <a href="#" class="text-secondary text-decoration-none">See Profile</a>
                            <p class="text-black-50">CEO at Godje</p>
                        </div>
                    </div>
                </div>

                <div class="mobile col-md-4 col-sm-12 text-center mb-2">
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/UI-face-2.jpg') ?>"
                                 alt="clients" class="img-fluid border-radius p-4">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Sabbir</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dignissimos fuga
                                maiores placeat suscipit voluptatibus.
                            </p>
                            <a href="#" class="text-secondary text-decoration-none">See Profile</a>
                            <p class="text-black-50">Sr Software Eng.</p>
                        </div>
                    </div>
                </div>

                <div class="mobile col-md-4 col-sm-12 text-center mb-2">
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/UI-face-4.jpg') ?>"
                                 alt="clients" class="img-fluid border-radius p-4">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Farhan</h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dignissimos fuga
                                maiores placeat suscipit voluptatibus.
                            </p>
                            <a href="#" class="text-secondary text-decoration-none">See Profile</a>
                            <p class="text-black-50">Service Holder</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ************************************     Section 3: Review Ends       ****************************** -->
    </main>
    <!-- ******************************************************       Main Section Ends       *************************************************** -->


<?php get_footer(); ?>