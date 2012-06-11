 /*!
 * Vk style gallery
 * version: 1.0.0
 * @requires fancyBox v2.0 or later
 * @autor Alexey Sharov
 */
(function ($) {
	//Shortcut for fancyBox object
	var F = $.fancybox;

	//Add helper object
	F.helpers.vkstyle = {

        onUpdate: function() {
            $('.layer-overlay').css({
                height:$(window).height()
            });
        },
        beforeShow: function(opts) {
            var overlay = $('.layer-overlay').length ? $('.layer-overlay') : $('<div class=\"layer-overlay\">').css({
                height:$(window).height()
            }).appendTo('body');
            $('body').css('overflow', 'hidden');

            var layer_margin = $('#layer-margin').length ? $('#layer-margin') : $('<div id="layer-margin">').css('height', '100px');
            $('.fancybox-wrap').prependTo(overlay).append(layer_margin);

            var widget = opts.additionalWidget;
            if (widget)
            {
                $('.fancybox-skin').append($('<br/>'));
                $('.fancybox-skin').append($('#'+widget));
                $('.fancybox-skin').append($('<br/>'));
            }
        },
        afterClose: function() {
            $('body').css('overflow', 'auto');
            $('.layer-overlay').hide();
        }
	};

}(jQuery));