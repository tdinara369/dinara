ALTER TABLE `#__eventgallery_file` CHANGE  `flickr_originalsecret`  `flickr_secret_o` text;
ALTER TABLE `#__eventgallery_file` ADD `flickr_secret_h` text after `flickr_secret`, ADD `flickr_secret_k` text AFTER `flickr_secret_h`;