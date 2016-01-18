jQuery(document).ready(function($) {
    "use strict";

    // get category names
	var sortedCatNames = $('#sorted_cat_names').val();
		sortedCatNames = sortedCatNames.split(',');

    // remove to reorder
	var sortedCatSlugs = $('#sorted_cat_slugs').val();
		sortedCatSlugs = sortedCatSlugs.split(',');

	// soretd cats input
	var catSlugsInput = [],
		catNamesInput = [];

	// reorder the list
	for( var i = 0; i < sortedCatSlugs.length; i++ ) {
		if ( $('#sortable li[data-slug*="'+ sortedCatSlugs[i] +'"]').length > 0 ) {
			catSlugsInput.push(sortedCatSlugs[i]);
			catNamesInput.push(sortedCatNames[i]);
			$('#sortable li[data-slug*="'+ sortedCatSlugs[i] +'"]').remove();
			$('#sortable').append('<li class="ui-state-default" data-slug="'+ sortedCatSlugs[i] +'"><span>'+ sortedCatNames[i] +'</span></li>');
		}
	}

	// update soretd cats input
	$('#sorted_cat_slugs').val(catSlugsInput);
	$('#sorted_cat_names').val(catNamesInput);

	// trigger ui sortable function
	$( "#sortable" ).sortable({
		placeholder: "ui-state-highlight",
		stop: function(event, ui) {
			var dataSlugs = '',
				dataNames = '';

			$('#sortable li').each(function(i, el){

				var slug = $(el).data('slug'),
					name = $(el).text();
				
				dataSlugs += slug + ',';
				dataNames += name + ',';

			});

			$("#sorted_cat_slugs").val( dataSlugs.slice(0, -1) );
			$("#sorted_cat_names").val( dataNames.slice(0, -1) );
		}
	});

});