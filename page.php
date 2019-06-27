<?php get_header(); ?>

<?php get_template_part( 'templates/hero' ); ?>

<section class="page-section">
    <div class="container">

        <?php echo get_post_field('post_content'); ?>

    </div>
</section>

<?php get_footer(); ?>