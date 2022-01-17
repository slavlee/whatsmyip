/**
 * @package TYPO3 Extension
 * @project slavlee_charcount
 * @author Kevin Chileong Lee
 * @copyright (c) 2021 Kevin Chileong Lee. All rights reserved.
 */

(function( $ ) {
 
    $.fn.whatsmyip = function( options ) {
		this.opts = $.extend( {}, $.fn.whatsmyip.defaults, options );
		
		var controlIp = $(this.opts.selectors.toggle);
		
		if ($(controlIp).length > 0)
		{
			$(controlIp).click(function(){
				navigator.clipboard.writeText($($(this).attr("data-wmi-toggle")).val());
				alert($(this).attr("data-msg-success"));
			});
		}
    };
    $.fn.whatsmyip.defaults = {
	    selectors: {
	    	ip: ".form-control-ip",
	    	toggle: ".whatsmyip-toggle"
	    }
	};
 
    $(document).ready(function(){
    	$(".tx_whatsmyip").whatsmyip();
    });
})( jQuery );