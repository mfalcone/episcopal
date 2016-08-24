<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = '3d';            
        
        var AreasSettingsList = 
            [
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '1',
                    naming_opp  : 'cafeteria-building/b.bookstore.html',
                    external_link: 'performing-arts-main-level.php',
                    pointer_pos : [443.2, 312.2],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(473.2, 412.2);
      ctx.lineTo(561.5, 373.3);
      ctx.lineTo(558.9, 351.3);
      ctx.lineTo(626.2, 325.1);
      ctx.lineTo(626.2, 307.9);
      ctx.lineTo(628.0, 307.2);
      ctx.lineTo(628.0, 305.7);
      ctx.lineTo(590.3, 284.5);
      ctx.lineTo(453.0, 248.3);
      ctx.lineTo(389.8, 251.8);
      ctx.lineTo(373.8, 254.8);
      ctx.lineTo(360.0, 255.0);
      ctx.lineTo(278.0, 280.5);
      ctx.lineTo(278.9, 315.4);
      ctx.lineTo(304.3, 330.2);
      ctx.lineTo(305.8, 334.1);
      ctx.lineTo(308.2, 337.7);
      ctx.lineTo(310.9, 338.8);
      ctx.lineTo(314.8, 337.1);
      ctx.lineTo(318.9, 337.5);
      ctx.lineTo(330.8, 342.0);
      ctx.lineTo(333.5, 344.8);
      ctx.lineTo(336.6, 345.0);
      ctx.lineTo(337.5, 348.5);
      ctx.lineTo(340.1, 351.4);
      ctx.lineTo(341.8, 353.3);
      ctx.lineTo(341.7, 355.9);
      ctx.lineTo(342.6, 358.1);
      ctx.lineTo(344.3, 359.7);
      ctx.lineTo(346.5, 360.0);
      ctx.lineTo(348.5, 362.0);
      ctx.lineTo(350.7, 362.0);
      ctx.lineTo(353.0, 362.5);
      ctx.lineTo(354.0, 360.9);
      ctx.lineTo(355.8, 360.9);
      ctx.lineTo(356.7, 361.9);
      ctx.lineTo(359.0, 361.0);
      ctx.lineTo(359.6, 358.6);
      ctx.lineTo(361.4, 358.1);
      ctx.lineTo(362.8, 360.2);
      ctx.lineTo(365.1, 359.7);
      ctx.lineTo(365.3, 362.5);
      ctx.lineTo(368.3, 362.0);
      ctx.lineTo(370.5, 362.5);
      ctx.lineTo(371.2, 363.3);
      ctx.lineTo(373.3, 363.6);
      ctx.lineTo(373.9, 365.8);
      ctx.lineTo(375.6, 366.6);
      ctx.lineTo(378.2, 366.0);
      ctx.lineTo(380.8, 367.6);
      ctx.lineTo(383.6, 368.0);
      ctx.lineTo(383.8, 369.9);
      ctx.lineTo(385.1, 371.9);
      ctx.lineTo(384.2, 373.6);
      ctx.lineTo(382.0, 374.9);
      ctx.lineTo(381.0, 376.9);
      ctx.lineTo(421.6, 388.4);
      ctx.lineTo(473.2, 412.2);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Performing Arts',
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
                    naming_opp  : 'cafeteria-building/b.bookstore.html',
                    external_link: 'athletics.php',
                    pointer_pos : [626.6, 145],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(786.6, 107.4);
      ctx.lineTo(570.6, 62.2);
      ctx.lineTo(393.6, 112.7);
      ctx.lineTo(477.4, 135.1);
      ctx.lineTo(484.5, 135.3);
      ctx.lineTo(499.6, 139.4);
      ctx.lineTo(500.1, 140.8);
      ctx.lineTo(617.8, 172.8);
      ctx.lineTo(786.6, 107.4);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Athletics',
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
                    naming_opp  : 'cafeteria-building/b.bookstore.html',                    
                    external_link: 'dining-hall.php',
                    pointer_pos : [900, 748.2],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(852.2, 648.2);
      ctx.lineTo(1016.5, 719.0);
      ctx.lineTo(1016.5, 733.3);
      ctx.lineTo(1009.9, 735.6);
      ctx.lineTo(1131.6, 793.6);
      ctx.lineTo(1035.9, 906.5);
      ctx.lineTo(914.1, 838.6);
      ctx.lineTo(914.1, 847.7);
      ctx.lineTo(839.9, 919.9);
      ctx.lineTo(817.9, 919.9);
      ctx.lineTo(829.0, 910.4);
      ctx.lineTo(779.2, 886.0);
      ctx.lineTo(779.2, 845.6);
      ctx.lineTo(789.7, 837.9);
      ctx.lineTo(713.4, 795.3);
      ctx.lineTo(688.5, 815.2);
      ctx.lineTo(681.8, 820.5);
      ctx.lineTo(679.5, 821.1);
      ctx.lineTo(677.2, 821.4);
      ctx.lineTo(674.3, 821.1);
      ctx.bezierCurveTo(674.3, 821.1, 672.0, 819.8, 672.0, 819.7);
      ctx.bezierCurveTo(672.0, 819.6, 669.8, 801.3, 669.8, 801.3);
      ctx.lineTo(673.5, 797.0);
      ctx.lineTo(714.3, 767.3);
      ctx.lineTo(716.8, 749.8);
      ctx.lineTo(852.2, 648.2);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Cafeteria',
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
