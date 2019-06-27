<?php /* Template Name: Category */ ?>

<?php get_header(); ?>

<?php get_template_part( 'templates/hero' ); ?>

<main class="blog page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10">

            <?php
            $args = array(
                'post_type' => 'post'
            );

            $post_query = new WP_Query($args);

            if ( $post_query->have_posts() ) {while ( $post_query->have_posts() ) { $post_query->the_post();
            ?>

            <article class="article">
                <div class="article__image">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                </div>
                <time class="article__date">
                    <?php echo get_the_date(); ?> <?php echo the_time(); ?>
                </time>
                <br>
                <h2>
                    <?php echo the_title(); ?>
                </h2>
                <br>
                <a href="<?php echo the_permalink(); ?>">continue reading</a>
                <br>
                <br>
            </article>

            <?php } } else { ?>
            <p>Записей нет.</p>
            <?php } ?>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>