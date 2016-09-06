<!DOCTYPE HTML>
<html>
<head>
	<?php include('metas.php'); ?>

	<script type="text/javascript">

		// current background image located on images/floorplans/[big-medium-small]
		current_bg_name = 'lower-school-main-level';            

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
					name        : 'G-0',
					naming_opp  : 'science-builder-level-one/j.chemistry-labs.html',
					pointer_pos : [350.9, 340],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(271,224);
						ctx.lineTo(424.5,224);
						ctx.lineTo(424.5,427);
						ctx.lineTo(375.5,427);
						ctx.lineTo(375.5,464);
						ctx.lineTo(270,464);
						ctx.lineTo(271,224);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Gymnasium',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,  
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'G-1',
					naming_opp  : 'science-builder-level-one/j.chemistry-labs.html',
					pointer_pos : [505.9, 425],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(463.5,399);
						ctx.lineTo(546.667,399.167);
						ctx.lineTo(547.5,449);
						ctx.lineTo(463.5,449);
						ctx.lineTo(463.5,399);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Gymnasium',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'G-2',
					naming_opp  : 'science-builder-level-one/j.chemistry-labs.html',
					pointer_pos : [515.9, 495],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(488.43,467.377);
						ctx.lineTo(505.537,467.639);
						ctx.lineTo(505.67,480.768);
						ctx.lineTo(528.208,480.439);
						ctx.lineTo(529.583,466.856);
						ctx.lineTo(546.952,467.485);
						ctx.lineTo(546.85,516);
						ctx.lineTo(488,516);
						ctx.lineTo(488.43,467.377);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Gymnasium',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,  
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-0',
					naming_opp  : 'science-builder-level-one/j.chemistry-labs.html',
					pointer_pos : [665.9, 455],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(697.5,399.5);
						ctx.lineTo(697.5,456.5);
						ctx.lineTo(673.875,499);
						ctx.lineTo(634.5,500);
						ctx.lineTo(634.5,400.5);
						ctx.lineTo(697.5,399.5);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Grade Level Classroom ',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-1',
					naming_opp  : 'science-builder-level-one/j.chemistry-labs.html',
					pointer_pos : [815.9, 455],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(780,400);
						ctx.lineTo(843.5,400);
						ctx.lineTo(843.5,500);
						ctx.lineTo(804,500);
						ctx.lineTo(780.25,456.5);
						ctx.lineTo(780,400);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Grade Level Classroom ',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-2',
					naming_opp  : 'science-builder-level-one/j.chemistry-labs.html',
					pointer_pos : [815.9, 525],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(760.625,524);
						ctx.lineTo(804.5,499);
						ctx.lineTo(843,499);
						ctx.lineTo(843.25,547.25);
						ctx.lineTo(760.5,547.75);
						ctx.lineTo(760.625,524);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Grade Level Classroom ',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    , 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-3',
					naming_opp  : 'science-builder-level-one/j.chemistry-labs.html',
					pointer_pos : [665.9, 525],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(633.5,500);
						ctx.lineTo(673,500);
						ctx.lineTo(716.75,524.75);
						ctx.lineTo(717,548);
						ctx.lineTo(633.5,548);
						ctx.lineTo(633.5,500);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Grade Level Classroom ',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    ,  
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-4',
					naming_opp  : 'science-builder-level-one/j.chemistry-labs.html',
					pointer_pos : [1072, 425],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1039,401);
						ctx.lineTo(1114.5,401);
						ctx.lineTo(1114.5,433.5);
						ctx.lineTo(1077,457);
						ctx.lineTo(1040,457);
						ctx.lineTo(1039,401);
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Grade Level Classroom ',
						fontSize: 12,                         
						align: 'center'            
					}        
				}    , 
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
