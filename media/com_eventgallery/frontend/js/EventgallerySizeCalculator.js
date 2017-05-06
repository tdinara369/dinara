(function(Eventgallery){
/* determines the size of an image so a image server can deliver it. */

Eventgallery.SizeCalculator = function(newOptions) {
	this.options = {
        // to be able to handle internal and google picasa images, we need to restrict the availabe image sizes.
        availableSizes: [48, 104, 160, 288, 320, 400, 512, 640, 720, 800, 1024, 1280, 1440],
        flickrSizes:   {100 : 't', 240 : 'm', 320 : 'n', 500 : '-', 640 : 'z', 800 : 'c', 1024 : 'b', 1600 : 'h', 2048 : 'k'}

};
    this.options = Eventgallery.Tools.mergeObjects(this.options, newOptions);   
};

Eventgallery.SizeCalculator.prototype.adjustImageURL = function (url, size) {
    url = url.replace(/width=(\d*)/, 'width=' + size);
    url = url.replace(/\/s(\d*)\//, '/s' + size + '/');
    url = url.replace(/\/s(\d*)-c\//, '/s' + size + '-c/');
    

    return url;
};


Eventgallery.SizeCalculator.prototype.getFlickrURL = function(farm, server, secret,  secret_h, secret_k, secret_o, id, width, height, originalwidth, originalheight) {
    var longSideSize = width,
        originalLongSideSize = originalwidth,
        sizeCode,
        secretString,
        sizeString,
        ratio;

    if (originalheight>originalwidth) {
        longSideSize = height;
        originalLongSideSize = originalheight;
    }

    if (height == width) {
        ratio = originalwidth / originalheight;
        if (ratio > 1) {
            // landscape
            longSideSize = width * ratio;
        } else {
            //portait
            longSideSize = width / ratio;
        }
    }

    if (originalLongSideSize < longSideSize) {
        sizeCode = 'o';
    } else {

        for (var size in this.options.flickrSizes) {
            if (size > longSideSize) {
                sizeCode = this.options.flickrSizes[size];
                break;
            }
        }
    }

    switch (sizeCode) {
        case "o":
            secretString = secret_o;
            break;
        case "h":
            secretString = secret_h;
            break;
        case "k":
            secretString = secret_k;
            break;
        default:
            secretString = secret;
    }

    sizeString = sizeCode == '-' ? '' : '_' + sizeCode;
    return 'https://farm' + farm + '.staticflickr.com/' + server + '/' + id + '_' + secretString + sizeString + '.jpg';
};

Eventgallery.SizeCalculator.prototype.getSize = function (width, height, ratio) {
	
    var googleWidth = this.options.availableSizes[0];
	
	for(var index=0; index < this.options.availableSizes.length; index++) {
		var item = 	this.options.availableSizes[index];
    	var widthOkay;
        var heightOkay;
        
        if (googleWidth > this.options.availableSizes[0]){
        	break;
        }
        
        var lastItem = index == this.options.availableSizes.length - 1;

        if (ratio >= 1) {
            widthOkay = item > width;
            heightOkay = item / ratio > height;

            if ((widthOkay && heightOkay) || lastItem) {
                googleWidth = item;
            }
        } else {
            heightOkay = item > height;
            widthOkay = item * ratio > width;

            if ((widthOkay && heightOkay) || lastItem) {
                googleWidth = item;
            }
        }
    }
	
    return googleWidth;
};

})(Eventgallery);   