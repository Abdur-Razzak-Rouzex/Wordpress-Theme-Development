<?php if (!is_front_page()): ?>
    <!--********************************************************        sidebar                     ***********************-->
    <div class="col-md-4 pl-5">
    <?php
    if (is_active_sidebar('sidebar')):
        dynamic_sidebar('sidebar');
    endif;
    ?>
</div>
</div><!-- /.row -->
<?php endif ?>

</main><!-- /.container -->

<!-- ******************************************************       Main Section Ends       *************************************************** -->


<!-- *******************************************************       Footer Section Starts       *************************************************** -->
<footer>
    <div class="container-fluid p-0">
        <div class="row text-left">
            <div class="col-md-5 col-sm-12">
                <h4 class="text-light">About Us</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, sunt?</p>
                <p class="pt-4 text-muted">
                    &copy;<?php echo date('Y') ?> - <?php bloginfo('name'); ?> All rights reserved | This template is
                    made by
                    <span>SOFT BD Ltd</span>
                </p>
            </div>

            <div class="col-md-5 col-sm-12 pb-2">
                <h4 class="text-light">Newsletter</h4>
                <p class="text-muted">Stay Updated</p>
                <form action="" class="form-inline">
                    <div class="col pl-0">
                        <div class="input-group pr-5">
                            <input type="text" class="form-control bg-dark text-white"
                                   id="inlineFormInputGroupUsername2" placeholder="Email">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-2 col-sm-12">
                <h4 class="text-light">Follow Us</h4>
                <p class="text-muted">Let us be social</p>
                <div class="column text-light">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- ********************************************************       Footer Section Ends       *************************************************** -->

<!-- Scripts-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>