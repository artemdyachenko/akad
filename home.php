<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section class="hero">
    <header class="header">
        <div class="container">
	        <?php get_template_part( 'templates/nav' ); ?>
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="hero__box">
                    <span class="hero__label">we're</span>
                    <h1 class="hero__title hero__title--bordered"><?php echo of_get_option('hero_title'); ?></h1>
                    <p>
                    <?php echo of_get_option('hero_description'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img class="hero__img" src="img/home-img-01.jpg" alt="">
            </div>
            <div class="col-md-6 offset-md-1">
                <?php echo of_get_option('hero_content'); ?>
            </div>
        </div>
    </div>
</section>

<?php echo get_post_field('post_content'); ?>

<?php get_template_part( 'sections/gallery' ); ?>

<?php get_footer(); ?>