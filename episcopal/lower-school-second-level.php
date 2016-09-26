<!DOCTYPE HTML>
<html>
<head>
	<?php include('metas.php'); ?>

	<script type="text/javascript">

		// current background image located on images/floorplans/[big-medium-small]
		current_bg_name = 'lower-school-second-level';            

		var AreasSettingsList = 
			[
			   //TITLE 2,500,000
				{
					name        : '101',
					naming_opp  : 'lower-level-one/main-2500000.html',
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
						text: '<span>$1.000.000</span>',
						fontSize: 1,
						align: 'center'            
					}        
				}    , 

				{
					//==================================
					// Basic settings
					//==================================
					name        : 'P',
					naming_opp  : 'lower-level-two/creation-and-design-lab.html',
					pointer_pos : [1300.0, 560],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1252.09,587.001);
						ctx.lineTo(1252.421,526.871);
						ctx.lineTo(1346.669,526.871);
						ctx.lineTo(1346.669,587.001);
						ctx.lineTo(1252.09,587.001);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Creation and Design Lab',
						fontSize: 12,                         
						align: 'center'            
					}        
				},

				//TITLE 2,500,000
				{
					name        : '101',
					naming_opp  : 'lower-level-one/main-2500000.html',
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
						text: '<span>$750.000</span>',
						fontSize: 1,
						align: 'center'            
					}        
				}    , 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'CC',
					naming_opp  : 'lower-level-two/science-center.html',
					pointer_pos : [510.0, 640],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(476.117,610.535);
						ctx.lineTo(548.412,610.535);
						ctx.lineTo(548.412,667.61);
						ctx.lineTo(475.863,667.61);
						ctx.lineTo(476.117,610.535);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Science Center',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,  
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'O',
					naming_opp  : 'lower-level-two/science-center.html',
					pointer_pos : [1385.0, 560],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1346.364,526.871);
						ctx.lineTo(1424.669,526.871);
						ctx.lineTo(1424.669,585.001);
						ctx.lineTo(1346.09,585.001);
						ctx.lineTo(1346.364,526.871);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Science Center',
						fontSize: 12,                         
						align: 'center'            
					}        
				},
				//TITLE 2,500,000
				{
					name        : '101',
					naming_opp  : 'lower-level-one/main-2500000.html',
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
						text: '<span>$200.000</span>',
						fontSize: 1,
						align: 'center'            
					}        
				}    , 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'FF',
					naming_opp  : 'lower-level-two/world-language-center.html',
					pointer_pos : [580.0, 640],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(549.159,611.042);
						ctx.lineTo(617.663,611.042);
						ctx.lineTo(617.663,668.117);
						ctx.lineTo(548.919,668.117);
						ctx.lineTo(549.159,611.042);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'World Language Center',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,

				{
					//==================================
					// Basic settings
					//==================================
					name        : 'R',
					naming_opp  : 'lower-level-two/artists-studio.html',
					pointer_pos : [1250.0, 640],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1206.414,610.202);
						ctx.lineTo(1298.667,610.202);
						ctx.lineTo(1298.667,668.999);
						ctx.lineTo(1206.089,668.999);
						ctx.lineTo(1206.414,610.202);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Artists’ Studio',
						fontSize: 12,                         
						align: 'center'            
					}        
				},   
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'S',
					naming_opp  : 'lower-level-two/harmony-studio.html',
					pointer_pos : [1120.0, 560],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1085.64,525.537);
						ctx.lineTo(1147.335,525.537);
						ctx.lineTo(1147.335,585.667);
						ctx.lineTo(1085.423,585.667);
						ctx.lineTo(1085.64,525.537);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Harmony Studio',
						fontSize: 12,                         
						align: 'center'            
					}        
				}, 
				//TITLE 2,500,000
				{
					name        : '101',
					naming_opp  : 'lower-level-one/main-2500000.html',
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
						text: '<span>$150.000</span>',
						fontSize: 1,
						align: 'center'            
					}        
				}    , 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Y-1',
					naming_opp  : 'lower-level-two/teaching-garden.html',
					pointer_pos : [390.0, 570],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(370.452,525.537);
						ctx.lineTo(410.886,525.537);
						ctx.lineTo(410.886,608.333);
						ctx.lineTo(370.311,608.333);
						ctx.lineTo(370.452,525.537);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Teaching Garden',
						fontSize: 12,                         
						align: 'center'            
					}        
				},
				
				
				
			
			{
					//==================================
					// Basic settings
					//==================================
					name        : 'EE',
					naming_opp  : 'lower-level-two/art-studio.html',
					pointer_pos : [660.0, 640],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(618.716,610.535);
						ctx.lineTo(702.133,610.535);
						ctx.lineTo(702.133,667.61);
						ctx.lineTo(618.423,667.61);
						ctx.lineTo(618.716,610.535);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Art Studio',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,  
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'DD',
					naming_opp  : 'lower-level-two/music-suite.html',
					pointer_pos : [610.0, 560],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(571.689,529.535);
						ctx.lineTo(647.467,529.535);
						ctx.lineTo(647.467,586.61);
						ctx.lineTo(571.424,586.61);
						ctx.lineTo(571.689,529.535);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Music Suite',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,  

				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Y-2',
					naming_opp  : 'lower-level-two/teaching-garden.html',
					pointer_pos : [1467.0, 570],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1448.898,525.537);
						ctx.lineTo(1489.332,525.537);
						ctx.lineTo(1489.332,608.333);
						ctx.lineTo(1448.757,608.333);
						ctx.lineTo(1448.898,525.537);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Teaching Garden',
						fontSize: 12,                         
						align: 'center'            
					}        
				},
				//TITLE 2,500,000
				{
					name        : '101',
					naming_opp  : 'lower-level-one/main-2500000.html',
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
						text: '<span>$100.000</span>',
						fontSize: 1,
						align: 'center'            
					}        
				}    , 
				
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'X',
					naming_opp  : 'lower-level-two/meeting-forums.html',
					pointer_pos : [995.0, 560],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(973.557,524.869);
						ctx.lineTo(1011.334,524.869);
						ctx.lineTo(1011.334,585.666);
						ctx.lineTo(973.424,585.666);
						ctx.lineTo(973.557,524.869);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Meeting Forum(s)',
						fontSize: 12,                         
						align: 'center'            
					}        
				}, 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'W',
					naming_opp  : 'lower-level-two/language-lab.html',
					pointer_pos : [1190.0, 640],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1174.863,609.535);
						ctx.lineTo(1205.334,609.535);
						ctx.lineTo(1205.334,670.332);
						ctx.lineTo(1174.756,670.332);
						ctx.lineTo(1174.863,609.535);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Language Lab',
						fontSize: 12,                         
						align: 'center'            
					}        
				}, 
				
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'T',
					naming_opp  : 'lower-level-two/world-language-center.html',
					pointer_pos : [1390.0, 640],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1343.785,610.203);
						ctx.lineTo(1446.668,610.203);
						ctx.lineTo(1446.668,670.333);
						ctx.lineTo(1343.423,670.333);
						ctx.lineTo(1343.785,610.203);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'World Language Center',
						fontSize: 12,                         
						align: 'center'            
					}        
				}, 
				//TITLE 2,500,000
				{
					name        : '101',
					naming_opp  : 'lower-level-one/main-2500000.html',
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
						text: '<span>$75.000</span>',
						fontSize: 1,
						align: 'center'            
					}        
				}    , 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'J',
					naming_opp  : 'lower-level-two/administrative-offices.html',
					pointer_pos : [1065.0, 650],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(975.365,634.202);
						ctx.lineTo(1148.8,634.202);
						ctx.lineTo(1148.8,671.944);
						ctx.lineTo(974.757,671.944);
						ctx.lineTo(975.365,634.202);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Administrative Offices',
						fontSize: 12,                         
						align: 'center'            
					}        
				},  
				
				
				
				
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
