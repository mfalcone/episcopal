<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'exterior';            

        var AreasSettings = 
            [
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '1',
                    naming_opp  : 'fine-arts-building/aa.parking-lot.html',
                    pointer_pos : [880.0, 146.1],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(393.2, 77.0);
                      ctx.bezierCurveTo(393.2, 88.6, 393.2, 173.1, 393.2, 173.1);
                      ctx.bezierCurveTo(403.2, 173.1, 460.8, 173.1, 460.8, 173.1);
                      ctx.bezierCurveTo(516.7, 173.1, 498.6, 204.8, 573.9, 204.8);
                      ctx.lineTo(669.6, 204.8);
                      ctx.bezierCurveTo(715.3, 204.8, 728.7, 172.4, 764.9, 172.8);
                      ctx.bezierCurveTo(793.7, 173.1, 1008.3, 172.8, 1008.3, 172.8);
                      ctx.lineTo(1008.3, 220.3);
                      ctx.lineTo(1323.8, 220.3);
                      ctx.lineTo(1323.8, 77.0);
                      ctx.lineTo(393.2, 77.0);
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
