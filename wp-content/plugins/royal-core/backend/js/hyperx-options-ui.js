jQuery(document).ready(function($) {
    "use strict";

/*
***************************************************************
* Thumbnail Hovers
***************************************************************
*/

$('.thumbnail-wrapper').hover(function(){
    $(this).find('a').stop().fadeIn();
}, function(){
    $(this).find('a').stop().fadeOut();
});


/*
***************************************************************
* Design Activation
***************************************************************
*/

    var activeDesign = $('select[id*=active_design]').val();
    $('.royal-activate[data-title*='+ activeDesign.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }) +']').parent().addClass('royal-is-active');
    $('.royal-is-active').find('span').text('Active: '+ activeDesign.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }));

    $('.royal-activate').on('click', function() {

        var currentDesign = $(this).attr('data-title');

        if ( $(this).hasClass('disabled') ) {
            alert('"'+ currentDesign +'" Design is already activated!')
            return;
        }

        if ( ! confirm('Are you sure you want to activate "'+ currentDesign +'" Design?\n\nNOTE!\nPrevious changes in the Theme Customizer will be lost and overwritten by this design.') ) {
            return;
        }

        $('select[id*=active_design]').val( currentDesign.toLowerCase() );

        if ( $('.import-message').length === 0 ) {
            $('.form-table').before('<div class="updated import-message"><p><span class="dashicons dashicons-update rf-spin"></span>&nbsp;&nbsp;Activating <strong>'+ currentDesign +'</strong> Design...</p></div>');
        } else {
            $('.import-message').html('<p><span class="dashicons dashicons-update rf-spin"></span>&nbsp;&nbsp;Activating <strong>'+ currentDesign +'</strong> Design...</p>');
        }

        $(window).scrollTop(0);

        var data = {
            action: 'royal_design_activate',
            active_design: currentDesign.toLowerCase()
        };

        // run ajax callback
        $.post(ajaxurl, data, function(response) {
            
            // message
            $('.import-message').html('<p><span class="dashicons dashicons-yes"></span>&nbsp;&nbsp;<strong>'+ currentDesign +'</strong> Design has been activated!</p>');
            $(window).scrollTop(0);

            // reset defaults
            $('.royal-activate').parent().removeClass('royal-is-active');
            $('.royal-activate').parent().find('span').each(function() {
                $(this).text($(this).parent().find('.royal-activate').attr('data-title'));
            });

            // activate
            $('.royal-activate[data-title='+ currentDesign +']').parent().addClass('royal-is-active');
            $('.royal-activate[data-title='+ currentDesign +']').parent().find('span').text('Active: '+ currentDesign);
        });

    });


/*
***************************************************************
* Demo Data Import
***************************************************************
*/

    $('.royal-import').on('click', function() {

        var currentBTN = $(this);

        if ( ! confirm('Are you sure you want to Import "'+ currentBTN.next().attr('data-title') +'" Demo Content?\n\nNOTE!\nTo make a full Demo Import you will need to install/activate following plugins: Royal Core, Visual Composer, Ultimate Addons for VC and Slider Revolution.\n\nRECOMENDED!\nMake this action on the fresh installation of Wordpress. In the other case this will affect on your current website content.') ) {
            return;
        }

        if ( $('.import-message').length === 0 ) {
            $('.form-table').before('<div class="updated import-message"></div>');
        }

        $('.import-message').html('<p><span class="dashicons dashicons-update rf-spin"></span>&nbsp;&nbsp;Importing Demo Content... Please be patient while content is being imported! It may take several minutes.</p>');
        $('.import-message').css('border-color', '#ffba00');
        currentBTN.val('Importing ...');
        $(window).scrollTop(0);

        var data = {
            action: 'royal_import',
            design: $(this).attr('data-title')
        };

        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'royal_import',
                design: $(this).attr('data-title')
            },
            success: function(data, textStatus, XMLHttpRequest){
                $('.import-message').html('<p><span class="dashicons dashicons-yes"></span>&nbsp;&nbsp;Import Was Sucessfull, Have Fun!</p>');
                $('.import-message').css('border-color', '#7ad03a');
                currentBTN.val('Import');
                $(window).scrollTop(0);
            },
            error: function(MLHttpRequest, textStatus, errorThrown){
                setTimeout(function(){
                    $('.import-message').html('<p><span class="dashicons dashicons-yes"></span>&nbsp;&nbsp;Import Was Sucessfull, Have Fun!</p>');
                    $('.import-message').css('border-color', '#7ad03a');
                    currentBTN.val('Import Content');
                    $(window).scrollTop(0);                    
                }, 15000);
            }
        });

    });


}); // end dom ready