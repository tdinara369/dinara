/**
* @author    JoomlaShine.com http://www.joomlashine.com
* @copyright Copyright (C) 2008 - 2011 JoomlaShine.com. All rights reserved.
* @license   GNU/GPL v2 http://www.gnu.org/licenses/gpl-2.0.html
*/

	var JSNTemplate = {
		_templateParams:		{},

		initOnDomReady: function()
		{
			// Setup HTML code for typography
			JSNUtils.createGridLayout("DIV", "grid-layout", "grid-col", "grid-lastcol");
			JSNUtils.createExtList("list-number-", "span", "jsn-listbullet", true);
			JSNUtils.createExtList("list-icon", "span", "jsn-listbullet", false);


			// General layout setup
			JSNUtils.setupLayout();



			// Stick main menu to top
			if (_templateParams.enableDesktopMenuSticky) {
				JSNUtils.setDesktopSticky('jsn-header-bottom');
			}

			// Retrieve window height and set for the pre-header section
			if (document.body.hasClass('jsn-onepage')) {
				var header = document.id('jsn-header-top'), height = window.getSize().y - document.id('jsn-header-bottom').getSize().y, spacing = 0;

				// Calculate spacing for header top
				for (var i in {margin:'', border:'', padding:''}) {
					for (var j in {top:'', bottom:''}) {
						var k = parseInt(header.getStyle(i + '-' + j + (i == 'border' ? '-width' : '')));

						isNaN(k) || (spacing += parseInt(k));
					}
				}

				header.setStyles({
					height: (height - spacing) + 'px',
					'box-sizing': 'content-box',
					'-moz-box-sizing': 'content-box',
				});

				// Fix height for top slider
				window.addEvent('load', function() {
					var slider = document.getElement('.galleria-container');
	
					if (slider) {
						slider.setStyle('height', (height - spacing - 5) + 'px');
					}
				});
			}
		},

		initOnLoad: function()
		{
			// Setup event to update submenu position
			JSNUtils.setSubmenuPosition(_templateParams.enableRTL);

			// Stick positions layout setup
			JSNUtils.setVerticalPosition("jsn-pos-stick-leftmiddle", 'middle');
			JSNUtils.setVerticalPosition("jsn-pos-stick-rightmiddle", 'middle');
		},

		initTemplate: function(templateParams)
		{
			// Store template parameters
			_templateParams = templateParams;

			// Init template on "domready" event
			window.addEvent('domready', JSNTemplate.initOnDomReady);
			window.addEvent('load', JSNTemplate.initOnLoad);
		}
	}; // must have ; to prevent syntax error when compress
