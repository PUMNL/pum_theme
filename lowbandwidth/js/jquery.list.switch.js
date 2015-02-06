/*
 * jQuery(document).ready(function() {
	var switchContainer = ".switch-buttons";
	var map = ".map-banner";
	var listCountry = ".block-views-countries-country-list";
	var listSector = ".block-views-sectors-sector-list";
	var iconSector = ".block-views-sectors-banner-icons";
	
	jQuery(listSector).hide();
	jQuery(listCountry).hide();
	
	jQuery(".switch-buttons a").click(function(event) {
		event.preventDefault();
		jQuery(listCountry).hide();
		jQuery(listSector).hide();

		if(jQuery(this).hasClass("country")) {
			jQuery(map).show();
			jQuery(listCountry).hide();
		} else {
			jQuery(listCountry).show();
			jQuery(map).hide();
		}
		
		if(jQuery(this).hasClass("icon")) {
			jQuery(iconSector).show();
			jQuery(listSector).hide();
		} else {
			jQuery(listSector).show();
			jQuery(iconSector).hide();
		}
		
	});
});
*/