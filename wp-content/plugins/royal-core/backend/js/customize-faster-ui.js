jQuery(document).ready(function($) {
    "use strict";

/*
***************************************************************
* Toggle Sections
***************************************************************
*/

$('.toggle-save-btns > input').on('click', function() {

    $('.customizer-section input').prop( 'checked', ! $('.customizer-section input').prop('checked') );

    if ( $('.customizer-section input').prop('checked') ) {
        $('.customizer-section').addClass('customizer-section-active');
    } else {
        $('.customizer-section').removeClass('customizer-section-active');
    }
    
});

$('.customizer-section').on('click', function() {
    $(this).find('input').trigger('click');
});

$('.customizer-section input').change(function() {
    $(this).closest('div').toggleClass('customizer-section-active');
});


}); // end dom ready