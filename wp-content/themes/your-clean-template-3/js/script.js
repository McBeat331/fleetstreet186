(function( $ ) {
    $( document ).ready( function() {
        /**
         * Load post ajaxify.
         *
         * For adding new, set link class to '.load' and add data-container-id
         *   and data-template params.
         * 'data-container-id' - id of wrapper with articles to append,
         * 'data-template' - loop-{template}.php file, to add allowed template
         *   use `mytheme_ajax_available_templates`
         *   filer.
         *
         * If need to masonry reload, add class '.masonry-container' to container.
         * Notice: child of container must have tag 'article'.
         */
        /*$( 'a.load' ).click( function ( e ) {

            e.preventDefault();
			$( '#3rdPage' ).load($( this ).attr( 'href' ));
			/*
			var containerID = $( this ).data( 'container-id' );
            var template = $( this ).data( 'template' );
            var container = $( '#3rdPage' );
            if ( container.length ) {
                var data = {
                    action:   'more_posts',
                    offset:   0,
                    template: template
                };
                $.post( params.ajax_url, data, function ( response ) {
                    container.append( response );
                } );
            }*/
        //} );
    });
})(jQuery);