jQuery( document ).ready( function () {
	jQuery( '.woo-conditions.tabs' ).tabs();
	jQuery( '.woo-conditions.tabs .inner-tabs' ).tabs();

	jQuery( '#woo-conditions .advanced-settings a' ).click( function ( e ) {
		jQuery( this ).parent( 'li' ).siblings( '.advanced' ).toggleClass( 'hide' );

		var new_status = '1'; // Do display.
		if ( jQuery( this ).parent( 'li' ).siblings( '.advanced' ).hasClass( 'hide' ) ) {
			new_status = '0'; // Don't display.
		}

		// Perform the AJAX call.	
		jQuery.post(
			ajaxurl, 
			{ 
				action : 'woosidebars-toggle-advanced-items', 
				woosidebars_advanced_noonce : woosidebars_localized_data.woosidebars_advanced_noonce, 
				new_status: new_status
			},
			function( response ) {}	
		);

		return false;
	});
});