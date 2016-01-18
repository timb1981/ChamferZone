jQuery(document).ready(function($) {
    "use strict";

/*
***************************************************************
* Backup
***************************************************************
*/

    $('.generate-backup').on('click', function() {

    	// object
        var data = {
            action: 'royal_backup_design',
            backup_design: name
        };

        // run ajax callback
        $.post(ajaxurl, data, function(response) {
            $('#backup_design').val(response.replace('}}0', '}}'));
        });

    });




/*
***************************************************************
* Clear
***************************************************************
*/

    $('.clear-backup').on('click', function() {
        $('#backup_design').val('');
    });



/*
***************************************************************
* Restore
***************************************************************
*/

    $('.restore-backup').on('click', function() {

    	// object
        var data = {
            action: 'royal_restore_backup',
            restore_backup: $('#backup_design').val()
        };

        // run ajax callback
        $.post(ajaxurl, data, function(response) {
            $('#backup_design').val('Your Design Has Been Sucessfuly Restored!');
        });

    });



}); // end dom ready