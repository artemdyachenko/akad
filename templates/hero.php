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
                    <h1 class="hero__title"><?php echo get_the_title(); ?></h1>
	                <?php get_template_part( 'templates/breadcrumbs' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>