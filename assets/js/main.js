jQuery( document ).ready( ($) => {
    console.log('jquery ready');

    $('.wp-block-navigation-item a').on('click', function() {
        $(this).closest('.is-menu-open').removeClass('is-menu-open');
    });

});