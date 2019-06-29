<?php wp_footer(); ?>

<section class="page-section bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title-base text-white">YOU THINK WE'RE COOL ? LET'S WORK TOGETHER</h2>
                <a href="#" class="button button--white">get in touch</a>
            </div>
            <div class="col-md-6">
                <div class="newsletter-box">
                    <h3>
                        STAY INFORMED WITH OUR NEWSLETTER
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                    <?php echo do_shortcode('[contact-form-7 title="Newsletter form"]') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <nav class="footer-nav">
                    <?php wp_nav_menu(array(
                        'container'     => '',
                        'menu_class'    => 'footer-nav__list'
                    )); ?>
                </nav>
            </div>
            <div class="col-md-4 footer-right-box">
                <p class="footer-copyright">
                    Created by akhouad 2016. All Rights Reserved
                </p>
	            <?php get_template_part( 'templates/social' ); ?>
            </div>
        </div>
    </div>
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/build/js/script.min.js"></script>

    <script>
        $('.js-gallery-box').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{
                enabled:true
            }
        });
    </script>

</body>

</html>