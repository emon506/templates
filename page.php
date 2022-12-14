<?php get_header(); ?>


<main>

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- Completed Cases Start -->
<div class="completed-cases section-padding3">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-cases-img  size mb-30">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service/completed_case_1.png" alt="">
                    <!-- img hover caption -->
                   <div class="single-cases-cap single-cases-cap2">
                       <h4><a href="single-case.html">Marketing Strategy</a></h4>
                        <p>Completely impact synergistic  mindshare</p>
                   </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-cases-img  size mb-30">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service/completed_case_2.png" alt="">
                    <!-- img hover caption -->
                    <div class="single-cases-cap single-cases-cap2">
                       <h4><a href="single-case.html">Marketing Strategy</a></h4>
                        <p>Completely impact synergistic  mindshare</p>
                   </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-cases-img  size mb-30">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service/completed_case_3.png" alt="">
                    <!-- img hover caption -->
                    <div class="single-cases-cap single-cases-cap2">
                       <h4><a href="single-case.html">Marketing Strategy</a></h4>
                        <p>Completely impact synergistic  mindshare</p>
                   </div>
                </div>
            </div>   
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-cases-img  size mb-30">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service/completed_case_4.png" alt="">
                    <!-- img hover caption -->
                    <div class="single-cases-cap single-cases-cap2">
                       <h4><a href="single-case.html">Marketing Strategy</a></h4>
                        <p>Completely impact synergistic  mindshare</p>
                   </div>
                </div>
            </div>   
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-cases-img  size mb-30">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service/completed_case_5.png" alt="">
                    <!-- img hover caption -->
                    <div class="single-cases-cap single-cases-cap2">
                       <h4><a href="single-case.html">Marketing Strategy</a></h4>
                        <p>Completely impact synergistic  mindshare</p>
                   </div>
                </div>
            </div>   
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-cases-img  size mb-30">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/service/completed_case_6.png" alt="">
                    <!-- img hover caption -->
                    <div class="single-cases-cap single-cases-cap2">
                       <h4><a href="single-case.html">Marketing Strategy</a></h4>
                        <p>Completely impact synergistic  mindshare</p>
                   </div>
                </div>
            </div>    
        </div>
        <p><?php  the_content();?></p>
    </div>
</div>
<!-- Completed Cases end -->

<?php get_footer(); ?>