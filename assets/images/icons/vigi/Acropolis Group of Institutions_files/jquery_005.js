/***********
 Animates element's number to new number with commas
 Parameters:
 commas (boolean): turn commas on/off (default is true)
 duration (number): how long in ms (default is 1000)
 ease (string): type of easing (default is "swing", others are avaiable from jQuery's easing plugin
 Examples:
 $("#div").animateNumbers(false, 500, "linear"); // half second linear without commas
 $("#div").animateNumbers(true, 2000); // two second swing with commas
 $("#div").animateNumbers(); // one second swing with commas
 This fully expects an element containing an integer and with a attribute named data-stop specifying the number at which the stats needs to stop
 If the number is within copy then separate it with a span and target the span
 Inserts and accounts for commas during animation by default
 ***********/

(function($) {
    $.fn.animateNumbers = function(commas, duration, ease) {
        return this.each(function() {
            var $this = $(this);
            var start = parseInt($this.text().replace(/,/g, ""));
            var stop = parseInt($this.attr('data-stop').replace(/,/g, ""));
            commas = (commas === undefined) ? true : commas;
            $({value: start}).animate({value: stop}, {
                duration: duration == undefined ? 1000 : duration,
                easing: ease == undefined ? "swing" : ease,
                step: function() {
                    $this.text(Math.floor(this.value));
                    if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
                },
                complete: function() {
                    if (parseInt($this.text()) !== stop) {
                        $this.text(stop);
                        if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
                    }
                }
            });
        });
    };
})(jQuery);



/**!
 * easyPieChart
 * Lightweight plugin to render simple, animated and retina optimized pie charts
 *
 * @license Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 * @author Robert Fleischmann <rendro87@gmail.com> (http://robert-fleischmann.de)
 * @version 2.1.1
 **/
!function(a,b){"object"==typeof exports?module.exports=b(require("jquery")):"function"==typeof define&&define.amd?define("EasyPieChart",["jquery"],b):b(a.jQuery)}(this,function(a){var b=function(a,b){var c,d=document.createElement("canvas");"undefined"!=typeof G_vmlCanvasManager&&G_vmlCanvasManager.initElement(d);var e=d.getContext("2d");d.width=d.height=b.size,a.appendChild(d);var f=1;window.devicePixelRatio>1&&(f=window.devicePixelRatio,d.style.width=d.style.height=[b.size,"px"].join(""),d.width=d.height=b.size*f,e.scale(f,f)),e.translate(b.size/2,b.size/2),e.rotate((-0.5+b.rotate/180)*Math.PI);var g=(b.size-b.lineWidth)/2;b.scaleColor&&b.scaleLength&&(g-=b.scaleLength+2),Date.now=Date.now||function(){return+new Date};var h=function(a,b,c){c=Math.min(Math.max(0,c||1),1),e.beginPath(),e.arc(0,0,g,0,2*Math.PI*c,!1),e.strokeStyle=a,e.lineWidth=b,e.stroke()},i=function(){var a,c,d=24;e.lineWidth=1,e.fillStyle=b.scaleColor,e.save();for(var d=24;d>0;--d)0===d%6?(c=b.scaleLength,a=0):(c=.6*b.scaleLength,a=b.scaleLength-c),e.fillRect(-b.size/2+a,0,c,1),e.rotate(Math.PI/12);e.restore()},j=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(a){window.setTimeout(a,1e3/60)}}(),k=function(){b.scaleColor&&i(),b.trackColor&&h(b.trackColor,b.lineWidth)};this.clear=function(){e.clearRect(b.size/-2,b.size/-2,b.size,b.size)},this.draw=function(a){b.scaleColor||b.trackColor?e.getImageData&&e.putImageData?c?e.putImageData(c,0,0):(k(),c=e.getImageData(0,0,b.size*f,b.size*f)):(this.clear(),k()):this.clear(),e.lineCap=b.lineCap;var d;d="function"==typeof b.barColor?b.barColor(a):b.barColor,a>0&&h(d,b.lineWidth,a/100)}.bind(this),this.animate=function(a,c){var d=Date.now();b.onStart(a,c);var e=function(){var f=Math.min(Date.now()-d,b.animate),g=b.easing(this,f,a,c-a,b.animate);this.draw(g),b.onStep(a,c,g),f>=b.animate?b.onStop(a,c):j(e)}.bind(this);j(e)}.bind(this)},c=function(a,c){var d={barColor:"#ef1e25",trackColor:"#f9f9f9",scaleColor:"#dfe0e0",scaleLength:5,lineCap:"round",lineWidth:3,size:110,rotate:0,animate:1e3,easing:function(a,b,c,d,e){return b/=e/2,1>b?d/2*b*b+c:-d/2*(--b*(b-2)-1)+c},onStart:function(){},onStep:function(){},onStop:function(){}};if("undefined"!=typeof b)d.renderer=b;else{if("undefined"==typeof SVGRenderer)throw new Error("Please load either the SVG- or the CanvasRenderer");d.renderer=SVGRenderer}var e={},f=0,g=function(){this.el=a,this.options=e;for(var b in d)d.hasOwnProperty(b)&&(e[b]=c&&"undefined"!=typeof c[b]?c[b]:d[b],"function"==typeof e[b]&&(e[b]=e[b].bind(this)));e.easing="string"==typeof e.easing&&"undefined"!=typeof jQuery&&jQuery.isFunction(jQuery.easing[e.easing])?jQuery.easing[e.easing]:d.easing,this.renderer=new e.renderer(a,e),this.renderer.draw(f),a.dataset&&a.dataset.percent?this.update(parseFloat(a.dataset.percent)):a.getAttribute&&a.getAttribute("data-percent")&&this.update(parseFloat(a.getAttribute("data-percent")))}.bind(this);this.update=function(a){return a=parseFloat(a),e.animate?this.renderer.animate(f,a):this.renderer.draw(a),f=a,this}.bind(this),g()};a.fn.easyPieChart=function(b){return this.each(function(){a.data(this,"easyPieChart")||a.data(this,"easyPieChart",new c(this,b))})}});


/*
 Plugin: jQuery Parallax
 Version 1.1.3
 Author: Ian Lunn
 Twitter: @IanLunn
 Author URL: http://www.ianlunn.co.uk/
 Plugin URL: http://www.ianlunn.co.uk/plugins/jquery-parallax/

 Dual licensed under the MIT and GPL licenses:
 http://www.opensource.org/licenses/mit-license.php
 http://www.gnu.org/licenses/gpl.html
 */

(function ($) {
    var $window = $(window);
    var windowHeight = $window.height();

    $window.resize(function () {
        windowHeight = $window.height();
    });

    $.fn.parallax = function (xpos, speedFactor, outerHeight) {
        var $this = $(this);
        var getHeight;
        var firstTop;
        var paddingTop = 0;

        //get the starting position of each element to have parallax applied to it
        function update() {

            if (outerHeight) {
                getHeight = function (jqo) {
                    return jqo.outerHeight(true);
                };
            } else {
                getHeight = function (jqo) {
                    return jqo.height();
                };
            }

            // setup defaults if arguments aren't specified
            if (arguments.length < 1 || xpos === null) xpos = "50%";
            if (arguments.length < 2 || speedFactor === null) speedFactor = 0.5;
            if (arguments.length < 3 || outerHeight === null) outerHeight = true;

            // function to be called whenever the window is scrolled or resized

            var scrollbar_pos = $window.scrollTop();

            $this.each(function () {
                var $element = $(this);
                var element_top = $element.offset().top;
                var element_height = getHeight($element);

                // Check if totally above or totally below viewport
                if (element_top + element_height < scrollbar_pos || element_top > scrollbar_pos + windowHeight) {
                    return;
                }

                var ypos = element_top - scrollbar_pos;
                var speed = $element.data("parallax-speed");
                if (speed === null)
                    speed = speedFactor;

                $element.css('backgroundPosition', xpos + " " + Math.round(ypos * speed) + "px");

            });
        }

        $window.bind('scroll', update).resize(update);
        update();
    };
})(jQuery);




/*global jQuery */
/*!
 * FitVids 1.0
 *
 * Copyright 2011, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
 * Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
 * Released under the WTFPL license - http://sam.zoy.org/wtfpl/
 *
 * Date: Thu Sept 01 18:00:00 2011 -0500
 */

(function( $ ){

    $.fn.fitVids = function( options ) {
        var settings = {
            customSelector: null
        }

        var div = document.createElement('div'),
            ref = document.getElementsByTagName('base')[0] || document.getElementsByTagName('script')[0];

        div.className = 'fit-vids-style';
        div.innerHTML = '&shy;<style>         \
      .fluid-width-video-wrapper {        \
         width: 100%;                     \
         position: relative;              \
         padding: 0;                      \
      }                                   \
                                          \
      .fluid-width-video-wrapper iframe,  \
      .fluid-width-video-wrapper object,  \
      .fluid-width-video-wrapper embed {  \
         position: absolute;              \
         top: 0;                          \
         left: 0;                         \
         width: 100%;                     \
         height: 100%;                    \
      }                                   \
    </style>';

        ref.parentNode.insertBefore(div,ref);

        if ( options ) {
            $.extend( settings, options );
        }

        return this.each(function(){
            var selectors = [
                "iframe[src*='player.vimeo.com']",
                "iframe[src*='www.youtube.com']",
                "iframe[src*='www.kickstarter.com']",
                "object",
                "embed"
            ];

            if (settings.customSelector) {
                selectors.push(settings.customSelector);
            }

            var $allVideos = $(this).find(selectors.join(','));

            $allVideos.each(function(){
                var $this = $(this);
                if (this.tagName.toLowerCase() == 'embed' && $this.parent('object').length || $this.parent('.fluid-width-video-wrapper').length) { return; }
                var height = ( this.tagName.toLowerCase() == 'object' || $this.attr('height') ) ? $this.attr('height') : $this.height(),
                    width = $this.attr('width') ? $this.attr('width') : $this.width(),
                    aspectRatio = height / width;
                if(!$this.attr('id')){
                    var videoID = 'fitvid' + Math.floor(Math.random()*999999);
                    $this.attr('id', videoID);
                }
                $this.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
                $this.removeAttr('height').removeAttr('width');
            });
        });
    }
})( jQuery );


/*
 * jQuery appear plugin
 *
 * Copyright (c) 2012 Andrey Sidorov
 * licensed under MIT license.
 *
 * https://github.com/morr/jquery.appear/
 *
 * Version: 0.3.3
 */
(function($) {
    var selectors = [];

    var check_binded = false;
    var check_lock = false;
    var defaults = {
        interval: 250,
        force_process: false
    }
    var $window = $(window);

    var $prior_appeared;

    function process() {
        check_lock = false;
        for (var index = 0; index < selectors.length; index++) {
            var $appeared = $(selectors[index]).filter(function() {
                return $(this).is(':appeared');
            });

            $appeared.trigger('appear', [$appeared]);

            if ($prior_appeared) {
                var $disappeared = $prior_appeared.not($appeared);
                $disappeared.trigger('disappear', [$disappeared]);
            }
            $prior_appeared = $appeared;
        }
    }

    // "appeared" custom filter
    $.expr[':']['appeared'] = function(element) {
        var $element = $(element);
        if (!$element.is(':visible')) {
            return false;
        }

        var window_left = $window.scrollLeft();
        var window_top = $window.scrollTop();
        var offset = $element.offset();
        var left = offset.left;
        var top = offset.top;

        if (top + $element.height() >= window_top &&
            top - ($element.data('appear-top-offset') || 0) <= window_top + $window.height() &&
            left + $element.width() >= window_left &&
            left - ($element.data('appear-left-offset') || 0) <= window_left + $window.width()) {
            return true;
        } else {
            return false;
        }
    }

    $.fn.extend({
        // watching for element's appearance in browser viewport
        appear: function(options) {
            var opts = $.extend({}, defaults, options || {});
            var selector = this.selector || this;
            if (!check_binded) {
                var on_check = function() {
                    if (check_lock) {
                        return;
                    }
                    check_lock = true;

                    setTimeout(process, opts.interval);
                };

                $(window).scroll(on_check).resize(on_check);
                check_binded = true;
            }

            if (opts.force_process) {
                setTimeout(process, opts.interval);
            }
            selectors.push(selector);
            return $(selector);
        }
    });

    $.extend({
        // force elements's appearance check
        force_appear: function() {
            if (check_binded) {
                process();
                return true;
            };
            return false;
        }
    });
})(jQuery);


/*!
 * imagesLoaded PACKAGED v3.1.8
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */


/*!
 * EventEmitter v4.2.6 - git.io/ee
 * Oliver Caldwell
 * MIT license
 * @preserve
 */

(function () {


    /**
     * Class for managing events.
     * Can be extended to provide event functionality in other classes.
     *
     * @class EventEmitter Manages event registering and emitting.
     */
    function EventEmitter() {}

    // Shortcuts to improve speed and size
    var proto = EventEmitter.prototype;
    var exports = this;
    var originalGlobalValue = exports.EventEmitter;

    /**
     * Finds the index of the listener for the event in it's storage array.
     *
     * @param {Function[]} listeners Array of listeners to search through.
     * @param {Function} listener Method to look for.
     * @return {Number} Index of the specified listener, -1 if not found
     * @api private
     */
    function indexOfListener(listeners, listener) {
        var i = listeners.length;
        while (i--) {
            if (listeners[i].listener === listener) {
                return i;
            }
        }

        return -1;
    }

    /**
     * Alias a method while keeping the context correct, to allow for overwriting of target method.
     *
     * @param {String} name The name of the target method.
     * @return {Function} The aliased method
     * @api private
     */
    function alias(name) {
        return function aliasClosure() {
            return this[name].apply(this, arguments);
        };
    }

    /**
     * Returns the listener array for the specified event.
     * Will initialise the event object and listener arrays if required.
     * Will return an object if you use a regex search. The object contains keys for each matched event. So /ba[rz]/ might return an object containing bar and baz. But only if you have either defined them with defineEvent or added some listeners to them.
     * Each property in the object response is an array of listener functions.
     *
     * @param {String|RegExp} evt Name of the event to return the listeners from.
     * @return {Function[]|Object} All listener functions for the event.
     */
    proto.getListeners = function getListeners(evt) {
        var events = this._getEvents();
        var response;
        var key;

        // Return a concatenated array of all matching events if
        // the selector is a regular expression.
        if (typeof evt === 'object') {
            response = {};
            for (key in events) {
                if (events.hasOwnProperty(key) && evt.test(key)) {
                    response[key] = events[key];
                }
            }
        }
        else {
            response = events[evt] || (events[evt] = []);
        }

        return response;
    };

    /**
     * Takes a list of listener objects and flattens it into a list of listener functions.
     *
     * @param {Object[]} listeners Raw listener objects.
     * @return {Function[]} Just the listener functions.
     */
    proto.flattenListeners = function flattenListeners(listeners) {
        var flatListeners = [];
        var i;

        for (i = 0; i < listeners.length; i += 1) {
            flatListeners.push(listeners[i].listener);
        }

        return flatListeners;
    };

    /**
     * Fetches the requested listeners via getListeners but will always return the results inside an object. This is mainly for internal use but others may find it useful.
     *
     * @param {String|RegExp} evt Name of the event to return the listeners from.
     * @return {Object} All listener functions for an event in an object.
     */
    proto.getListenersAsObject = function getListenersAsObject(evt) {
        var listeners = this.getListeners(evt);
        var response;

        if (listeners instanceof Array) {
            response = {};
            response[evt] = listeners;
        }

        return response || listeners;
    };

    /**
     * Adds a listener function to the specified event.
     * The listener will not be added if it is a duplicate.
     * If the listener returns true then it will be removed after it is called.
     * If you pass a regular expression as the event name then the listener will be added to all events that match it.
     *
     * @param {String|RegExp} evt Name of the event to attach the listener to.
     * @param {Function} listener Method to be called when the event is emitted. If the function returns true then it will be removed after calling.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.addListener = function addListener(evt, listener) {
        var listeners = this.getListenersAsObject(evt);
        var listenerIsWrapped = typeof listener === 'object';
        var key;

        for (key in listeners) {
            if (listeners.hasOwnProperty(key) && indexOfListener(listeners[key], listener) === -1) {
                listeners[key].push(listenerIsWrapped ? listener : {
                    listener: listener,
                    once: false
                });
            }
        }

        return this;
    };

    /**
     * Alias of addListener
     */
    proto.on = alias('addListener');

    /**
     * Semi-alias of addListener. It will add a listener that will be
     * automatically removed after it's first execution.
     *
     * @param {String|RegExp} evt Name of the event to attach the listener to.
     * @param {Function} listener Method to be called when the event is emitted. If the function returns true then it will be removed after calling.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.addOnceListener = function addOnceListener(evt, listener) {
        return this.addListener(evt, {
            listener: listener,
            once: true
        });
    };

    /**
     * Alias of addOnceListener.
     */
    proto.once = alias('addOnceListener');

    /**
     * Defines an event name. This is required if you want to use a regex to add a listener to multiple events at once. If you don't do this then how do you expect it to know what event to add to? Should it just add to every possible match for a regex? No. That is scary and bad.
     * You need to tell it what event names should be matched by a regex.
     *
     * @param {String} evt Name of the event to create.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.defineEvent = function defineEvent(evt) {
        this.getListeners(evt);
        return this;
    };

    /**
     * Uses defineEvent to define multiple events.
     *
     * @param {String[]} evts An array of event names to define.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.defineEvents = function defineEvents(evts) {
        for (var i = 0; i < evts.length; i += 1) {
            this.defineEvent(evts[i]);
        }
        return this;
    };

    /**
     * Removes a listener function from the specified event.
     * When passed a regular expression as the event name, it will remove the listener from all events that match it.
     *
     * @param {String|RegExp} evt Name of the event to remove the listener from.
     * @param {Function} listener Method to remove from the event.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.removeListener = function removeListener(evt, listener) {
        var listeners = this.getListenersAsObject(evt);
        var index;
        var key;

        for (key in listeners) {
            if (listeners.hasOwnProperty(key)) {
                index = indexOfListener(listeners[key], listener);

                if (index !== -1) {
                    listeners[key].splice(index, 1);
                }
            }
        }

        return this;
    };

    /**
     * Alias of removeListener
     */
    proto.off = alias('removeListener');

    /**
     * Adds listeners in bulk using the manipulateListeners method.
     * If you pass an object as the second argument you can add to multiple events at once. The object should contain key value pairs of events and listeners or listener arrays. You can also pass it an event name and an array of listeners to be added.
     * You can also pass it a regular expression to add the array of listeners to all events that match it.
     * Yeah, this function does quite a bit. That's probably a bad thing.
     *
     * @param {String|Object|RegExp} evt An event name if you will pass an array of listeners next. An object if you wish to add to multiple events at once.
     * @param {Function[]} [listeners] An optional array of listener functions to add.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.addListeners = function addListeners(evt, listeners) {
        // Pass through to manipulateListeners
        return this.manipulateListeners(false, evt, listeners);
    };

    /**
     * Removes listeners in bulk using the manipulateListeners method.
     * If you pass an object as the second argument you can remove from multiple events at once. The object should contain key value pairs of events and listeners or listener arrays.
     * You can also pass it an event name and an array of listeners to be removed.
     * You can also pass it a regular expression to remove the listeners from all events that match it.
     *
     * @param {String|Object|RegExp} evt An event name if you will pass an array of listeners next. An object if you wish to remove from multiple events at once.
     * @param {Function[]} [listeners] An optional array of listener functions to remove.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.removeListeners = function removeListeners(evt, listeners) {
        // Pass through to manipulateListeners
        return this.manipulateListeners(true, evt, listeners);
    };

    /**
     * Edits listeners in bulk. The addListeners and removeListeners methods both use this to do their job. You should really use those instead, this is a little lower level.
     * The first argument will determine if the listeners are removed (true) or added (false).
     * If you pass an object as the second argument you can add/remove from multiple events at once. The object should contain key value pairs of events and listeners or listener arrays.
     * You can also pass it an event name and an array of listeners to be added/removed.
     * You can also pass it a regular expression to manipulate the listeners of all events that match it.
     *
     * @param {Boolean} remove True if you want to remove listeners, false if you want to add.
     * @param {String|Object|RegExp} evt An event name if you will pass an array of listeners next. An object if you wish to add/remove from multiple events at once.
     * @param {Function[]} [listeners] An optional array of listener functions to add/remove.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.manipulateListeners = function manipulateListeners(remove, evt, listeners) {
        var i;
        var value;
        var single = remove ? this.removeListener : this.addListener;
        var multiple = remove ? this.removeListeners : this.addListeners;

        // If evt is an object then pass each of it's properties to this method
        if (typeof evt === 'object' && !(evt instanceof RegExp)) {
            for (i in evt) {
                if (evt.hasOwnProperty(i) && (value = evt[i])) {
                    // Pass the single listener straight through to the singular method
                    if (typeof value === 'function') {
                        single.call(this, i, value);
                    }
                    else {
                        // Otherwise pass back to the multiple function
                        multiple.call(this, i, value);
                    }
                }
            }
        }
        else {
            // So evt must be a string
            // And listeners must be an array of listeners
            // Loop over it and pass each one to the multiple method
            i = listeners.length;
            while (i--) {
                single.call(this, evt, listeners[i]);
            }
        }

        return this;
    };

    /**
     * Removes all listeners from a specified event.
     * If you do not specify an event then all listeners will be removed.
     * That means every event will be emptied.
     * You can also pass a regex to remove all events that match it.
     *
     * @param {String|RegExp} [evt] Optional name of the event to remove all listeners for. Will remove from every event if not passed.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.removeEvent = function removeEvent(evt) {
        var type = typeof evt;
        var events = this._getEvents();
        var key;

        // Remove different things depending on the state of evt
        if (type === 'string') {
            // Remove all listeners for the specified event
            delete events[evt];
        }
        else if (type === 'object') {
            // Remove all events matching the regex.
            for (key in events) {
                if (events.hasOwnProperty(key) && evt.test(key)) {
                    delete events[key];
                }
            }
        }
        else {
            // Remove all listeners in all events
            delete this._events;
        }

        return this;
    };

    /**
     * Alias of removeEvent.
     *
     * Added to mirror the node API.
     */
    proto.removeAllListeners = alias('removeEvent');

    /**
     * Emits an event of your choice.
     * When emitted, every listener attached to that event will be executed.
     * If you pass the optional argument array then those arguments will be passed to every listener upon execution.
     * Because it uses `apply`, your array of arguments will be passed as if you wrote them out separately.
     * So they will not arrive within the array on the other side, they will be separate.
     * You can also pass a regular expression to emit to all events that match it.
     *
     * @param {String|RegExp} evt Name of the event to emit and execute listeners for.
     * @param {Array} [args] Optional array of arguments to be passed to each listener.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.emitEvent = function emitEvent(evt, args) {
        var listeners = this.getListenersAsObject(evt);
        var listener;
        var i;
        var key;
        var response;

        for (key in listeners) {
            if (listeners.hasOwnProperty(key)) {
                i = listeners[key].length;

                while (i--) {
                    // If the listener returns true then it shall be removed from the event
                    // The function is executed either with a basic call or an apply if there is an args array
                    listener = listeners[key][i];

                    if (listener.once === true) {
                        this.removeListener(evt, listener.listener);
                    }

                    response = listener.listener.apply(this, args || []);

                    if (response === this._getOnceReturnValue()) {
                        this.removeListener(evt, listener.listener);
                    }
                }
            }
        }

        return this;
    };

    /**
     * Alias of emitEvent
     */
    proto.trigger = alias('emitEvent');

    /**
     * Subtly different from emitEvent in that it will pass its arguments on to the listeners, as opposed to taking a single array of arguments to pass on.
     * As with emitEvent, you can pass a regex in place of the event name to emit to all events that match it.
     *
     * @param {String|RegExp} evt Name of the event to emit and execute listeners for.
     * @param {...*} Optional additional arguments to be passed to each listener.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.emit = function emit(evt) {
        var args = Array.prototype.slice.call(arguments, 1);
        return this.emitEvent(evt, args);
    };

    /**
     * Sets the current value to check against when executing listeners. If a
     * listeners return value matches the one set here then it will be removed
     * after execution. This value defaults to true.
     *
     * @param {*} value The new value to check for when executing listeners.
     * @return {Object} Current instance of EventEmitter for chaining.
     */
    proto.setOnceReturnValue = function setOnceReturnValue(value) {
        this._onceReturnValue = value;
        return this;
    };

    /**
     * Fetches the current value to check against when executing listeners. If
     * the listeners return value matches this one then it should be removed
     * automatically. It will return true by default.
     *
     * @return {*|Boolean} The current value to check for or the default, true.
     * @api private
     */
    proto._getOnceReturnValue = function _getOnceReturnValue() {
        if (this.hasOwnProperty('_onceReturnValue')) {
            return this._onceReturnValue;
        }
        else {
            return true;
        }
    };

    /**
     * Fetches the events object and creates one if required.
     *
     * @return {Object} The events storage object.
     * @api private
     */
    proto._getEvents = function _getEvents() {
        return this._events || (this._events = {});
    };

    /**
     * Reverts the global {@link EventEmitter} to its previous value and returns a reference to this version.
     *
     * @return {Function} Non conflicting EventEmitter class.
     */
    EventEmitter.noConflict = function noConflict() {
        exports.EventEmitter = originalGlobalValue;
        return EventEmitter;
    };

    // Expose the class either via AMD, CommonJS or the global object
    if (typeof define === 'function' && define.amd) {
        define('eventEmitter/EventEmitter',[],function () {
            return EventEmitter;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = EventEmitter;
    }
    else {
        this.EventEmitter = EventEmitter;
    }
}.call(this));

/*!
 * eventie v1.0.4
 * event binding helper
 *   eventie.bind( elem, 'click', myFn )
 *   eventie.unbind( elem, 'click', myFn )
 */

/*jshint browser: true, undef: true, unused: true */
/*global define: false */

( function( window ) {



    var docElem = document.documentElement;

    var bind = function() {};

    function getIEEvent( obj ) {
        var event = window.event;
        // add event.target
        event.target = event.target || event.srcElement || obj;
        return event;
    }

    if ( docElem.addEventListener ) {
        bind = function( obj, type, fn ) {
            obj.addEventListener( type, fn, false );
        };
    } else if ( docElem.attachEvent ) {
        bind = function( obj, type, fn ) {
            obj[ type + fn ] = fn.handleEvent ?
                function() {
                    var event = getIEEvent( obj );
                    fn.handleEvent.call( fn, event );
                } :
                function() {
                    var event = getIEEvent( obj );
                    fn.call( obj, event );
                };
            obj.attachEvent( "on" + type, obj[ type + fn ] );
        };
    }

    var unbind = function() {};

    if ( docElem.removeEventListener ) {
        unbind = function( obj, type, fn ) {
            obj.removeEventListener( type, fn, false );
        };
    } else if ( docElem.detachEvent ) {
        unbind = function( obj, type, fn ) {
            obj.detachEvent( "on" + type, obj[ type + fn ] );
            try {
                delete obj[ type + fn ];
            } catch ( err ) {
                // can't delete window object properties
                obj[ type + fn ] = undefined;
            }
        };
    }

    var eventie = {
        bind: bind,
        unbind: unbind
    };

// transport
    if ( typeof define === 'function' && define.amd ) {
        // AMD
        define( 'eventie/eventie',eventie );
    } else {
        // browser global
        window.eventie = eventie;
    }

})( this );

/*!
 * imagesLoaded v3.1.8
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */

( function( window, factory ) {
    // universal module definition

    /*global define: false, module: false, require: false */

    if ( typeof define === 'function' && define.amd ) {
        // AMD
        define( [
            'eventEmitter/EventEmitter',
            'eventie/eventie'
        ], function( EventEmitter, eventie ) {
            return factory( window, EventEmitter, eventie );
        });
    } else if ( typeof exports === 'object' ) {
        // CommonJS
        module.exports = factory(
            window,
            require('wolfy87-eventemitter'),
            require('eventie')
        );
    } else {
        // browser global
        window.imagesLoaded = factory(
            window,
            window.EventEmitter,
            window.eventie
        );
    }

})( window,

// --------------------------  factory -------------------------- //

    function factory( window, EventEmitter, eventie ) {



        var $ = window.jQuery;
        var console = window.console;
        var hasConsole = typeof console !== 'undefined';

// -------------------------- helpers -------------------------- //

// extend objects
        function extend( a, b ) {
            for ( var prop in b ) {
                a[ prop ] = b[ prop ];
            }
            return a;
        }

        var objToString = Object.prototype.toString;
        function isArray( obj ) {
            return objToString.call( obj ) === '[object Array]';
        }

// turn element or nodeList into an array
        function makeArray( obj ) {
            var ary = [];
            if ( isArray( obj ) ) {
                // use object if already an array
                ary = obj;
            } else if ( typeof obj.length === 'number' ) {
                // convert nodeList to array
                for ( var i=0, len = obj.length; i < len; i++ ) {
                    ary.push( obj[i] );
                }
            } else {
                // array of single index
                ary.push( obj );
            }
            return ary;
        }

        // -------------------------- imagesLoaded -------------------------- //

        /**
         * @param {Array, Element, NodeList, String} elem
         * @param {Object or Function} options - if function, use as callback
         * @param {Function} onAlways - callback function
         */
        function ImagesLoaded( elem, options, onAlways ) {
            // coerce ImagesLoaded() without new, to be new ImagesLoaded()
            if ( !( this instanceof ImagesLoaded ) ) {
                return new ImagesLoaded( elem, options );
            }
            // use elem as selector string
            if ( typeof elem === 'string' ) {
                elem = document.querySelectorAll( elem );
            }

            this.elements = makeArray( elem );
            this.options = extend( {}, this.options );

            if ( typeof options === 'function' ) {
                onAlways = options;
            } else {
                extend( this.options, options );
            }

            if ( onAlways ) {
                this.on( 'always', onAlways );
            }

            this.getImages();

            if ( $ ) {
                // add jQuery Deferred object
                this.jqDeferred = new $.Deferred();
            }

            // HACK check async to allow time to bind listeners
            var _this = this;
            setTimeout( function() {
                _this.check();
            });
        }

        ImagesLoaded.prototype = new EventEmitter();

        ImagesLoaded.prototype.options = {};

        ImagesLoaded.prototype.getImages = function() {
            this.images = [];

            // filter & find items if we have an item selector
            for ( var i=0, len = this.elements.length; i < len; i++ ) {
                var elem = this.elements[i];
                // filter siblings
                if ( elem.nodeName === 'IMG' ) {
                    this.addImage( elem );
                }
                // find children
                // no non-element nodes, #143
                var nodeType = elem.nodeType;
                if ( !nodeType || !( nodeType === 1 || nodeType === 9 || nodeType === 11 ) ) {
                    continue;
                }
                var childElems = elem.querySelectorAll('img');
                // concat childElems to filterFound array
                for ( var j=0, jLen = childElems.length; j < jLen; j++ ) {
                    var img = childElems[j];
                    this.addImage( img );
                }
            }
        };

        /**
         * @param {Image} img
         */
        ImagesLoaded.prototype.addImage = function( img ) {
            var loadingImage = new LoadingImage( img );
            this.images.push( loadingImage );
        };

        ImagesLoaded.prototype.check = function() {
            var _this = this;
            var checkedCount = 0;
            var length = this.images.length;
            this.hasAnyBroken = false;
            // complete if no images
            if ( !length ) {
                this.complete();
                return;
            }

            function onConfirm( image, message ) {
                if ( _this.options.debug && hasConsole ) {
                    console.log( 'confirm', image, message );
                }

                _this.progress( image );
                checkedCount++;
                if ( checkedCount === length ) {
                    _this.complete();
                }
                return true; // bind once
            }

            for ( var i=0; i < length; i++ ) {
                var loadingImage = this.images[i];
                loadingImage.on( 'confirm', onConfirm );
                loadingImage.check();
            }
        };

        ImagesLoaded.prototype.progress = function( image ) {
            this.hasAnyBroken = this.hasAnyBroken || !image.isLoaded;
            // HACK - Chrome triggers event before object properties have changed. #83
            var _this = this;
            setTimeout( function() {
                _this.emit( 'progress', _this, image );
                if ( _this.jqDeferred && _this.jqDeferred.notify ) {
                    _this.jqDeferred.notify( _this, image );
                }
            });
        };

        ImagesLoaded.prototype.complete = function() {
            var eventName = this.hasAnyBroken ? 'fail' : 'done';
            this.isComplete = true;
            var _this = this;
            // HACK - another setTimeout so that confirm happens after progress
            setTimeout( function() {
                _this.emit( eventName, _this );
                _this.emit( 'always', _this );
                if ( _this.jqDeferred ) {
                    var jqMethod = _this.hasAnyBroken ? 'reject' : 'resolve';
                    _this.jqDeferred[ jqMethod ]( _this );
                }
            });
        };

        // -------------------------- jquery -------------------------- //

        if ( $ ) {
            $.fn.imagesLoaded = function( options, callback ) {
                var instance = new ImagesLoaded( this, options, callback );
                return instance.jqDeferred.promise( $(this) );
            };
        }


        // --------------------------  -------------------------- //

        function LoadingImage( img ) {
            this.img = img;
        }

        LoadingImage.prototype = new EventEmitter();

        LoadingImage.prototype.check = function() {
            // first check cached any previous images that have same src
            var resource = cache[ this.img.src ] || new Resource( this.img.src );
            if ( resource.isConfirmed ) {
                this.confirm( resource.isLoaded, 'cached was confirmed' );
                return;
            }

            // If complete is true and browser supports natural sizes,
            // try to check for image status manually.
            if ( this.img.complete && this.img.naturalWidth !== undefined ) {
                // report based on naturalWidth
                this.confirm( this.img.naturalWidth !== 0, 'naturalWidth' );
                return;
            }

            // If none of the checks above matched, simulate loading on detached element.
            var _this = this;
            resource.on( 'confirm', function( resrc, message ) {
                _this.confirm( resrc.isLoaded, message );
                return true;
            });

            resource.check();
        };

        LoadingImage.prototype.confirm = function( isLoaded, message ) {
            this.isLoaded = isLoaded;
            this.emit( 'confirm', this, message );
        };

        // -------------------------- Resource -------------------------- //

        // Resource checks each src, only once
        // separate class from LoadingImage to prevent memory leaks. See #115

        var cache = {};

        function Resource( src ) {
            this.src = src;
            // add to cache
            cache[ src ] = this;
        }

        Resource.prototype = new EventEmitter();

        Resource.prototype.check = function() {
            // only trigger checking once
            if ( this.isChecked ) {
                return;
            }
            // simulate loading on detached element
            var proxyImage = new Image();
            eventie.bind( proxyImage, 'load', this );
            eventie.bind( proxyImage, 'error', this );
            proxyImage.src = this.src;
            // set flag
            this.isChecked = true;
        };

        // ----- events ----- //

        // trigger specified handler for event type
        Resource.prototype.handleEvent = function( event ) {
            var method = 'on' + event.type;
            if ( this[ method ] ) {
                this[ method ]( event );
            }
        };

        Resource.prototype.onload = function( event ) {
            this.confirm( true, 'onload' );
            this.unbindProxyEvents( event );
        };

        Resource.prototype.onerror = function( event ) {
            this.confirm( false, 'onerror' );
            this.unbindProxyEvents( event );
        };

        // ----- confirm ----- //

        Resource.prototype.confirm = function( isLoaded, message ) {
            this.isConfirmed = true;
            this.isLoaded = isLoaded;
            this.emit( 'confirm', this, message );
        };

        Resource.prototype.unbindProxyEvents = function( event ) {
            eventie.unbind( event.target, 'load', this );
            eventie.unbind( event.target, 'error', this );
        };

        // -----  ----- //

        return ImagesLoaded;

    });

/*!
 * jQuery Smooth Scroll - v1.5.3 - 2014-10-15
 * https://github.com/kswedberg/jquery-smooth-scroll
 * Copyright (c) 2014 Karl Swedberg
 * Licensed MIT (https://github.com/kswedberg/jquery-smooth-scroll/blob/master/LICENSE-MIT)
 */

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {

    var version = '1.5.3',
        optionOverrides = {},
        defaults = {
            exclude: [],
            excludeWithin:[],
            offset: 0,

            // one of 'top' or 'left'
            direction: 'top',

            // jQuery set of elements you wish to scroll (for $.smoothScroll).
            //  if null (default), $('html, body').firstScrollable() is used.
            scrollElement: null,

            // only use if you want to override default behavior
            scrollTarget: null,

            // fn(opts) function to be called before scrolling occurs.
            // `this` is the element(s) being scrolled
            beforeScroll: function() {},

            // fn(opts) function to be called after scrolling occurs.
            // `this` is the triggering element
            afterScroll: function() {},
            easing: 'swing',
            speed: 400,

            // coefficient for "auto" speed
            autoCoefficient: 2,

            // $.fn.smoothScroll only: whether to prevent the default click action
            preventDefault: true
        },

        getScrollable = function(opts) {
            var scrollable = [],
                scrolled = false,
                dir = opts.dir && opts.dir === 'left' ? 'scrollLeft' : 'scrollTop';

            this.each(function() {

                if (this === document || this === window) { return; }
                var el = $(this);
                if ( el[dir]() > 0 ) {
                    scrollable.push(this);
                } else {
                    // if scroll(Top|Left) === 0, nudge the element 1px and see if it moves
                    el[dir](1);
                    scrolled = el[dir]() > 0;
                    if ( scrolled ) {
                        scrollable.push(this);
                    }
                    // then put it back, of course
                    el[dir](0);
                }
            });

            // If no scrollable elements, fall back to <body>,
            // if it's in the jQuery collection
            // (doing this because Safari sets scrollTop async,
            // so can't set it to 1 and immediately get the value.)
            if (!scrollable.length) {
                this.each(function() {
                    if (this.nodeName === 'BODY') {
                        scrollable = [this];
                    }
                });
            }

            // Use the first scrollable element if we're calling firstScrollable()
            if ( opts.el === 'first' && scrollable.length > 1 ) {
                scrollable = [ scrollable[0] ];
            }

            return scrollable;
        };

    $.fn.extend({
        scrollable: function(dir) {
            var scrl = getScrollable.call(this, {dir: dir});
            return this.pushStack(scrl);
        },
        firstScrollable: function(dir) {
            var scrl = getScrollable.call(this, {el: 'first', dir: dir});
            return this.pushStack(scrl);
        },

        smoothScroll: function(options, extra) {
            options = options || {};

            if ( options === 'options' ) {
                if ( !extra ) {
                    return this.first().data('ssOpts');
                }
                return this.each(function() {
                    var $this = $(this),
                        opts = $.extend($this.data('ssOpts') || {}, extra);

                    $(this).data('ssOpts', opts);
                });
            }

            var opts = $.extend({}, $.fn.smoothScroll.defaults, options),
                locationPath = $.smoothScroll.filterPath(location.pathname);

            this
                .unbind('click.smoothscroll')
                .bind('click.smoothscroll', function(event) {
                    var link = this,
                        $link = $(this),
                        thisOpts = $.extend({}, opts, $link.data('ssOpts') || {}),
                        exclude = opts.exclude,
                        excludeWithin = thisOpts.excludeWithin,
                        elCounter = 0, ewlCounter = 0,
                        include = true,
                        clickOpts = {},
                        hostMatch = ((location.hostname === link.hostname) || !link.hostname),
                        pathMatch = thisOpts.scrollTarget || ( $.smoothScroll.filterPath(link.pathname) === locationPath ),
                        thisHash = escapeSelector(link.hash);

                    if ( !thisOpts.scrollTarget && (!hostMatch || !pathMatch || !thisHash) ) {
                        include = false;
                    } else {
                        while (include && elCounter < exclude.length) {
                            if ($link.is(escapeSelector(exclude[elCounter++]))) {
                                include = false;
                            }
                        }
                        while ( include && ewlCounter < excludeWithin.length ) {
                            if ($link.closest(excludeWithin[ewlCounter++]).length) {
                                include = false;
                            }
                        }
                    }

                    if ( include ) {

                        if ( thisOpts.preventDefault ) {
                            event.preventDefault();
                        }

                        $.extend( clickOpts, thisOpts, {
                            scrollTarget: thisOpts.scrollTarget || thisHash,
                            link: link
                        });

                        $.smoothScroll( clickOpts );
                    }
                });

            return this;
        }
    });

    $.smoothScroll = function(options, px) {
        if ( options === 'options' && typeof px === 'object' ) {
            return $.extend(optionOverrides, px);
        }
        var opts, $scroller, scrollTargetOffset, speed, delta,
            scrollerOffset = 0,
            offPos = 'offset',
            scrollDir = 'scrollTop',
            aniProps = {},
            aniOpts = {};

        if (typeof options === 'number') {
            opts = $.extend({link: null}, $.fn.smoothScroll.defaults, optionOverrides);
            scrollTargetOffset = options;
        } else {
            opts = $.extend({link: null}, $.fn.smoothScroll.defaults, options || {}, optionOverrides);
            if (opts.scrollElement) {
                offPos = 'position';
                if (opts.scrollElement.css('position') === 'static') {
                    opts.scrollElement.css('position', 'relative');
                }
            }
        }

        scrollDir = opts.direction === 'left' ? 'scrollLeft' : scrollDir;

        if ( opts.scrollElement ) {
            $scroller = opts.scrollElement;
            if ( !(/^(?:HTML|BODY)$/).test($scroller[0].nodeName) ) {
                scrollerOffset = $scroller[scrollDir]();
            }
        } else {
            $scroller = $('html, body').firstScrollable(opts.direction);
        }

        // beforeScroll callback function must fire before calculating offset
        opts.beforeScroll.call($scroller, opts);

        scrollTargetOffset = (typeof options === 'number') ? options :
            px ||
                ( $(opts.scrollTarget)[offPos]() &&
                    $(opts.scrollTarget)[offPos]()[opts.direction] ) ||
                0;

        aniProps[scrollDir] = scrollTargetOffset + scrollerOffset + opts.offset;
        speed = opts.speed;

        // automatically calculate the speed of the scroll based on distance / coefficient
        if (speed === 'auto') {

            // $scroller.scrollTop() is position before scroll, aniProps[scrollDir] is position after
            // When delta is greater, speed will be greater.
            delta = aniProps[scrollDir] - $scroller.scrollTop();
            if(delta < 0) {
                delta *= -1;
            }

            // Divide the delta by the coefficient
            speed = delta / opts.autoCoefficient;
        }

        aniOpts = {
            duration: speed,
            easing: opts.easing,
            complete: function() {
                opts.afterScroll.call(opts.link, opts);
            }
        };

        if (opts.step) {
            aniOpts.step = opts.step;
        }

        if ($scroller.length) {
            $scroller.stop().animate(aniProps, aniOpts);
        } else {
            opts.afterScroll.call(opts.link, opts);
        }
    };

    $.smoothScroll.version = version;
    $.smoothScroll.filterPath = function(string) {
        string = string || '';
        return string
            .replace(/^\//,'')
            .replace(/(?:index|default).[a-zA-Z]{3,4}$/,'')
            .replace(/\/$/,'');
    };

    // default options
    $.fn.smoothScroll.defaults = defaults;

    function escapeSelector (str) {
        return str.replace(/(:|\.)/g,'\\$1');
    }

}));

