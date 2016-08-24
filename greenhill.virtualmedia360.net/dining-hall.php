<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'cafeteria';            
        
        var AreasSettingsList = 
            [
          
             {
                    name        : '102',
                    naming_opp  : 'cafeteria-building/dnd-1000000.html',
                    pointer_pos : [9999, 9999],
                    first_point : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    }
                        ,
                    fill        : 'rgba(0,0,0,0)',
                    stroke      : '#000000',
                    strokeWidth : 0,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '<span>$1,500,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 
            
            
   
    {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '9',
                    naming_opp  : 'cafeteria-building/c.main-dining-hall.html',
                    pointer_pos : [1021.1, 638.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(787.4, 475.7);
                          ctx.lineTo(787.4, 409.8);
                          ctx.lineTo(583.6, 409.8);
                          ctx.lineTo(583.6, 723.5);
                          ctx.lineTo(786.6, 723.5);
                          ctx.lineTo(786.6, 782.5);
                          ctx.lineTo(1254.5, 782.5);
                          ctx.lineTo(1254.5, 475.7);
                          ctx.lineTo(787.4, 475.7);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Main Dining Hall (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


            {
                    name        : '102',
                    naming_opp  : 'cafeteria-building/dnd-1000000.html',
                    pointer_pos : [9999, 9999],
                    first_point : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    }
                        ,
                    fill        : 'rgba(0,0,0,0)',
                    stroke      : '#000000',
                    strokeWidth : 0,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '<span>$1,000,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 
            
            
   
  

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '111',
                    naming_opp  : 'cafeteria-building/b.bookstore.html',
                    pointer_pos : [512.6, 614.1],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(499.2, 464.8);
                        ctx.lineTo(499.2, 488.4);
                        ctx.lineTo(504.4, 488.4);
                        ctx.lineTo(504.4, 552.0);
                        ctx.lineTo(439.9, 552.0);
                        ctx.lineTo(439.9, 723.3);
                        ctx.lineTo(504.4, 723.3);
                        ctx.lineTo(516.5, 723.3);
                        ctx.lineTo(583.4, 723.3);
                        ctx.lineTo(583.4, 488.4);
                        ctx.lineTo(583.4, 481.2);
                        ctx.lineTo(583.4, 464.8);
                        ctx.lineTo(499.2, 464.8);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Bookstore (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,







              {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '1',
                    naming_opp  : 'cafeteria-building/head-of-school-dining-hall.html',
                    pointer_pos : [653.4, 363.8],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(733.9, 409.3);
                        ctx.lineTo(572.9, 409.3);
                        ctx.lineTo(572.9, 318.4);
                        ctx.lineTo(733.9, 318.4);
                        ctx.lineTo(733.9, 409.3);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Head of School Dining Hall (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '2',
                    naming_opp  : 'cafeteria-building/d.lower-school-dining-hall.html',
                    pointer_pos : [845.8, 323.8],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(903.0, 387.6);
                        ctx.lineTo(903.0, 228.4);
                        ctx.lineTo(788.7, 228.4);
                        ctx.lineTo(788.7, 438.8);
                        ctx.lineTo(870.5, 438.8);
                        ctx.lineTo(903.0, 438.8);
                        ctx.lineTo(942.0, 438.8);
                        ctx.lineTo(942.0, 387.6);
                        ctx.lineTo(903.0, 387.6);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,          

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Lower School Dining Hall',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '103',
                    naming_opp  : 'cafeteria-building/dnd-500000.html',
                    pointer_pos : [9999, 9999],
                    first_point : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    }
                        ,
                    fill        : 'rgba(0,0,0,0)',
                    stroke      : '#000000',
                    strokeWidth : 0,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '<span>$500,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 
            
            
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '3',
                    naming_opp  : 'cafeteria-building/f.kitchen.html',
                    pointer_pos : [1097.8, 312.9],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1239.6, 261.0);
                        ctx.lineTo(1239.6, 209.9);
                        ctx.lineTo(1132.1, 209.9);
                        ctx.lineTo(1132.1, 261.0);
                        ctx.lineTo(1101.3, 261.0);
                        ctx.lineTo(1101.3, 237.5);
                        ctx.lineTo(942.0, 237.5);
                        ctx.lineTo(942.0, 367.8);
                        ctx.lineTo(1101.3, 367.8);
                        ctx.lineTo(1101.3, 377.7);
                        ctx.lineTo(1250.7, 377.7);
                        ctx.lineTo(1250.7, 261.0);
                        ctx.lineTo(1239.6, 261.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,   

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Kitchen',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '104',
                    naming_opp  : 'cafeteria-building/dnd-250000.html',
                    pointer_pos : [9999, 9999],
                    first_point : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    }
                        ,
                    fill        : 'rgba(0,0,0,0)',
                    stroke      : '#000000',
                    strokeWidth : 0,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '<span>$250,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 



              
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '4',
                    naming_opp  : 'cafeteria-building/g.hearth-oven.html',
                    pointer_pos : [1177.4, 398.3],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1250.7, 377.7);
                        ctx.lineTo(1101.3, 377.7);
                        ctx.lineTo(1101.3, 419.0);
                        ctx.lineTo(1250.7, 419.0);
                        ctx.lineTo(1250.7, 377.7);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Hearth Oven',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                               
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '5',
                    naming_opp  : 'cafeteria-building/h.main-servery.html',
                    pointer_pos : [1177.4, 445.8],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1218.9, 449.8);
                        ctx.bezierCurveTo(1211.6, 439.7, 1208.1, 436.8, 1196.6, 436.8);
                        ctx.lineTo(1149.3, 437.0);
                        ctx.bezierCurveTo(1146.6, 437.0, 1141.3, 436.0, 1134.2, 445.2);
                        ctx.bezierCurveTo(1120.2, 463.2, 1106.8, 478.4, 1106.8, 478.4);
                        ctx.lineTo(1061.4, 478.1);
                        ctx.bezierCurveTo(1061.4, 481.0, 1061.7, 482.9, 1066.3, 484.5);
                        ctx.bezierCurveTo(1076.8, 488.1, 1094.8, 493.6, 1098.8, 494.7);
                        ctx.bezierCurveTo(1110.6, 498.2, 1115.0, 492.3, 1117.6, 489.9);
                        ctx.bezierCurveTo(1120.8, 486.8, 1143.0, 459.4, 1143.0, 459.4);
                        ctx.bezierCurveTo(1146.9, 455.5, 1148.9, 453.3, 1155.8, 453.3);
                        ctx.bezierCurveTo(1170.6, 453.3, 1190.5, 453.3, 1192.5, 453.3);
                        ctx.bezierCurveTo(1194.5, 453.3, 1199.8, 452.5, 1206.7, 460.3);
                        ctx.bezierCurveTo(1213.5, 468.1, 1232.2, 490.8, 1232.2, 490.8);
                        ctx.bezierCurveTo(1234.3, 492.9, 1235.8, 496.1, 1246.0, 496.1);
                        ctx.bezierCurveTo(1246.6, 496.1, 1247.2, 496.1, 1247.7, 496.1);
                        ctx.lineTo(1247.7, 483.8);
                        ctx.lineTo(1218.9, 449.8);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Main Servery',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,



                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '105',
                    naming_opp  : 'cafeteria-building/dnd-100000.html',
                    pointer_pos : [9999, 9999],
                    first_point : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    }
                        ,
                    fill        : 'rgba(0,0,0,0)',
                    stroke      : '#000000',
                    strokeWidth : 0,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '<span>$100,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 


                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '116',
                    naming_opp  : 'cafeteria-building/a.salad-and-panini-station.html',
                    pointer_pos : [1023.6, 549.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1045.7, 568.3);
      ctx.lineTo(996.8, 568.3);
      ctx.lineTo(996.8, 530.9);
      ctx.lineTo(1045.7, 530.9);
      ctx.lineTo(1045.7, 568.3);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Salad & Panini Station (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '117',
                    naming_opp  : 'cafeteria-building/a.beverage-station.html',
                    pointer_pos : [946.4, 543.5],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(956.2, 568.3);
      ctx.lineTo(931.9, 568.3);
      ctx.lineTo(931.9, 518.7);
      ctx.lineTo(956.2, 518.7);
      ctx.lineTo(956.2, 568.3);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Beverage Station #1 (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


         {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '118',
                    naming_opp  : 'cafeteria-building/a.beverage-station.html',
                    pointer_pos : [1101.2, 543.5],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1111.0, 568.3);
      ctx.lineTo(1086.7, 568.3);
      ctx.lineTo(1086.7, 518.7);
      ctx.lineTo(1111.0, 518.7);
      ctx.lineTo(1111.0, 568.3);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Beverage Station #2 (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


    
     {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '115',
                    naming_opp  : 'cafeteria-building/a.soup-and-salad-bar.html',
                    pointer_pos : [868.2, 549.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(888.2, 568.3);
      ctx.lineTo(843.6, 568.3);
      ctx.lineTo(843.6, 530.9);
      ctx.lineTo(888.2, 530.9);
      ctx.lineTo(888.2, 568.3);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Soup & Salad Bar (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

    
    
                               {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '119',
                    naming_opp  : 'cafeteria-building/a.seasons-station.html',
                    pointer_pos : [1178.6, 549.5],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1191.2, 563.7);
      ctx.lineTo(1161.3, 563.7);
      ctx.lineTo(1161.3, 535.2);
      ctx.lineTo(1191.2, 535.2);
      ctx.lineTo(1191.2, 563.7);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Seasons Station (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


     

                            
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '5',
                    naming_opp  : 'cafeteria-building/lower-school-servery.html',
                    pointer_pos : [847.2, 204.4],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(903.0, 228.4);
                        ctx.lineTo(788.7, 228.4);
                        ctx.lineTo(788.7, 180.3);
                        ctx.lineTo(903.0, 180.3);
                        ctx.lineTo(903.0, 228.4);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Lower School Servery (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
                
            {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '7',
                    naming_opp  : 'cafeteria-building/j.bookstore-storage-room.html',
                    pointer_pos : [865, 150],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(785, 122);
                        ctx.lineTo(943, 122);
                        ctx.lineTo(943, 179);
                        ctx.lineTo(785, 179);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Bookstore Storage Room',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,





/* ====== DELETED

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '6',
                    naming_opp  : 'cafeteria-building/i.dishwashing-station.html',
                    pointer_pos : [1023.1, 403.3],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1101.3, 438.8);
                        ctx.lineTo(942.0, 438.8);
                        ctx.lineTo(942.0, 367.8);
                        ctx.lineTo(1101.3, 367.8);
                        ctx.lineTo(1101.3, 438.8);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Dishwashing Station, $250,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
             {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '8',
                    naming_opp  : 'cafeteria-building/k.servery-stations.html',
                    pointer_pos : [1177.4, 445.8],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1218.9, 449.8);
                        ctx.bezierCurveTo(1211.6, 439.7, 1208.1, 436.8, 1196.6, 436.8);
                        ctx.lineTo(1149.3, 437.0);
                        ctx.bezierCurveTo(1146.6, 437.0, 1141.3, 436.0, 1134.2, 445.2);
                        ctx.bezierCurveTo(1120.2, 463.2, 1106.8, 478.4, 1106.8, 478.4);
                        ctx.lineTo(1061.4, 478.1);
                        ctx.bezierCurveTo(1061.4, 481.0, 1061.7, 482.9, 1066.3, 484.5);
                        ctx.bezierCurveTo(1076.8, 488.1, 1094.8, 493.6, 1098.8, 494.7);
                        ctx.bezierCurveTo(1110.6, 498.2, 1115.0, 492.3, 1117.6, 489.9);
                        ctx.bezierCurveTo(1120.8, 486.8, 1143.0, 459.4, 1143.0, 459.4);
                        ctx.bezierCurveTo(1146.9, 455.5, 1148.9, 453.3, 1155.8, 453.3);
                        ctx.bezierCurveTo(1170.6, 453.3, 1190.5, 453.3, 1192.5, 453.3);
                        ctx.bezierCurveTo(1194.5, 453.3, 1199.8, 452.5, 1206.7, 460.3);
                        ctx.bezierCurveTo(1213.5, 468.1, 1232.2, 490.8, 1232.2, 490.8);
                        ctx.bezierCurveTo(1234.3, 492.9, 1235.8, 496.1, 1246.0, 496.1);
                        ctx.bezierCurveTo(1246.6, 496.1, 1247.2, 496.1, 1247.7, 496.1);
                        ctx.lineTo(1247.7, 483.8);
                        ctx.lineTo(1218.9, 449.8);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,             

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Servery Stations, $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

END DELETED =========== */


  
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
