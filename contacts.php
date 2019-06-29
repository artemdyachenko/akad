<?php /* Template Name: Contacts */ ?>

<?php get_header(); ?>

<?php get_template_part( 'templates/hero' ); ?>

<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 title="Contacts form"]')?>
                </div>

                <div class="contact-info">
                    <?php echo get_post_field('post_content'); ?>
                </div>

                <?php get_template_part( 'templates/social' ); ?>
            </div>
            <div class="col-md-6">

            <div id="map-js" class="map">
            </div>

            <script>
                var map;
     var marker;
     function initMap() {
       map = new google.maps.Map(document.getElementById('map-js'), {
         center: {lat: 51.495866, lng: 31.2204985},
         zoom: 8
       });

       var image = 'https://raw.githubusercontent.com/jokerro2019/Exam2/master/img/marker-2.png';
       marker = new google.maps.Marker({
         position: {lat: 51.495866, lng: 31.2204985},
         map: map,
         icon: image,
         draggable: true,
         animation: google.maps.Animation.DROP
       });
       marker.addListener('click', toggleBounce);
     }

     function toggleBounce() {
       if (marker.getAnimation() !== null) {
         marker.setAnimation(null);
       } else {
         marker.setAnimation(google.maps.Animation.BOUNCE);
       }
     }
            </script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo of_get_option('map_id'); ?>&callback=initMap"
               async defer></script>

            </div>
        </div>
    </div>
</section>

<style>

    .map {
        height: 900px;
    }

    .form {
        margin-bottom: 100px;
    }

    .form__field {
        display: block;
        width: 100%;
        margin-bottom: 30px;
        padding: 20px;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        border: 1px solid #e5e5e5;
        background: #fefcf9;
    }

    textarea.form__field {
        height: 200px;
        resize: none;
    }

</style>

<?php get_footer(); ?>