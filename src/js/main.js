'use strict';

$(document).ready(function() {

    // Isotop init
    var $grid = $('.js-gallery-box').isotope({
        itemSelector: '.gallery-item'
    });

    $('.js-gallery-nav').on( 'click', 'button', function() {

        $('.js-gallery-nav button').removeClass('is-active');
        $(this).addClass('is-active');
        
        var filterValue = $(this).attr('data-filter');
        
        $grid.isotope({ filter: filterValue });
    });

});
    