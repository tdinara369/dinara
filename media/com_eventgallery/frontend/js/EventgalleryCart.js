(function(Eventgallery, jQuery){


    Eventgallery.Cart = function(newOptions) {
        this.cart = [];
        this.isMultiline = false;
        this.options = {
            buttonShowType: 'block',
            emptyCartSelector: '.eventgallery-cart-empty',
            cartSelector: '.eventgallery-ajaxcart',
            cartItemContainerSelector: '.cart-items-container',
            cartItemsSelector: '.eventgallery-ajaxcart .cart-items',
            cartItemSelector: '.eventgallery-ajaxcart .cart-items .cart-item',
            cartCountSelector: '.itemscount',
            buttonDownSelector: '.toggle-down',
            buttonUpSelector: '.toggle-up',
            cartItemsMinHeight: null,
            removeUrl: "",
            add2cartUrl: "",
            getCartUrl: "",
            removeLinkTitle: "Remove"
        };
        this.options = Eventgallery.Tools.mergeObjects(this.options, newOptions);
        this.initialize();
    };

    Eventgallery.Cart.prototype.slideUp = function() {
        jQuery(this.options.cartItemContainerSelector).animate({height: this.options.cartItemsMinHeight});
        jQuery(this.options.buttonUpSelector).css('display', 'none');
        if (this.isMultiline) {
            jQuery(this.options.buttonDownSelector).css('display', this.options.buttonShowType);
        } else {
            jQuery(this.options.buttonDownSelector).css('display', 'none');
        }
    };

    Eventgallery.Cart.prototype.slideDown = function() {
        jQuery(this.options.cartItemContainerSelector).animate({height: jQuery(this.options.cartItemsSelector).height()});
        jQuery(this.options.buttonDownSelector).css('display', 'none');
        jQuery(this.options.buttonUpSelector).css('display', this.options.buttonShowType);
    };

    Eventgallery.Cart.prototype.initialize = function() {

        jQuery(this.options.buttonDownSelector).click(jQuery.proxy(function (event) {
            event.preventDefault();
            this.slideDown();
        }, this));

        jQuery(this.options.buttonUpSelector).click(jQuery.proxy(function (event) {
            event.preventDefault();
            this.slideUp();
        }, this));

        $document = jQuery( document );

        $document.off('change', '.eventgallery-cartquantity');
        $document.on ('change', '.eventgallery-cartquantity', jQuery.proxy(this.updateQuantity, this));

        $document.off('touchend click', '.eventgallery-openAdd2cart');
        $document.on ('touchend click', '.eventgallery-openAdd2cart', jQuery.proxy(this.openOverlay, this));

        $document.off('touchend click', '.eventgallery-closeAdd2cart');
        $document.on ('touchend click', '.eventgallery-closeAdd2cart', jQuery.proxy(this.closeOverlay, this));

        $document.off('touchend click', '.eventgallery-opencart');
        $document.on ('touchend click', '.eventgallery-opencart', jQuery.proxy(this.openCart, this));

        $document.off('touchend click', '.eventgallery-qtyplus');
        $document.on ('touchend click', '.eventgallery-qtyplus', jQuery.proxy(this.quantityPlus, this));

        $document.off('touchend click', '.eventgallery-qtyminus');
        $document.on ('touchend click', '.eventgallery-qtyminus', jQuery.proxy(this.quantityMinus, this));

        $document.off('touchend click', '.eventgallery-removeFromCart');
        $document.on ('touchend click', '.eventgallery-removeFromCart', jQuery.proxy(this.removeFromCart, this));

        $document.on('updatecartlinks', jQuery.proxy(function (event) {
            this.populateCart(true);
        }, this));

        $document.on('updatecart', jQuery.proxy(function (event, cart) {
            this.cart = cart;
            this.populateCart(false);
        }, this));

        this.updateCart();
    };

    Eventgallery.Cart.prototype.openOverlay = function(e) {
        e.preventDefault();
        e.stopPropagation();

        var link = jQuery(e.target);
        if (!link.attr('data-id')) {
            link = link.parent('[data-id]');
        }

        var reposition = function(element) {

            element.hide();

            element.css( {
                'top': 0,
                'left': 0
            });

            var maxWidth = jQuery(window).width(),
                maxHeight = jQuery(window).height(),
                width = element.outerWidth(),
                height = element.outerHeight(),
                scrollTop = jQuery(window).scrollTop(),
                left = 0,
                top = scrollTop;

            if (maxWidth-width>0) {
                left = (maxWidth - width) / 2;
            }

            if (maxHeight - height > 0) {
                top = scrollTop + (maxHeight - height) / 2;
            }

            element.css( {
                'top': top,
                'left': left
            });

            element.fadeIn();

        };

        var myDiv = jQuery('<div id="add2cart-overlay"><i class="egfa egfa-2x egfa-cog egfa-spin"></i></div>');
        var background = jQuery('<div id="add2cart-overlay-background"></div>');

        myDiv.css( {
            'opacity': '1 !important',
            'position': 'absolute',
            'max-width' : '100%'
        });

        jQuery('body').append(background);
        jQuery('body').append(myDiv);

        reposition(myDiv);


        myDiv.load(EventGalleryCartConfiguration.add2carturl + '&' + link.attr('data-id'), function(responseText, textStatus, jqXHR){
            jQuery('.eventgallery-closeAdd2cart').click(closeFunction);
            reposition(myDiv);
        });

        var closeFunction = function(){
            myDiv.fadeOut(300, function() {
                jQuery(this).remove();
                jQuery('#add2cart-overlay-background').remove();
            });
            jQuery(document).off('touchend click', closeFunction2);
        };


        // this method is used to close the sharing windows if we click somewhere else.
        var closeFunction2 = function(e) {
            if (e.target.id != 'add2cart-overlay' && jQuery(e.target).parents('#add2cart-overlay').length === 0) {
                closeFunction();
            }
        };

        jQuery(document).on('touchend click', closeFunction2);

        jQuery(window).resize( function(e) {
            reposition(myDiv);
        });
    };

    Eventgallery.Cart.prototype.closeOverlay = function() {

    };

    Eventgallery.Cart.prototype.openCart = function(e) {
        e.preventDefault();
        window.location.href = jQuery(e.target).attr('data-href');
    };

    Eventgallery.Cart.prototype.updateCartItemContainer = function () {

        // detect multiple rows

        this.isMultiline = false;
        var y = -1;
        var currentObject =  this;

        jQuery(this.options.cartItemSelector).each(function () {
            var posY = jQuery(this).position().top;
            if (y < 0) {
                y = posY;
            } else if (y != posY) {
                currentObject.isMultiline = true;
            }
        });

        if (this.isMultiline) {
            // prevent showing the wrong button. Basically this is an inital action if a second row is created.
            var down = jQuery(this.options.buttonDownSelector);
            var up = jQuery(this.options.buttonUpSelector);

            if (down.css('display') == 'none' && up.css('display') == 'none') {
                down.css('display', this.options.buttonShowType);
            } else {
                // update if a third or more row is created
                if (up.css('display') != 'none') {
                    // timeout to avoid any size issues because of a slow browser
                    setTimeout(jQuery.proxy(function() {
                        this.slideDown();
                    }, this), 1000);
                }
            }
        } else {
            this.slideUp();
        }
    };

    Eventgallery.Cart.prototype.populateCart = function (linksOnly) {

        if (this.cart.length === 0) {
            jQuery(this.options.cartSelector).slideUp();
            jQuery(this.options.emptyCartSelector).slideDown();
        } else {
            jQuery(this.options.cartSelector).slideDown();
            jQuery(this.options.emptyCartSelector).slideUp();
        }
        // define where all the cart html items are located

        var cartHTML = jQuery(this.options.cartItemsSelector);
        if (cartHTML === null) {
            return;
        }
        // clear the html showing the current cart
        if (!linksOnly) {
            cartHTML.html("");
        }

        // reset cart button icons
        jQuery('.eventgallery-add2cart i.egfa').addClass('egfa-cart-plus').removeClass('egfa-shopping-cart');


        for (var i = this.cart.length - 1; i >= 0; i--) {
            //create the id. It's always folder=foo&file=bar
            var id = 'folder=' + this.cart[i].folder + '&file=' + this.cart[i].file;
            //add the item to the cart. Currently we simple refresh the whole cart.
            if (!linksOnly) {
                cartHTML.html(cartHTML.html() +
                    '<div class="cart-item"><span class="badge">'+this.cart[i].count+'</span>' +
                    this.cart[i].imagetag +
                    '<a href="#" title="' + this.options.removeLinkTitle + '" class="button-removeFromCart eventgallery-removeFromCart" data-id="lineitemid=' + this.cart[i].lineitemid + '">'+
                    '<i class="egfa egfa-2x egfa-remove"></i>' +
                    '</a></div>');
            }
            // mark the add2cart link to show the item is already in the cart
            jQuery('.eventgallery-add2cart[data-id*=\'' + id + '\'] i.egfa').addClass('egfa-shopping-cart').removeClass('egfa-cart-plus');
        }

        if (!linksOnly) {
            cartHTML.html(cartHTML.html() + '<div style="clear:both"></div>');
            if (null === this.options.cartItemsMinHeight) {
                this.options.cartItemsMinHeight = jQuery(this.options.cartItemContainerSelector).height();
            }
            this.updateCartItemContainer();
        }

        jQuery('.itemscount').html(this.cart.length);

        $lightBoxTrigger = jQuery("a[data-eventgallery-lightbox='cart']");
        //$lightBoxTrigger.eventgallery_colorbox.close();
        $lightBoxTrigger.eventgallery_colorbox({photo: true, maxWidth: '90%', maxHeight: '90%', rel: 'cart'});
    };

    Eventgallery.Cart.prototype.updateCart = function () {
        jQuery.getJSON(
            this.options.getCartUrl,
            {json: 'yes'},
            function (data) {
                if (data !== undefined) {
                    jQuery(document).trigger( 'updatecart', [data] );
                }
            }
        );
    };

    Eventgallery.Cart.prototype.removeFromCart = function (event) {
        return this.doRequest(event, this.options.removeUrl);
    };

    Eventgallery.Cart.prototype.updateQuantity = function (event) {

        var $inputFild = jQuery(event.target),
            imagetypeid = $inputFild.data('imagetypeid'),
            quantity = parseInt($inputFild.val()),
            data = $inputFild.data('id');

        event.preventDefault();
        data = data + '&quantity=' + quantity;
        return this.doRequest(event, this.options.add2cartUrl, data);

    };

    Eventgallery.Cart.prototype.quantityPlus = function(e) {
        e.preventDefault();

        var fieldName = jQuery(e.target).attr('field'),
            inputField = jQuery('input[name='+fieldName+']'),
            currentVal = parseInt(inputField.val());

        if (!isNaN(currentVal)) {
            var maxOrderQuantity = inputField.data('maxorderquantity');
            if (maxOrderQuantity === 0 || inputField.val()<maxOrderQuantity) {
                inputField.val(currentVal + 1);
            }
            inputField.change();
        } else {
            inputField.val(0);
        }
    };

    Eventgallery.Cart.prototype.quantityMinus = function(e) {
        e.preventDefault();

        var fieldName = jQuery(e.target).attr('field'),
            inputField = jQuery('input[name='+fieldName+']'),
            currentVal = parseInt(inputField.val());

        if (!isNaN(currentVal) && currentVal > 0) {
            inputField.val(currentVal - 1).change();
        } else {
            inputField.val(0);
        }
    };

    Eventgallery.Cart.prototype.doRequest = function (event, url, data) {

        event.preventDefault();

        var linkElement = jQuery(event.target);

        if (!linkElement.attr('data-id')) {
            linkElement = linkElement.parent('[data-id]');
        }

        var iconElement = linkElement.children('i');
        if (data === undefined) {
            data = linkElement.attr('data-id');
        }

        iconElement.removeClass("egfa-cart-plus").removeClass("egfa-shopping-cart").addClass('egfa-spin egfa-gear');

        jQuery.getJSON(
            url,
            data,
            function (data) {

                if (data !== undefined) {
                    jQuery(document).trigger( 'updatecart', [data] );
                }

                iconElement.removeClass('egfa-spin').removeClass('egfa-gear').addClass('');

            }
        );

        return true;
    };

})(Eventgallery, Eventgallery.jQuery);

