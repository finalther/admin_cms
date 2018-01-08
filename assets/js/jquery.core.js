/**
 * Theme: AdminUX Panel Admin Template
 * Author: SRGIT
 * Module/App: Core js
 */
! function($) {
    "use strict";


    /*****Load function start*****/
    $(window).on("load", function() {


        $(window).on("scroll", function() {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').on('click', function() {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        $('#back-to-top').tooltip('show');

    });

    /**
        Portlet Widget
        */
    var Portlet = function() {
        this.$body = $("body"),
            this.$portletIdentifier = ".portlet",
            this.$portletCloser = '.portlet a[data-toggle="remove"]',
            this.$portletRefresher = '.portlet a[data-toggle="reload"]'
    };

    //on init
    Portlet.prototype.init = function() {
            // Panel closest
            var $this = this;
            $(document).on("click", this.$portletCloser, function(ev) {
                ev.preventDefault();
                var $portlet = $(this).closest($this.$portletIdentifier);
                var $portlet_parent = $portlet.parent();
                $portlet.remove();
                if ($portlet_parent.children().length == 0) {
                    $portlet_parent.remove();
                }
            });

            // Panel Reload
            $(document).on("click", this.$portletRefresher, function(ev) {
                ev.preventDefault();
                var $portlet = $(this).closest($this.$portletIdentifier);
                // This is just a simulation, nothing is going to be reloaded
                $portlet.append('<div class="panel-disabled"><div class="sk-double-bounce"><div class="sk-child sk-double-bounce1"></div><div class="sk-child sk-double-bounce2"></div> </div> </div>');
                var $pd = $portlet.find('.panel-disabled');
                setTimeout(function() {
                    $pd.fadeOut('fast', function() {
                        $pd.remove();
                    });
                }, 500 + 300 * (Math.random() * 5));
            });
        },
        //
        $.Portlet = new Portlet, $.Portlet.Constructor = Portlet

}(window.jQuery),

/**
 *Components
 */

function($) {
    "use strict";

    var Components = function() {};

    //initializing tooltip
    Components.prototype.initTooltipPlugin = function() {
            $.fn.tooltip && $('[data-toggle="tooltip"]').tooltip()
        },

        //initializing popover
        Components.prototype.initPopoverPlugin = function() {
            $.fn.popover && $('[data-toggle="popover"]').popover()
        },

        //initializing custom modal
        Components.prototype.initCustomModalPlugin = function() {
            $('[data-plugin="custommodal"]').on('click', function(e) {
                Custombox.open({
                    target: $(this).attr("href"),
                    effect: $(this).attr("data-animation"),
                    overlaySpeed: $(this).attr("data-overlaySpeed"),
                    overlayColor: $(this).attr("data-overlayColor")
                });
                e.preventDefault();
            });
        },

        //initializing Slimscroll
        Components.prototype.initSlimScrollPlugin = function() {
            //You can change the color of scroll bar here
            $.fn.slimScroll && $(".slimscroll-alt").slimScroll({
                position: 'right',
                size: "5px",
                color: '#98a6ad',
                wheelStep: 10
            });
        },

        //range slider
        Components.prototype.initRangeSlider = function() {
            $.fn.slider && $('[data-plugin="range-slider"]').slider({});
        },

        /* -------------
         * Form related controls
         */
        //switch
        Components.prototype.initSwitchery = function() {
            $('[data-plugin="switchery"]').each(function(idx, obj) {
                new Switchery($(this)[0], $(this).data());
            });
        },

        Components.prototype.initKnob = function() {
            $('[data-plugin="knob"]').each(function(idx, obj) {
                $(this).knob();
            });
        },

        Components.prototype.initCounterUp = function() {
            var delay = $(this).attr('data-delay') ? $(this).attr('data-delay') : 100; //default is 100
            var time = $(this).attr('data-time') ? $(this).attr('data-time') : 1200; //default is 1200
            $('[data-plugin="counterup"]').each(function(idx, obj) {
                $(this).counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        },

        //initilizing
        Components.prototype.init = function() {
            var $this = this;
            this.initTooltipPlugin(),
                this.initPopoverPlugin(),
                this.initSlimScrollPlugin(),
                this.initCustomModalPlugin(),
                this.initRangeSlider(),
                this.initSwitchery(),
                this.initKnob(),
                this.initCounterUp(),
                //creating portles
                $.Portlet.init();
        },

        $.Components = new Components, $.Components.Constructor = Components

}(window.jQuery),
//initializing main application module
function($) {
    "use strict";
    $.Components.init();
}(window.jQuery);


if ($(window).width() <= 1024) {
    $(function() {
        $('.button-menu-mobile').on('click', function() {
            $(this).find('i').toggleClass('dripicons-menu dripicons-menu');
        });
    });
}

jQuery(document).ready(function($) {
    var alterClass = function() {
        var ww = document.body.clientWidth;
        if (ww < 1300) {
            $('body').addClass('enlarged');
        } else if (ww >= 1301) {
            $('body').removeClass('enlarged');
        };
    };
    $(window).resize(function() {
        alterClass();
    });
    //Fire it when the page first loads:
    alterClass();
});

/* ---------------------------------------------
Preloader - Home page
 --------------------------------------------- */
jQuery(window).on('load', function() {
    // will first fade out the loading animation
    jQuery("#status").fadeOut();
    // will fade out the whole DIV that covers the website.
    jQuery("#preloader").delay(500).fadeOut("slow");

})