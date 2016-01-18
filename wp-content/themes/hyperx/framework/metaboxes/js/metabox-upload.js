jQuery(document).ready(function( $ ) {
    "use strict";


/*
***************************************************************
* #Audio & Video File Upload
***************************************************************
*/

function royalAudioVideoUpload( mediaType, ext) {

    // Media Upload button
    $('#rf_'+ mediaType +'_self_'+ ext +'_upload').on('click', function( event ) {

        // Prevents default behaviour
        event.preventDefault();

        // frame popup options
        var mediaFrame = wp.media({
            title: royalUploader.mediaTitle,
            library: {
                type: mediaType
            },
            button: {
                text: royalUploader.mediaButton
            }
        });

        // grab value of selected mp3 and place thats url in input
        mediaFrame.on('select', function(){
            var mediaAttachment = mediaFrame.state().get('selection').first().toJSON();
            $('#rf_'+ mediaType +'_self_'+ ext).val( mediaAttachment.url );
        });

        // open popup
        mediaFrame.open();

    });
    
}

// Audio upload buttons
royalAudioVideoUpload( 'audio', 'mp3' );
royalAudioVideoUpload( 'audio', 'ogg' );

// Video upload buttons
royalAudioVideoUpload( 'video', 'mp4' );
royalAudioVideoUpload( 'video', 'ogv' );


/*
***************************************************************
* #2nd Featured Image Upload
***************************************************************
*/

var secondFeaturedImgWrap = $('#wrap-2nd-featured-img');

if ( $('#second_featured_img_id').val() === '' ) {
    $('#set-2nd-thumbnail').show();
    $('#remove-2nd-thumbnail').hide();
} else {
    // secondFeaturedImgWrap.prepend('<img src="'+ $('#second_featured_img_id').val() +'" alt="2nd Featured Image" />')
    $('#remove-2nd-thumbnail').show();
    $('#set-2nd-thumbnail').hide();
}

// Image Upload
$('#set-2nd-thumbnail').on('click', function( event ) {

    // Prevents default behaviour
    event.preventDefault();

    // frame popup options
    var mediaFrame = wp.media({
        title: '2nd Featured Image',
        library: {
            type: 'image'
        },
        button: {
            text: 'Set 2nd Featured Image'
        }
    });

    // grab value of selected mp3 and place thats id in input
    mediaFrame.on('select', function() {
        var mediaAttachment = mediaFrame.state().get('selection').first().toJSON();

        // set id
        $('#second_featured_img_id').val( mediaAttachment.id );

        // load image
        secondFeaturedImgWrap.prepend('<img src="'+ mediaAttachment.url +'" alt="2nd Featured Image" />')
        $('#remove-2nd-thumbnail').show();
        $('#set-2nd-thumbnail').hide();

    });

    // open popup
    mediaFrame.open();
});

// Remove Image
$('#remove-2nd-thumbnail').on('click', function( event ) {

    // Prevents default behaviour
    event.preventDefault();

    // remove
    secondFeaturedImgWrap.find('img').remove();
    $('#second_featured_img_id').val('');
    $('#set-2nd-thumbnail').show();
    $('#remove-2nd-thumbnail').hide();

});

}); // end ready