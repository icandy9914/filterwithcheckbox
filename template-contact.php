<?php /* Template Name: Contact  */ ?>

<?php get_header(); ?>
<?php
$ethos_banner = (get_field('ethos_banner'))?get_field('ethos_banner'):'';
$ethos_third_image = (get_field('ethos_third_image'))?get_field('ethos_third_image'):'';
$ethos_forth_image = (get_field('ethos_forth_image'))?get_field('ethos_forth_image'):'';
?>
<!--inner section-->
<div class="inner_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about_txt">
                            <span class="small_top_txt m-b-40"><?php the_title(); ?></span>
                            <h1 class="heading_txt"><?php if(get_field('ethos_main_heading')): echo get_field('ethos_main_heading'); endif; ?></h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--inner section end-->

        <!--Hero Banner Section-->
        <div class="hero_section">
            <div class="container-fluid p-0">
                <?php if($ethos_banner): echo wp_get_attachment_image( $ethos_banner, 'ethos_banner'); endif; ?>
            </div>
        </div>
        <!--Hero banner section end-->

        <!--we believe section-->
        <div class="about_dish_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dish_section">
                            <div class="dish_image">
                                <?php if($ethos_third_image): echo wp_get_attachment_image( $ethos_third_image, 'about_passion'); endif; ?>
                            </div>

                            <div class="dish_about">
                                <h2><?php if(get_field('ethos_third_heading')): echo get_field('ethos_third_heading'); endif; ?></h2>
                                <?php if(get_field('ethos_third_content')): echo get_field('ethos_third_content'); endif; ?>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="dish_section">
                            <div class="dish_about">
                                <h2><?php if(get_field('ethos_forth_heading')): echo get_field('ethos_forth_heading'); endif; ?></h2>
                                <p><?php if(get_field('ethos_forth_content')): echo get_field('ethos_forth_content'); endif; ?>.</p>
                            </div>
                            <div class="dish_image">
                                <?php if($ethos_forth_image): echo wp_get_attachment_image( $ethos_forth_image, 'ethos_regular'); endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--we believe section end-->

<?php get_footer(); ?>
