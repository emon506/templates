
<?php
/**
 * 
 * Template Name: Service
 */
get_header();?>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/breadcumb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <?php get_template_part('template-parts/content','service') ?>

        <!-- Recent Area Start -->
        <div class="recent-area section-paddingt2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h1>Our Recent News</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent/rcent_1.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Business planing</span>
                                <h4><a href="#">Amazing Places To Visit In Summer</a></h4>
                                <p>October 5, 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent/rcent_2.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Audit</span>
                                <h4><a href="#">Construction industry as their over draft</a></h4>
                                <p><?php echo get_the_date() ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recent/rcent_3.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Business planing</span>
                                <h4><a href="#">Construction industry as their over draft</a></h4>
                                <p><?php echo get_the_date() ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Area End-->

    </main>
   <?php get_footer(); ?>