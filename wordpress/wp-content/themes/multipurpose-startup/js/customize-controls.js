( function( api ) {

	// Extends our custom "multipurpose-startup" section.
	api.sectionConstructor['multipurpose-startup'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );