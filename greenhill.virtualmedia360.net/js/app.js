Kinetic.pixelRatio = 1;

flrplan_selected = getFloorPlanSize(current_bg_name);

stage = new Kinetic.Stage({
  container: 'container',
  width: $(window).width(),
  height: $(window).height()  
  //draggable: true,
});

//capa
layer = new Kinetic.Layer();

//grupo
group = new Kinetic.Group({
    draggable: true,
    dragBoundFunc: function(pos) 
    {            
        var currentStageWidth  = bgImageWidth*scale;
        var currentStageHeight = bgImageHeight*scale;
        
        
        if (pos.y > 0)
        {
            newY = 0;
        }   
        else if ( (pos.y + currentStageHeight) < $(window).height())
        {
            newY = $(window).height() - currentStageHeight;
        }   
        else
        {
            newY = pos.y;
        }   

        if (pos.x > 0)
        {
            newX = 0;
        }   
        else if ( (pos.x + currentStageWidth) < $(window).width())
        {
            newX = $(window).width() - currentStageWidth;
        }   
        else
        {
            newX = pos.x;
        }   

        return {
            x: newX,
            y: newY
        };
    }
});


$('.close_pop').click(function(){
    closeInfo();    
});

// zoom by clicking
$('.zoom-controls a.forward').click(function()
{
    var delta = -3;
    
    executeZoom(delta, 50);
});

$('.zoom-controls a.backward').click(function()
{
    var delta = 3;
    
    executeZoom(delta, 50);
});

 // bind mouse wheel to affect scale
$('#container').bind('mousewheel', function(event, delta) 
{
    // mozilla fix...
    if (event.originalEvent.detail){
        delta = event.originalEvent.detail;
    }
    else{
        delta = event.originalEvent.wheelDelta;
    }
  
    if (delta !== 0) {
          event.preventDefault();
    }
    
    executeZoom(delta, 50);    
});

/*
group.on('dragstart', function() 
{  
});
group.on('dragmove', function() 
{
});
group.on('dragend', function() 
{  
});
*/
/*
// multi touch zoom
stage.getContent().addEventListener("touchstart", function(evt)
{
    evt.preventDefault();
    
}, false);

stage.getContent().addEventListener('touchmove', function(evt) 
{
    evt.preventDefault();
    
    multiTouchZoom(evt);
    
}, false);

stage.getContent().addEventListener('touchend', function() 
{
    evt.preventDefault();
    
    touch_lastDist = 0;
    
}, false);

*/


/*stage.on("touchstart", function(evt)
{
    //evt.preventDefault();
    
});

stage.on('touchmove', function(evt) 
{
    evt.preventDefault();
    
    multiTouchZoom(evt);    
    
});

stage.on('touchend', function() 
{
    //evt.preventDefault();
    
    
    
});*/




//fire this function when preload is finished
handleAssetsLoad = function ( evt ) 
{    
    //more-info icon image    
    moreIconImg = assets.getResult('pointer-icon');

    //background      
    bgImgObj      = assets.getResult('background');
    
    bgImageWidth  = 1680; // forced bgImgObj.width;
    bgImageHeight = 920; // forced bgImgObj.height;
       
    bg = new Kinetic.Image(
    {    
        x:0,
        y:0,
        image: bgImgObj,
        width: bgImageWidth,
        height: bgImageHeight
        //draggable: true
    });
    //bg.setZIndex(0);    
        
    group.add(bg);    
        
    initializeAreas();

    layer.add(group);
    stage.add(layer);

    // On load we set stage size based on window size
    setStageWidth();

    // On window resize we resize the stage size
    window.addEventListener('resize', setStageWidth);
    
    // mobile orientation change
    $( window ).on( "orientationchange", function( event ) { 
        setStageWidth();
    } );
    
    $("#sidebar div").mCustomScrollbar({
        scrollButtons:{
            enable:true,
            scrollInertia:80
        }
    });
    
    $('.btn_areas_list').mouseenter(function() 
    {   
        enableSideBar();                                
    });

    $('#sidebar').mouseenter(function() 
    {   
        clearInterval(theinterval);                        
    });

    $('#sidebar').mouseleave(function() {
        theinterval = setInterval(function(){ disableSideBar(); }, 3000);
    });
    
    if (!(/campus-map/i.test(window.location)))
    {    
        theinterval = setInterval(function(){ disableSideBar(); }, 4000);

        setTimeout(function(){ 
            enableSideBar(); 
            //theinterval = setInterval(function(){ disableSideBar(); }, 3000);
        }, 1000);



        launchPopupOnLoad();
    } 
    else
    {
        $('.btn_areas_list').css('display', 'none');
    }    
}
 
manifest = 
[
    {
        id: "background", src: flrplan_selected
    },
    {
        id: "pointer-icon", src: "images/iconos/more-info.png"
    }
];
 
//initialize PreloadJS
assets = new createjs.LoadQueue(true, "");
assets.on("complete", handleAssetsLoad);
assets.loadManifest(manifest);
