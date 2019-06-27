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
                    <h1 class="hero__title hero__title--bordered">creative agency</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img class="hero__img" src="img/home-img-01.jpg" alt="">
            </div>
            <div class="col-md-6 offset-md-1">
                <h2>
                    <span>History of agency</span>
                </h2>
                <p>
                    Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                    quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                    voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                    laboriosam, nisi ut aliquid ex ea commodi modi tempora incidunt ut labore.
                </p>
                <a href="#" class="button">read more</a>
            </div>
        </div>
    </div>
</section>

<?php echo get_post_field('post_content'); ?>

<?php get_footer(); ?>