/**
 *
 * NS BBCode Extension
 *
 */

(function($) { // Avoid conflicts with other libraries

    'use strict';

    /**
     * DOM READY
     */
    $(document).ready(function() {

        var body = $('body');

        /**
         * Function spoiler toggle
         */
        body.on('click', '.spoilbtn', function(event) {
            event.preventDefault();
            var trigger = $(this),
                spoiler = trigger.closest('div').next('.spoilcontent');
            spoiler.slideToggle('fast', function() {
                trigger.text(spoiler.is(':visible') ? trigger.data('hide') : trigger.data('show'));
            });
        });

    });

})(jQuery); // Avoid conflicts with other libraries
