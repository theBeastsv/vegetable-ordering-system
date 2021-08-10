
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems !  
The following part can be removed on Server for On Demand Loading) -->  
<script type="text/javascript" src="assets/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="js/mastermain.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        "use strict";

        var revapi;
        if ( $("#rev_slider").revolution == undefined ) {
            revslider_showDoubleJqueryError("#rev_slider");
        } else {
            revapi = $("#rev_slider").show().revolution({
                sliderType: "standard",
                jsFileLocation: "assets/js/",
                sliderLayout: "auto",
                dottedOverlay:"none",
                delay: 15000,
                navigation: {
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on"
                    },
                    arrows: {
                        style: "hebe",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        hide_under: 992,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 0,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "hades",
                        hide_onleave: false,
                        hide_under: 768,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 25,
                        space: 8,
                        tmp: '<span class="tp-bullet-image"></span>'
                    }
                },
                responsiveLevels: [1200,992,768,480],
                gridwidth: [1170,970,750,480],
                gridheight: [560,500,440,340],
                lazyType: "smart",
                spinner: "spinner2",
                parallax: {
                    type: "on",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2,3,4,5,6,7,12,16,10,50],
                    disable_onmobile: "on"
                },
                debugMode: false
            });
        }
    });
</script>
