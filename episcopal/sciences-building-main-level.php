<!DOCTYPE HTML>
<html>
<head>
	<?php include('metas.php'); ?>

	<script type="text/javascript">

		// current background image located on images/floorplans/[big-medium-small]
		current_bg_name = 'sciences-building-main-level';            

		var AreasSettingsList = 
			[
			   //TITLE 2,500,000
				{
					name        : '101',
					naming_opp  : 'science-builder-level-one/main-2500000.html',
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
						text: '<span>$5,000,000</span>',
						fontSize: 1,
						align: 'center'            
					}        
				}    , 

	
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'J-1',
					naming_opp  : 'science-builder-level-one/j.chemistry-labs.html',
					pointer_pos : [742.9, 157.8],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(674,94);
						ctx.lineTo(798,94);
						ctx.lineTo(798,244);
						ctx.lineTo(673,244);
						ctx.lineTo(674,94);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Chemistry Labs',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,  
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'J-2',
					naming_opp  : 'science-builder-level-one/j.chemistry-labs.html',
					pointer_pos : [920.9, 157.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(859,94);
						ctx.lineTo(983,94);
						ctx.lineTo(983,244);
						ctx.lineTo(858,244);
						ctx.lineTo(859,94);

					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Chemistry Labs',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,  
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'K',
					naming_opp  : 'science-builder-level-one/k.open.lab.html',
					pointer_pos : [1030.9, 157.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(983.709,94);
						ctx.lineTo(1072,94);
						ctx.lineTo(1072,218);
						ctx.lineTo(983,218);
						ctx.lineTo(983.709,94);

					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Open Lab',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,  
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'I-1',
					naming_opp  : 'science-builder-level-one/i.biology-labs.html',
					pointer_pos : [1135.9, 157.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1074.438,95);
						ctx.lineTo(1199,95);
						ctx.lineTo(1199,243);
						ctx.lineTo(1073.438,243);
						ctx.lineTo(1074.438,95);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Biology Labs',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    , 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'I-2',
					naming_opp  : 'science-builder-level-one/i.biology-labs.html',
					pointer_pos : [1315.9, 157.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1258.438,96);
						ctx.lineTo(1383,96);
						ctx.lineTo(1383,244);
						ctx.lineTo(1257.438,244);
						ctx.lineTo(1258.438,96);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Biology Labs',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    , 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'H-1',
					naming_opp  : 'science-builder-level-one/h.flex-classroom-labs.html',
					pointer_pos : [1020.9, 330.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(974.772,278);
						ctx.lineTo(1071,278);
						ctx.lineTo(1071,379);
						ctx.lineTo(974,379);
						ctx.lineTo(974.772,278);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Flex Classrooms/Labs',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,  
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'H-2',
					naming_opp  : 'science-builder-level-one/h.flex-classroom-labs.html',
					pointer_pos : [1116.2, 330.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1072.772,278);
						ctx.lineTo(1169,278);
						ctx.lineTo(1169,379);
						ctx.lineTo(1072,379);
						ctx.lineTo(1072.772,278);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Flex Classrooms/Labs',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    , 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'B',
					naming_opp  : 'science-builder-level-one/b.amphitheater-staircase.html',
					pointer_pos : [965.2, 430.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(927.558,380);
						ctx.lineTo(997,380);
						ctx.lineTo(997,471);
						ctx.lineTo(927,471);
						ctx.lineTo(927.558,380);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Amphitheater Staircase',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    , 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'u',
					naming_opp  : 'science-builder-level-one/u.idea-lounge-upper-school.html',
					pointer_pos : [1055.2, 430.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(999.916,378);
						ctx.lineTo(1114,378);
						ctx.lineTo(1114,469);
						ctx.lineTo(999,469);
						ctx.lineTo(999.916,378);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Idea Lounge - Upper School',
						fontSize: 12,                         
						align: 'center'            
					}
				}, 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 's',
					naming_opp  : 'science-builder-level-one/s.teacher-workrooms.html',
					pointer_pos : [1140.2, 430.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1114.438,378);
						ctx.lineTo(1169,378);
						ctx.lineTo(1169,469);
						ctx.lineTo(1114,469);
						ctx.lineTo(1114.438,378);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Teacher Workrooms',
						fontSize: 12,                         
						align: 'center'            
					}
				}, 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'A',
					naming_opp  : 'science-builder-level-one/a.the-innovation-hub.html',
					pointer_pos : [870.2, 580.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(811.893,528);
						ctx.lineTo(923,528);
						ctx.lineTo(923,643);
						ctx.lineTo(811,643);
						ctx.lineTo(811.893,528);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'The Innovation Hub',
						fontSize: 12,                         
						align: 'center'            
					}
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'A-2',
					naming_opp  : 'science-builder-level-one/a.the-innovation-hub.html',
					pointer_pos : [1140.2, 580.8],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1087.893,528);
						ctx.lineTo(1199,528);
						ctx.lineTo(1199,643);
						ctx.lineTo(1087,643);
						ctx.lineTo(1087.893,528);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'The Innovation Hub',
						fontSize: 12,                         
						align: 'center'            
					}
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'G-1',
					naming_opp  : 'science-builder-level-one/g.physics-and-engineer-labs.html',
					pointer_pos : [1315.2, 455.0],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1259.988,386);
						ctx.lineTo(1383,386);
						ctx.lineTo(1383,531);
						ctx.lineTo(1259,531);
						ctx.lineTo(1259.988,386);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Physics and Engineering Labs',
						fontSize: 12,                         
						align: 'center'            
					}
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'G-2',
					naming_opp  : 'science-builder-level-one/g.physics-and-engineer-labs.html',
					pointer_pos : [1315.2, 600.0],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1259.988,529);
						ctx.lineTo(1383,529);
						ctx.lineTo(1383,674);
						ctx.lineTo(1259,674);
						ctx.lineTo(1259.988,529);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Physics and Engineering Labs',
						fontSize: 12,                         
						align: 'center'            
					}
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'C',
					naming_opp  : 'science-builder-level-one/c.power-shop.html',
					pointer_pos : [777.2, 800.0],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(727.797,712);
						ctx.lineTo(827,712);
						ctx.lineTo(827,884);
						ctx.lineTo(727,884);
						ctx.lineTo(727.797,712);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Power Shop',
						fontSize: 12,                         
						align: 'center'            
					}
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'D',
					naming_opp  : 'science-builder-level-one/d.fab-lab.html',
					pointer_pos : [860.2, 800.0],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(826.578,712);
						ctx.lineTo(899,712);
						ctx.lineTo(899,884);
						ctx.lineTo(826,884);
						ctx.lineTo(826.578,712);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Fab Lab',
						fontSize: 12,                         
						align: 'center'            
					}
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'E',
					naming_opp  : 'science-builder-level-one/e.upper-school-robotics-studio.html',
					pointer_pos : [950.2, 800.0],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(898.853,712);
						ctx.lineTo(1006,712);
						ctx.lineTo(1006,884);
						ctx.lineTo(898,884);
						ctx.lineTo(898.853,712);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Upper School Robotics Studio',
						fontSize: 12,                         
						align: 'center'            
					}
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'F',
					naming_opp  : 'science-builder-level-one/f.middle-school-robotics-studio.html',
					pointer_pos : [1060.2, 800.0],
					first_point : [623.8, 267.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1006.89,712);
						ctx.lineTo(1119,712);
						ctx.lineTo(1119,884);
						ctx.lineTo(1006,884);
						ctx.lineTo(1006.89,712);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Middle School Robotics Studio',
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
