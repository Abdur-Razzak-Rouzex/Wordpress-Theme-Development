<?php get_header() ?>

    <!-- ***********************************************************       Main Section Starts       *************************************************** -->
    <main class="container pb-5">
        <!--    ========================================================        Featured Posts  Area        ======================================================-->
        <div class="row mb-5 mt-4 justify-content-around">
            <div class="col-md-5">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.
                        </p>
                        <a href="#" class="text-decoration-none stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block p-2">
                        <svg width="200" height="250"
                             role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                             focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"/>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="stretched-link text-decoration-none">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block p-2">
                        <svg width="200" height="250"
                             role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                             focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"/>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!--    ========================================================        Blog Posts Area          ======================================================-->
        <div class="row">
            <div class="col-md-8">
                <?php
                if (have_posts()):
                    while (have_posts()): the_post();
                        get_template_part('content', get_post_format());
                    endwhile;
                else:?>
                    <p><?php __('No Posts Found') ?></p>
                <?php
                endif;
                posts_nav_link();
                ?>
            </div>
            <!--        ****************************            Sidebar         *****************************************-->

<?php get_footer() ?>