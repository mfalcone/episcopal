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
                    external_link: 'sciences-building-main-level.php',
                    pointer_pos : [1397.4, 350.2],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1565, 404);
      ctx.lineTo(1562.6, 420.3);
      ctx.lineTo(1438, 469.9);
      ctx.lineTo(1233.6, 299.7);
      ctx.lineTo(1233.6, 277.2);
      ctx.lineTo(1347.6, 237.4);
      ctx.lineTo(1366.2, 252.5);
      ctx.lineTo(1297.6, 278.1);
      ctx.lineTo(1344.1, 316.4);
      ctx.lineTo(1410.1, 288.5);
      ctx.lineTo(1441.8, 310.6);
      ctx.lineTo(1453.4, 307.1);
      ctx.lineTo(1453.4, 297.8);
      ctx.lineTo(1475.4, 294.3);
      ctx.lineTo(1576.7, 366.4);
      ctx.lineTo(1545.3, 379.2);
      ctx.lineTo(1534.8, 379.2);
      ctx.lineTo(1565, 404);

                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#EA7D1A',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Integrated Sciences and Design Center',
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
                    pointer_pos : [317.4, 204.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(707.0, 38.5);
      ctx.lineTo(713.1, 44.0);
      ctx.lineTo(721.5, 40.9);
      ctx.lineTo(742.3, 58.5);
      ctx.lineTo(742.3, 67.7);
      ctx.lineTo(748.4, 74.4);
      ctx.lineTo(752.1, 74.4);
      ctx.lineTo(805.6, 124.3);
      ctx.lineTo(805.6, 148.7);
      ctx.lineTo(739.3, 167.5);
      ctx.lineTo(697.3, 126.1);
      ctx.lineTo(657.1, 138.3);
      ctx.lineTo(638.8, 123.1);
      ctx.lineTo(638.8, 115.8);
      ctx.lineTo(599.9, 128.6);
      ctx.lineTo(606.0, 140.1);
      ctx.lineTo(598.1, 141.4);
      ctx.lineTo(593.2, 146.2);
      ctx.lineTo(590.1, 149.3);
      ctx.lineTo(582.2, 154.1);
      ctx.lineTo(572.5, 162.1);
      ctx.lineTo(570.1, 167.5);
      ctx.lineTo(521.4, 183.4);
      ctx.lineTo(495.8, 148.7);
      ctx.lineTo(476.9, 152.9);
      ctx.lineTo(494.0, 174.2);
      ctx.lineTo(491.5, 183.4);
      ctx.lineTo(485.4, 183.4);
      ctx.lineTo(487.9, 189.4);
      ctx.lineTo(483.3, 189.4);
      ctx.lineTo(456.8, 159.6);
      ctx.lineTo(420.9, 168.8);
      ctx.lineTo(413.0, 151.7);
      ctx.lineTo(400.8, 151.7);
      ctx.lineTo(396.0, 157.8);
      ctx.lineTo(394.7, 163.3);
      ctx.lineTo(382.6, 160.2);
      ctx.lineTo(375.3, 174.8);
      ctx.lineTo(374.0, 177.3);
      ctx.lineTo(370.4, 179.1);
      ctx.lineTo(374.0, 204.1);
      ctx.lineTo(357.0, 210.8);
      ctx.lineTo(377.7, 238.8);
      ctx.lineTo(378.9, 245.5);
      ctx.lineTo(364.9, 245.5);
      ctx.lineTo(357.0, 250.3);
      ctx.lineTo(352.1, 256.4);
      ctx.lineTo(344.2, 260.7);
      ctx.lineTo(335.7, 252.8);
      ctx.lineTo(324.1, 255.2);
      ctx.lineTo(319.9, 260.7);
      ctx.lineTo(319.9, 266.8);
      ctx.lineTo(313.8, 266.8);
      ctx.lineTo(314.4, 273.5);
      ctx.lineTo(306.5, 273.5);
      ctx.lineTo(285.2, 245.5);
      ctx.lineTo(282.7, 235.1);
      ctx.lineTo(276.6, 230.2);
      ctx.lineTo(266.3, 231.5);
      ctx.lineTo(263.2, 235.7);
      ctx.lineTo(237.7, 243.6);
      ctx.lineTo(254.1, 269.8);
      ctx.lineTo(255.3, 283.2);
      ctx.lineTo(196.9, 300.8);
      ctx.lineTo(192.0, 294.2);
      ctx.lineTo(177.4, 295.4);
      ctx.lineTo(175.0, 300.8);
      ctx.lineTo(171.3, 283.8);
      ctx.lineTo(165.2, 280.8);
      ctx.lineTo(164.6, 275.3);
      ctx.lineTo(162.2, 266.8);
      ctx.lineTo(159.8, 268.6);
      ctx.lineTo(158.5, 257.6);
      ctx.lineTo(151.2, 255.8);
      ctx.lineTo(140.9, 256.4);
      ctx.lineTo(134.2, 257.0);
      ctx.lineTo(112.9, 218.1);
      ctx.lineTo(110.4, 205.9);
      ctx.lineTo(148.2, 196.8);
      ctx.lineTo(140.9, 183.4);
      ctx.lineTo(215.8, 161.4);
      ctx.lineTo(223.1, 174.8);
      ctx.lineTo(258.4, 164.5);
      ctx.lineTo(258.4, 157.2);
      ctx.lineTo(252.9, 145.6);
      ctx.lineTo(322.9, 126.7);
      ctx.lineTo(336.9, 143.8);
      ctx.lineTo(382.6, 132.2);
      ctx.lineTo(372.8, 105.4);
      ctx.lineTo(413.6, 93.3);
      ctx.lineTo(433.7, 117.6);
      ctx.lineTo(512.2, 96.9);
      ctx.lineTo(509.2, 93.3);
      ctx.lineTo(509.2, 84.1);
      ctx.lineTo(503.7, 78.7);
      ctx.lineTo(504.9, 73.2);
      ctx.lineTo(587.1, 50.0);
      ctx.lineTo(620.6, 84.7);
      ctx.lineTo(638.2, 79.9);
      ctx.lineTo(628.5, 68.9);
      ctx.lineTo(641.9, 65.3);
      ctx.lineTo(641.9, 56.1);
      ctx.lineTo(707.0, 38.5);
      ctx.lineTo(713.1, 44.0);
      
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '##',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Lower School',
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
