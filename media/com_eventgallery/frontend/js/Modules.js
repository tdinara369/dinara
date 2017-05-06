(function(jQuery) {

    jQuery(document).ready(function() {
        /**
        * simple fader for the event modules.
        */
        jQuery('.mod-eventgallery-event-slide').each(function(index, container){

            var timeout = 3000 + Math.random()*5000;
            var timer = null;
            var $container = jQuery(container);
            var thumbnails = $container.find('a.thumbnail');
            var currentIndex = 0;

            // prepare the container since the elements are position:absolut 
            // and the container will collapse. 
            $container.css('height', $container.find('a.thumbnail').outerHeight());
            thumbnails.css('opacity', 0).show();
            thumbnails.first().css('opacity', 1);


            var start = function(container) {
                window.clearTimeout(timer);

                jQuery(thumbnails[currentIndex]).animate({ opacity:  0}, 500);
                currentIndex = (currentIndex + 1) % thumbnails.length;
                jQuery(thumbnails[currentIndex]).animate({ opacity: 1}, 300);
                timer = window.setTimeout(start, timeout);
            };

            timer = window.setTimeout(start, timeout);

        });

    });

}(eventgallery.jQuery));