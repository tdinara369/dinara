(function(Eventgallery, jQuery){

    /**
     * Formats a list of images to appear square sized. This class is doing something like the Grid layout for events.
     * @param newOptions
     * @constructor
     */
    Eventgallery.SquareList = function(newOptions) {
        Eventgallery.Imagelist.call(this, newOptions);
    };

    Eventgallery.SquareList.prototype = new Eventgallery.Imagelist();
    Eventgallery.SquareList.prototype.constructor = Eventgallery.SquareList;


    Eventgallery.SquareList.prototype.processList = function() {
        /* processes the image list*/
        var width = this.width;
        var currentObject = this;
        jQuery.each(this.images, function () {
            this.setSize(width, width, true);
        });
    };

})(Eventgallery, Eventgallery.jQuery);