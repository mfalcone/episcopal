<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Togethe, We Will</title>

<!-- Mobile Specific Metas -->
<!--meta name="viewport" content="width=device-width, initial-scale=1" /--> 
<meta content='True' name='HandheldFriendly' />
<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

<!--css-->    
<link rel="stylesheet" type="text/css" media="screen" href="css/frontend-main.css" />


<script>
    function preventBehavior(e) {
        e.preventDefault(); 
    };
    
    document.addEventListener("touchmove", preventBehavior, false);
    
    
</script>


<script src="js/kineticjs-5.1.0.js"></script>

<!--jquery-->
<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!--jquery ui-->
<script type="text/javascript" src="js/jquery-ui-1.10.4.js"></script>

<script>
    (function($) {
    $.fn.nodoubletapzoom = function() {
        $(this).bind('touchstart', function preventZoom(e) {
            var t2 = e.timeStamp
            , t1 = $(this).data('lastTouch') || t2
            , dt = t2 - t1
            , fingers = e.originalEvent.touches.length;
            $(this).data('lastTouch', t2);
            if (!dt || dt > 500 || fingers > 1) return; // not double-tap

            e.preventDefault(); // double tap - prevent the zoom
            // also synthesize click events we just swallowed up
            $(this).trigger('click').trigger('click');
        });
    };
    })(jQuery);
    
</script>

<!--scroll-->
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>

<!--icons css-->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<!--favicon-->
<link rel="shortcut icon" href="images/icons/favicon.png"/>

<!--google map-->
<!--script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script-->
<!--script type="text/javascript" src="js/mapa2.js"></script-->

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>



<script src="js/preloadjs-0.4.1.min.js"></script>

<script src="js/app-compress-version.js"></script>
<!--script src="http://ziris.com.ar/api/app-compress-version.js"></script-->