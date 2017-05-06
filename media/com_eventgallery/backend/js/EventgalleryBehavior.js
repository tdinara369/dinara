(function(Eventgallery, jQuery){

    jQuery( document ).ready(function() {

        jQuery('.scale-price-editor').each(function(index, item){
            new Eventgallery.ScalePriceEditor(item);
        });

    });

})(Eventgallery, Eventgallery.jQuery);
