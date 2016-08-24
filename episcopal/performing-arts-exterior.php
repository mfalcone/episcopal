<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'exterior';            

        var AreasSettingsList = 
            [                
               
     //TITLE
                {
                    name        : '101',
                    naming_opp  : 'fine-arts-building/ext-250000.html',
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
                        text: '<span>$2,500,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 



 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '1',
                    naming_opp  : 'fine-arts-building/d.courtyard.html',
                    pointer_pos : [530.6, 615.2],                    
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(500, 738); //2
                      ctx.lineTo(544.8, 691.1); //3
                      ctx.lineTo(614.8, 488); //4
                      ctx.lineTo(500, 480); //5
                      ctx.lineTo(500, 738); //1
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,            

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Courtyard (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                },
                

                //TITLE
                {
                    name        : '101',
                    naming_opp  : 'fine-arts-building/ext-250000.html',
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
                    name        : '2',
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
                        text: 'Parking Lot (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
                
                //TITLE
                {
                    name        : '102',
                    naming_opp  : 'fine-arts-building/ext-100000.html',
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
                    name        : '3',
                    naming_opp  : 'fine-arts-building/a.gardens.html',
                    pointer_pos : [1283.1, 297.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1103.2, 247.5);
      ctx.lineTo(1375.2, 247.5);
      ctx.lineTo(1375.8, 346.5);
      ctx.lineTo(1188.2, 346.5);
      ctx.lineTo(1188.5, 281.9);
      ctx.lineTo(1084.2, 256.3);
      ctx.lineTo(1080.8, 254.7);
      ctx.lineTo(1079.8, 252.5);
      ctx.lineTo(1079.8, 249.5);
      ctx.lineTo(1081.2, 247.5);
      ctx.lineTo(1103.2, 247.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,    

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Gardens #1 (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '4',
                    naming_opp  : 'fine-arts-building/a.gardens.html',
                    pointer_pos : [860.1, 208.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(770.3, 221.6);
      ctx.lineTo(989.3, 221.6);
      ctx.lineTo(989.3, 195.6);
      ctx.lineTo(770.3, 195.6);
      ctx.lineTo(759.2, 195.6);
      ctx.lineTo(754.7, 196.5);
      ctx.lineTo(748.4, 198.3);
      ctx.lineTo(724.0, 212.6);
      ctx.lineTo(721.5, 214.1);
      ctx.lineTo(720.1, 216.3);
      ctx.lineTo(720.3, 218.9);
      ctx.lineTo(721.5, 220.7);
      ctx.lineTo(724.9, 221.7);
      ctx.lineTo(770.3, 221.6);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,    

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Gardens #2 (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    
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
