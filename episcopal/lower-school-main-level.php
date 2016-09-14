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
					naming_opp  : 'lower-level-one/gymnasium.html',
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
					naming_opp  : 'lower-level-one/gymnasium.html',
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
					naming_opp  : 'lower-level-one/gymnasium.html',
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
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
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
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
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
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
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
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
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
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1065, 425],
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
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-5',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1065, 500],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1039,459);
						ctx.lineTo(1077,459);
						ctx.lineTo(1098.5,492.903);
						ctx.lineTo(1098.5,530.5);
						ctx.lineTo(1039.216,530.598);
						ctx.lineTo(1039,459);
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
					name        : 'Q-6',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1170, 460],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1140.415,425);
						ctx.lineTo(1197.5,425);
						ctx.lineTo(1197.5,498);
						ctx.lineTo(1163,498);
						ctx.lineTo(1140.005,459.715);
						ctx.lineTo(1140.415,425);
						
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
					name        : 'Q-7',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1170, 530],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1162,497);
						ctx.lineTo(1198.5,497);
						ctx.lineTo(1198.5,556);
						ctx.lineTo(1123,556);
						ctx.lineTo(1124.846,521.173);
						ctx.lineTo(1162,497);
						
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
					name        : 'Q-8',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1315, 460],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1286,425);
						ctx.lineTo(1345.5,425);
						ctx.lineTo(1345.5,460.5);
						ctx.lineTo(1323.559,498);
						ctx.lineTo(1287,498);
						ctx.lineTo(1286,425);
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
					name        : 'Q-9',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1410, 430],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1371,401);
						ctx.lineTo(1445.5,401);
						ctx.lineTo(1445.5,459);
						ctx.lineTo(1409,459);
						ctx.lineTo(1370.659,433.944);
						ctx.lineTo(1371,401);
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
					name        : 'Q-10',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1420, 500],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1444.5,458);
						ctx.lineTo(1409,458);
						ctx.lineTo(1386.667,493.75);
						ctx.lineTo(1386.833,530);
						ctx.lineTo(1444.5,530);
						ctx.lineTo(1444.5,458);
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
					name        : 'Q-11',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1325, 530],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1286.78,499.038);
						ctx.lineTo(1323,499);
						ctx.lineTo(1361.5,521.542);
						ctx.lineTo(1361.5,556);
						ctx.lineTo(1287,556);
						ctx.lineTo(1286.78,499.038);
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
					name        : 'Q-12',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1420, 685],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1386.5,648);
						ctx.lineTo(1445.5,648);
						ctx.lineTo(1445.5,719);
						ctx.lineTo(1408,719);
						ctx.lineTo(1386.5,683.465);
						ctx.lineTo(1386.5,648);
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
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-13',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1415, 750],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1408,719);
						ctx.lineTo(1444.5,719);
						ctx.lineTo(1444.5,778);
						ctx.lineTo(1372.5,778);
						ctx.lineTo(1372.5,741.5);
						ctx.lineTo(1408,719);
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
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-14',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1320, 650],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1285.5,622);
						ctx.lineTo(1360.5,622);
						ctx.lineTo(1360.5,654.5);
						ctx.lineTo(1322.25,680);
						ctx.lineTo(1285.5,680);
						ctx.lineTo(1285.5,622);
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
				}, 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-15',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1315, 720],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1286,680);
						ctx.lineTo(1322,680);
						ctx.lineTo(1346.5,722);
						ctx.lineTo(1346.5,753);
						ctx.lineTo(1286.5,753);
						ctx.lineTo(1286,680);
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
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-16',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1165, 650],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1124,623);
						ctx.lineTo(1197.5,623);
						ctx.lineTo(1197.5,679);
						ctx.lineTo(1163,679);
						ctx.lineTo(1123.75,656.5);
						ctx.lineTo(1124,623);
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
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-17',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1175, 720],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1162,679);
						ctx.lineTo(1198.5,679);
						ctx.lineTo(1198.5,752);
						ctx.lineTo(1140.5,752);
						ctx.lineTo(1140.5,718.5);
						ctx.lineTo(1162,679);
						
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
				}, 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-18',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1065, 680],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1041,649);
						ctx.lineTo(1097.5,649);
						ctx.lineTo(1097.5,682.5);
						ctx.lineTo(1075,720);
						ctx.lineTo(1040.5,720);
						ctx.lineTo(1041,649);
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
				}, 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-19',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [1065, 750],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(1039,721);
						ctx.lineTo(1076,721);
						ctx.lineTo(1115.5,744.25);
						ctx.lineTo(1115.5,779);
						ctx.lineTo(1039.25,778.25);
						ctx.lineTo(1039,721);
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
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-20',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [680, 645],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(634,609);
						ctx.lineTo(719.5,609);
						ctx.lineTo(719.5,680);
						ctx.lineTo(682,680);
						ctx.lineTo(633.5,651.25);
						ctx.lineTo(634,609);
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
				}, 
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-21',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [690, 725],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(680.5,681);
						ctx.lineTo(657.5,721);
						ctx.lineTo(657.5,779);
						ctx.lineTo(719.5,779);
						ctx.lineTo(719.5,681.5);
						ctx.lineTo(680.5,681);
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
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-22',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [540, 725],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(551.354,680);
						ctx.lineTo(575.5,720);
						ctx.lineTo(575.5,778);
						ctx.lineTo(510.5,778);
						ctx.lineTo(510.5,680.5);
						ctx.lineTo(551.354,680);
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
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-23',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [540, 645],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(550.25,680);
						ctx.lineTo(597.5,650.816);
						ctx.lineTo(597.5,609);
						ctx.lineTo(510.5,609);
						ctx.lineTo(510.5,679.635);
						ctx.lineTo(550.25,680);
						
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
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'Q-24',
					naming_opp  : 'lower-level-one/grade-level-classroom.html',
					pointer_pos : [615, 755],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(576.25,723);
						ctx.lineTo(657.5,723);
						ctx.lineTo(657.5,779);
						ctx.lineTo(576,779);
						ctx.lineTo(576.25,723);
						
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
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'F',
					naming_opp  : 'lower-level-one/actor-stage.html',
					pointer_pos : [252, 600],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(220,547);
						ctx.lineTo(283.5,547);
						ctx.lineTo(283.5,662);
						ctx.lineTo(220.998,662);
						ctx.lineTo(220,547);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Actor’s Stage',
						fontSize: 12,                         
						align: 'center'            
					}
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'C',
					naming_opp  : 'lower-level-one/dining-commons.html',
					pointer_pos : [350, 580],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(284,484.5);
						ctx.lineTo(425,484.5);
						ctx.lineTo(425,682.5);
						ctx.lineTo(286.215,682.5);
						ctx.lineTo(284,484.5);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Dining Commons',
						fontSize: 12,                         
						align: 'center'            
					}
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'A',
					naming_opp  : 'lower-level-one/chapel.html',
					pointer_pos : [880, 680],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(808,609.5);
						ctx.lineTo(952,609.5);
						ctx.lineTo(952,751.5);
						ctx.lineTo(810.267,751.5);
						ctx.lineTo(808,609.5);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Chapel',
						fontSize: 12,                         
						align: 'center'            
					}
				},
				{
					//==================================
					// Basic settings
					//==================================
					name        : 'B',
					naming_opp  : 'lower-level-one/chapel-garden.html',
					pointer_pos : [1000, 710],
					first_point : [693.8, 167.7],
					sceneFunc: function(ctx) 
					{
						ctx.moveTo(953,651.5);
						ctx.lineTo(1041,651.5);
						ctx.lineTo(1041,778.5);
						ctx.lineTo(954.386,778.5);
						ctx.lineTo(953,651.5);
						
					}
						,
					fill        : 'rgba(170,255,0,0.3)',
					stroke      : '#EA7D1A',
					strokeWidth : 1,       

					//==================================
					// Tooltip settings
					//==================================
					tooltip     : {                
						text: 'Chapel Garden',
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
