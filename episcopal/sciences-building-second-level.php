<!DOCTYPE HTML>
<html>
<head>
	<?php include('metas.php'); ?>

	<script type="text/javascript">

		// current background image located on images/floorplans/[big-medium-small]
		current_bg_name = 'sciences-building-second-level';            

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
					name        : 't',
					naming_opp  : 'science-builder-level-two/t.outdoor-learning-terrace.html',
					pointer_pos : [1092.9, 257.8],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(979.5,346.5);
						ctx.lineTo(831.5,346.5);
						ctx.lineTo(831.5,217.5);
						ctx.lineTo(1351.5,217.5);
						ctx.lineTo(1350.75,346.5);
						ctx.lineTo(1202.896,346.18);
						ctx.lineTo(1203,243.5);
						ctx.lineTo(979.5,243.5);	
						ctx.lineTo(979.5,346.5);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Outdoor Learning Terrace',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'p',
					naming_opp  : 'science-builder-level-two/p.earth-science-and-physics.html',
					pointer_pos : [1442.9, 407.8],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1350.5,348.5);
						ctx.lineTo(1518.5,348.332);
						ctx.lineTo(1518.5,478.999);	
						ctx.lineTo(1350.5,479.5);
						ctx.lineTo(1350.5,348.5);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Earth Science and Physics (Eighth Grade Lab)',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    , 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'o',
					naming_opp  : 'science-builder-level-two/o.chemical-science.html',
					pointer_pos : [1442.9, 607.8],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1351.5,540.5);
						ctx.lineTo(1519.5,540.332);
						ctx.lineTo(1519.5,670.999);
						ctx.lineTo(1351.5,671.5);
						ctx.lineTo(1351.5,540.5);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Chemical Science (Seventh Grade Lab)',
						fontSize: 12,                         
						align: 'center'            
					}        
				}, 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'H-1',
					naming_opp  : 'science-builder-level-two/h.flex-classrooms-Labs.html',
					pointer_pos : [600.9, 777.8],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(549.5,718.488);
						ctx.lineTo(649.5,718.332);
						ctx.lineTo(649.5,839.609);
						ctx.lineTo(549.5,840.074);
						ctx.lineTo(549.5,718.488);
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
				},
				
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'H-2',
					naming_opp  : 'science-builder-level-two/h.flex-classrooms-Labs.html',
					pointer_pos : [846.9, 777.8],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(797.5,718.468);
						ctx.lineTo(897.5,718.332);
						ctx.lineTo(897.5,823.837);
						ctx.lineTo(797.5,824.241);
						ctx.lineTo(797.5,718.468);
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
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'M',
					naming_opp  : 'science-builder-level-two/m.environmental-space-and-general-science.html',
					pointer_pos : [730.9, 777.8],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(649.5,717.5);
						ctx.lineTo(796.031,718.581);
						ctx.lineTo(796.5,824.5);
						ctx.lineTo(649.5,824.5);
						ctx.lineTo(649.5,717.5);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Environmental, Space, and General Science (Fifth Grade Lab)',
						fontSize: 12,                         
						align: 'center'            
					}        
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'N',
					naming_opp  : 'science-builder-level-two/n.life-science.html',
					pointer_pos : [970.9, 777.8],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(898.5,718.5);
						ctx.lineTo(1045.067,718.879);
						ctx.lineTo(1045.5,825.5);
						ctx.lineTo(898.5,825.5);
						ctx.lineTo(898.5,718.5);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Life Science (Sixth Grade Lab)',
						fontSize: 12,                         
						align: 'center'            
					}        
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'R',
					naming_opp  : 'science-builder-level-two/r.idea-lounge.html',
					pointer_pos : [1120.9, 795.8],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1046.5,737.5);
						ctx.lineTo(1090.5,737.5);
						ctx.lineTo(1090.5,766.5);
						ctx.lineTo(1201.5,766.5);
						ctx.lineTo(1201.5,836.5);
						ctx.lineTo(1046.5,836.5);
						ctx.lineTo(1046.5,737.5);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Idea Lounge (Middle School)',
						fontSize: 12,                         
						align: 'center'            
					}        
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'S',
					naming_opp  : 'science-builder-level-two/s.teacher-workrooms.html',
					pointer_pos : [1140.9, 740.8],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1091.5,717.5);
						ctx.lineTo(1202.174,717.926);
						ctx.lineTo(1202.5,767.5);
						ctx.lineTo(1091.5,767.5);
						ctx.lineTo(1091.5,717.5);
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
