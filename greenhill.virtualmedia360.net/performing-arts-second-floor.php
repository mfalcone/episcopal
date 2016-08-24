<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'second-floor';            

        var AreasSettingsList = 
            [
                



                




                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '101',
                    naming_opp  : 'fine-arts-building/snd-1500000.html',
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
                    name        : '1',
                    naming_opp  : 'fine-arts-building/e.dance-&-choral-hall.html',
                    pointer_pos : [518.3, 307.5],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(572.2, 446.8);
                        ctx.lineTo(461.5, 440.1);
                        ctx.lineTo(461.5, 174.4);
                        ctx.lineTo(572.2, 168.2);
                        ctx.lineTo(572.2, 446.8);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,      

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Dance & Choral Hall',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
               
                


                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '102',
                    naming_opp  : 'fine-arts-building/snd-1000000.html',
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
                    name        : '3',
                    naming_opp  : 'fine-arts-building/j.video-classroom-and-editing-lab.html',
                    pointer_pos : [774.1, 514.4],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(863.5, 550.1);
                        ctx.lineTo(681.8, 550.1);
                        ctx.lineTo(681.8, 478.8);
                        ctx.lineTo(863.5, 478.8);
                        ctx.lineTo(863.5, 550.1);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Video Classroom & Editing Lab (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '103',
                    naming_opp  : 'fine-arts-building/snd-500000.html',
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
                    name        : '4',
                    naming_opp  : 'fine-arts-building/r.upper-gallery.html',
                    pointer_pos : [843.9, 456.9],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(997.8, 478.8);
                        ctx.lineTo(658.7, 478.8);
                        ctx.lineTo(658.7, 426.3);
                        ctx.lineTo(969.5, 444.1);
                        ctx.lineTo(997.8, 444.1);
                        ctx.lineTo(997.8, 478.8);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,      

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Upper Gallery (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '17',
                    naming_opp  : 'fine-arts-building/q.upper-lobby.html',
                    pointer_pos : [628.7, 341.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(658.7, 518.7);
                        ctx.lineTo(624.9, 518.7);
                        ctx.lineTo(624.9, 515.5);
                        ctx.lineTo(589.7, 454.3);
                        ctx.lineTo(594.8, 441.4);
                        ctx.lineTo(572.2, 441.3);
                        ctx.lineTo(572.2, 423.2);
                        ctx.lineTo(575.2, 423.3);
                        ctx.lineTo(596.9, 308.6);
                        ctx.lineTo(596.9, 167.8);
                        ctx.lineTo(658.7, 163.4);
                        ctx.lineTo(658.7, 518.7);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,    

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Upper Lobby (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,



                
        
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '104',
                    naming_opp  : 'fine-arts-building/snd-250000.html',
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
                    name        : '13',
                    naming_opp  : 'fine-arts-building/x.costume-storage-room.html',
                    pointer_pos : [1115.8, 341.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1130.7, 413.0);
                        ctx.lineTo(1098.1, 413.0);
                        ctx.lineTo(1098.1, 270.2);
                        ctx.lineTo(1130.7, 270.2);
                        ctx.lineTo(1130.7, 413.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Costume Room',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '5',
                    naming_opp  : 'fine-arts-building/s.front-of-house-elevator.html',
                    pointer_pos : [677.1, 414.5],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(658.7, 400.8);
                        ctx.lineTo(658.7, 426.3);
                        ctx.lineTo(692.8, 428.3);
                        ctx.lineTo(692.8, 400.8);
                        ctx.lineTo(658.7, 400.8);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Front of House Elevator',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
                           
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '105',
                    naming_opp  : 'fine-arts-building/snd-100000.html',
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
                    name        : '7',
                    naming_opp  : 'fine-arts-building/ee.back-of-house-elevator.html',
                    pointer_pos : [1115.8, 463.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1130.7, 478.0);
                        ctx.lineTo(1098.1, 478.0);
                        ctx.lineTo(1098.1, 449.2);
                        ctx.lineTo(1130.7, 449.2);
                        ctx.lineTo(1130.7, 478.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,      

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Back of House Elevator',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '15',
                    naming_opp  : 'fine-arts-building/xx.dimmer-room.html',
                    pointer_pos : [1043.5, 528.5],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1058.8, 555.7);
                      ctx.lineTo(1025.2, 555.7);
                      ctx.lineTo(1025.2, 501.3);
                      ctx.lineTo(1058.8, 501.3);
                      ctx.lineTo(1058.8, 555.7);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Dimmer Room',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '9',
                    naming_opp  : 'fine-arts-building/oo.back-of-house-hallway-(upper-level).html',
                    pointer_pos : [1148.8, 315.2],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1098.1, 128.3);
                        ctx.lineTo(1098.1, 167.8);
                        ctx.lineTo(1130.7, 175.4);
                        ctx.lineTo(1130.7, 502.2);
                        ctx.lineTo(1163.2, 502.2);
                        ctx.lineTo(1163.2, 183.0);
                        ctx.lineTo(1163.2, 165.3);
                        ctx.lineTo(1163.2, 143.5);
                        ctx.lineTo(1098.1, 128.3);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Back of House Hallway (Upper)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '23',
                    naming_opp  : 'fine-arts-building/e.choral.html',
                    pointer_pos : [453, 304],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(443, 219);
                        ctx.lineTo(463, 219);
                        ctx.lineTo(463, 382);
                        ctx.lineTo(443, 382);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,      

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Choral Risers',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                



 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '8',
                    naming_opp  : 'fine-arts-building/ii.balcony-storage-room.html',
                    pointer_pos : [680.0, 305.9],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(697.3, 346.4);
                        ctx.lineTo(658.7, 346.4);
                        ctx.lineTo(658.7, 265.4);
                        ctx.lineTo(697.3, 265.4);
                        ctx.lineTo(697.3, 346.4);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Balcony Storage Room',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                



                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '6',
                    naming_opp  : 'fine-arts-building/zz.costume-shop.html',
                    pointer_pos : [1102.1, 537.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1085.4, 500.2);
                        ctx.lineTo(1085.4, 525.4);
                        ctx.lineTo(1058.9, 525.4);
                        ctx.lineTo(1058.9, 554.6);
                        ctx.lineTo(1119.4, 554.6);
                        ctx.lineTo(1119.4, 500.2);
                        ctx.lineTo(1085.4, 500.2);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Costume Shop',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
                
                
            
                
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '12',
                    naming_opp  : 'fine-arts-building/general-storage-room.html',
                    pointer_pos : [1115.8, 190.9],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1130.7, 213.8);
                        ctx.lineTo(1098.1, 213.9);
                        ctx.lineTo(1098.1, 167.8);
                        ctx.lineTo(1130.7, 175.4);
                        ctx.lineTo(1130.7, 213.8);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'General Storage Room #3',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                 
                
                
                
  {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '28',
                    naming_opp  : 'fine-arts-building/a.upper-level-dressing-room.html',
                    pointer_pos : [900, 490],
                    sceneFunc: function(ctx) 
                    {
                          ctx.moveTo(884, 477.0);
                          ctx.lineTo(919, 477.0);
                          ctx.lineTo(919, 507.0);
                          ctx.lineTo(884, 507.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Upper Level Dressing Room #1',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                } ,


        {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '288',
                    naming_opp  : 'fine-arts-building/a.upper-level-dressing-room.html',
                    pointer_pos : [954, 490],
                    sceneFunc: function(ctx) 
                    {
                          ctx.moveTo(936.0, 477.0);
                          ctx.lineTo(971.0, 477.0);
                          ctx.lineTo(971, 507.0);
                          ctx.lineTo(936, 507.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Upper Level Dressing Room #2',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                } ,





/* =========== DELETED

{
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '14',
                    naming_opp  : 'fine-arts-building/general-storage-room.html',
                    pointer_pos : [586.0, 298.2],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(596.9, 309.4);
                      ctx.lineTo(596.9, 240.3);
                      ctx.lineTo(572.2, 240.3);
                      ctx.lineTo(572.2, 356.2);
                      ctx.lineTo(588.0, 356.2);
                      ctx.lineTo(596.9, 309.4); 
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'General Storage Room #6',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
                



                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '18',
                    naming_opp  : 'fine-arts-building/general-storage-room.html',
                    pointer_pos : [579.1, 377.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(572.2, 356.2);
                        ctx.lineTo(572.2, 423.2);
                        ctx.lineTo(575.2, 423.3);
                        ctx.lineTo(588.0, 356.2);
                        ctx.lineTo(572.2, 356.2);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,            

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'General Storage Room #7',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
           
                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '22',
                    naming_opp  : 'fine-arts-building/general-storage-room.html',
                    pointer_pos : [586.0, 213.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(596.9, 240.3);
                        ctx.lineTo(572.2, 240.3);
                        ctx.lineTo(572.2, 187.1);
                        ctx.lineTo(596.9, 187.1);
                        ctx.lineTo(596.9, 240.3);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'General Storage Room #8',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                } ,



 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '16',
                    naming_opp  : 'fine-arts-building/yy.laundry-room.html',
                    pointer_pos : [1142.7, 529.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1119.4, 502.2);
                        ctx.lineTo(1163.2, 502.2);
                        ctx.lineTo(1163.2, 555.7);
                        ctx.lineTo(1119.4, 555.7);
                        ctx.lineTo(1119.4, 502.2);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Laundry Room, $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


{
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '10',
                    naming_opp  : 'fine-arts-building/qq.stairway-(central).html',
                    pointer_pos : [1038.2, 461.4],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1075.7, 478.8);
                      ctx.lineTo(997.8, 478.8);
                      ctx.lineTo(997.8, 444.1);
                      ctx.lineTo(1075.7, 444.1);
                      ctx.lineTo(1075.7, 478.8);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Stairway (Central), $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '11',
                    naming_opp  : 'fine-arts-building/rr.stairway-(north).html',
                    pointer_pos : [841.4, 158.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1021.2, 166.9);
                        ctx.lineTo(968.8, 167.0);
                        ctx.lineTo(658.8, 185.3);
                        ctx.lineTo(658.8, 154.1);
                        ctx.lineTo(1021.2, 131.9);
                        ctx.lineTo(1021.2, 166.9);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Stairway (North), $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
                

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '2',
                    naming_opp  : 'fine-arts-building/h.grand-staircase.html',
                    pointer_pos : [641.4, 659.4],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(624.9, 518.7);
                        ctx.lineTo(614.2, 715.4);
                        ctx.lineTo(595.4, 715.8);
                        ctx.lineTo(595.4, 704.9);
                        ctx.lineTo(550.5, 704.8);
                        ctx.lineTo(538.8, 737.6);
                        ctx.lineTo(653.2, 758.7);
                        ctx.lineTo(658.7, 758.7);
                        ctx.lineTo(658.7, 518.7);
                        ctx.lineTo(624.9, 518.7);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Grand Staircase, $1,000,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '20',
                    naming_opp  : 'fine-arts-building/general-storage-room.html',
                    pointer_pos : [451.4, 195.3],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(461.5, 175.1);
                        ctx.lineTo(438.5, 167.3);
                        ctx.lineTo(438.5, 217.6);
                        ctx.lineTo(461.5, 217.6);
                        ctx.lineTo(461.5, 175.1);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,           

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'General Storage Room (1 of 8), $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '21',
                    naming_opp  : 'fine-arts-building/general-storage-room.html',
                    pointer_pos : [451.4, 413.1],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(461.5, 440.0);
                        ctx.lineTo(438.5, 445.9);
                        ctx.lineTo(438.5, 383.2);
                        ctx.lineTo(461.5, 383.2);
                        ctx.lineTo(461.5, 440.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,      

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'General Storage Room (1 of 8), $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            

*/

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
