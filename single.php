<?php get_header(); ?>

<?php get_template_part( 'templates/hero' ); ?>

<article class="page-section">
    <div class="container">
        <h1>
            <?php echo get_the_title(); ?>
        </h1>
        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
        <div>
            <?php echo get_post_field('post_content'); ?>
        </div>
    </div>
</article>

<?php get_footer(); ?>