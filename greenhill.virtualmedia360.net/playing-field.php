<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'playing-field';            

        var AreasSettings = 
            [
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '1',
                    naming_opp  : 'playing-field/b.playing-field-2.html',
                    pointer_pos : [1224.4, 540.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1353.3, 764.0);
                      ctx.lineTo(1093.0, 764.0);
                      ctx.lineTo(1093.0, 317.1);
                      ctx.lineTo(1353.3, 317.1);
                      ctx.lineTo(1353.3, 764.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,      

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Playing Field N°2',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '2',
                    naming_opp  : 'playing-field/a.playing-field-1.html',
                    pointer_pos : [938.4, 540.5],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1067.2, 764.0);
                          ctx.lineTo(806.9, 764.0);
                          ctx.lineTo(806.9, 317.1);
                          ctx.lineTo(1067.2, 317.1);
                          ctx.lineTo(1067.2, 764.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Playing Field N°1',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '3',
                    naming_opp  : 'playing-field/e.movable-stands-(4-available).html',
                    pointer_pos : [793.8, 564.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(807.1, 582.1);
                      ctx.lineTo(777.8, 582.1);
                      ctx.lineTo(777.8, 547.4);
                      ctx.lineTo(807.1, 547.4);
                      ctx.lineTo(807.1, 582.1);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip: {                
                        text: 'Movable Stands',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '4',
                    naming_opp  : 'playing-field/e.movable-stands-(4-available).html',
                    pointer_pos : [793.8, 513.8],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(807.1, 531.0);
                        ctx.lineTo(777.8, 531.0);
                        ctx.lineTo(777.8, 496.6);
                        ctx.lineTo(807.1, 496.6);
                        ctx.lineTo(807.1, 531.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,      

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Movable Stands',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '5',
                    naming_opp  : 'playing-field/e.movable-stands-(4-available).html',
                    pointer_pos : [1363.6, 513.8],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1371.3, 531.0);
                          ctx.lineTo(1353.3, 531.0);
                          ctx.lineTo(1353.3, 496.6);
                          ctx.lineTo(1371.3, 496.6);
                          ctx.lineTo(1371.3, 531.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Movable Stands',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '6',
                    naming_opp  : 'playing-field/e.movable-stands-(4-available).html',
                    pointer_pos : [1363.6, 564.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1371.3, 582.1);
                          ctx.lineTo(1353.3, 582.1);
                          ctx.lineTo(1353.3, 547.4);
                          ctx.lineTo(1371.3, 547.4);
                          ctx.lineTo(1371.3, 582.1);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,          

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Movable Stands',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '7',
                    naming_opp  : 'playing-field/d.parking-lot.html',
                    pointer_pos : [1217.4, 234.1],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1315.7, 217.6);
                      ctx.lineTo(1315.7, 195.0);
                      ctx.lineTo(1090.1, 195.0);
                      ctx.lineTo(1090.1, 217.6);
                      ctx.lineTo(1068.3, 217.6);
                      ctx.lineTo(1068.3, 271.3);
                      ctx.lineTo(1365.6, 271.3);
                      ctx.lineTo(1365.6, 217.6);
                      ctx.lineTo(1315.7, 217.6);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Parking Lot',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
                
                
                
  
            ];


    </script>                    
    <script defer="defer" src="js/app.js"></script>

</head>
<body>
    <div id="container"></div>

    <?php include('overlays.php'); ?>

    <div class="ancho brd_50"></div>

    <?php include('header.php'); ?>

    <?php include('menu-mobile.php'); ?>        

    <?php include('sidebar-areas.php'); ?> 

    <?php include('zoom-controls.php'); ?> 

    <!--wrapper -->
    <div id="wrapper">
        <div class="_r">
            <div class="_f _fN"></div>
        </div>
    </div>
    <!--end wrapper -->
</body>
</html>
