<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'main-level';            

        var AreasSettingsList = 
            [
               //TITLE 2,500,000
                {
                    name        : '101',
                    naming_opp  : 'fine-arts-building/main-2500000.html',
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

     // RESERVED
                /*
                //TITLE
                {
                    name        : '101',
                    naming_opp  : '#',
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
                        text: '<span>TITLE TEST</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 
                */

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '28',
                    naming_opp  : 'fine-arts-building/a.auditorium.html',
                    pointer_pos : [772.9, 307.8],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(915.8, 398.6);
                      ctx.lineTo(915.8, 213.0);
                      ctx.lineTo(923.5, 213.0);
                      ctx.lineTo(923.5, 151.5);
                      ctx.lineTo(631.0, 162.6);
                      ctx.lineTo(631.0, 415.6);
                      ctx.lineTo(610.7, 415.6);
                      ctx.lineTo(610.7, 444.5);
                      ctx.lineTo(631.0, 446.0);
                      ctx.lineTo(631.0, 446.2);
                      ctx.lineTo(932.3, 464.1);
                      ctx.lineTo(932.3, 398.6);
                      ctx.lineTo(915.8, 398.6);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Proscenium Theater/Auditorium (Reserved)',
                        fontSize: 12,                         
                        align: 'center'            
                    }        
                }    ,  


                //TITLE 2,500,000
                {
                    name        : '101',
                    naming_opp  : 'fine-arts-building/main-2500000.html',
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
                        fontSize: 1,
                        align: 'center'            
                    }        
                }    , 



                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '13',
                    naming_opp  : 'fine-arts-building/b.studio-theater.html',
                    pointer_pos : [725.7, 684.4],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(837.9, 589.6);
                      ctx.lineTo(610.7, 589.6);
                      ctx.lineTo(610.7, 779.3);
                      ctx.lineTo(837.9, 779.3);
                      ctx.lineTo(837.9, 589.6);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,           

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Studio Theater',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '2',
                    naming_opp  : 'fine-arts-building/c.grand-lobby.html',
                    pointer_pos : [490.8, 649.3],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(522.5, 769.2);
                      ctx.lineTo(501.2, 769.2);
                      ctx.lineTo(501.2, 756.3);
                      ctx.lineTo(449.2, 756.4);
                      ctx.lineTo(443.1, 795.5);
                      ctx.lineTo(387.4, 785.9);
                      ctx.lineTo(495.7, 477.2);
                      ctx.lineTo(533.0, 542.1);
                      ctx.lineTo(522.5, 769.2);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Grand Lobby',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


                //TITLE 1,000,000
                {
                    name        : '103',
                    naming_opp  : 'fine-arts-building/main-1000000.html',
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
                        fontSize: 1,
                        align: 'center'            
                    }        
                }    , 




                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '29',
                    naming_opp  : 'fine-arts-building/a.auditorium-stage.html',
                    pointer_pos : [1001.1, 306.2],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(923.5, 149.7);
                      ctx.lineTo(923.5, 213.2);
                      ctx.lineTo(915.8, 213.2);
                      ctx.lineTo(915.8, 399.6);
                      ctx.lineTo(923.5, 399.6);
                      ctx.lineTo(932.3, 399.6);
                      ctx.lineTo(932.3, 462.7);
                      ctx.lineTo(1067.7, 462.7);
                      ctx.lineTo(1067.7, 399.6);
                      ctx.lineTo(1067.7, 183.8);
                      ctx.lineTo(1067.7, 153.9);
                      ctx.lineTo(923.5, 149.7);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Auditorium Stage (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '30',
                    naming_opp  : 'fine-arts-building/g.main-gallery.html',
                    pointer_pos : [756.5, 478.1],
                    first_point : [994.0, 619.4],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(926.9, 502.3);
                        ctx.lineTo(573.4, 502.3);
                        ctx.lineTo(573.4, 442.1);
                        ctx.lineTo(926.9, 463.1);
                        ctx.lineTo(926.9, 502.3);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Main Gallery (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '31',
                    naming_opp  : 'fine-arts-building/l.faculty-office-suite.html',
                    pointer_pos : [714.8, 540.1],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(790.9, 581.3);
                          ctx.lineTo(635.8, 581.3);
                          ctx.lineTo(635.8, 498.8);
                          ctx.lineTo(790.9, 498.8);
                          ctx.lineTo(790.9, 581.3);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Faculty Office Suite (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


               

                               


                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '114',
                    naming_opp  : 'fine-arts-building/h.grand-staircase.html',
                    pointer_pos : [547.7, 688.4],                    
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(530.5, 548.2);
      ctx.lineTo(564.6, 548.9);
      ctx.lineTo(563.9, 766.7);
      ctx.lineTo(570.4, 767.9);
      ctx.lineTo(570.1, 822.7);
      ctx.lineTo(434.1, 841.3);
      ctx.lineTo(448.1, 755.2);
      ctx.lineTo(500, 755.2);
      ctx.lineTo(500, 771);
      ctx.lineTo(520, 771);
      ctx.lineTo(530.5, 548.2);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Grand Staircase',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '3',
                    naming_opp  : 'fine-arts-building/i.control-room-and-digital-suite.html',
                    pointer_pos : [602.6, 305.0],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(631.0, 349.8);
                      ctx.lineTo(571.3, 349.8);
                      ctx.lineTo(571.3, 260.3);
                      ctx.lineTo(631.0, 260.3);
                      ctx.lineTo(631.0, 349.8);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,      

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Control Room & Digital Suite',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '4',
                    naming_opp  : 'fine-arts-building/k.scene-shop.html',
                    pointer_pos : [1173.5, 684.4],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1237.2, 786.4);
                          ctx.lineTo(1237.2, 618.2);
                          ctx.lineTo(1193.2, 618.2);
                          ctx.lineTo(1193.2, 544.8);
                          ctx.lineTo(1193.2, 540.9);
                          ctx.lineTo(1193.2, 530.3);
                          ctx.lineTo(1143.6, 530.3);
                          ctx.lineTo(1143.6, 540.9);
                          ctx.lineTo(1107.0, 540.9);
                          ctx.lineTo(1107.0, 618.2);
                          ctx.lineTo(1107.0, 655.7);
                          ctx.lineTo(1107.0, 688.8);
                          ctx.lineTo(1107.0, 775.2);
                          ctx.lineTo(1237.2, 786.4);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Scene Shop',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 


                //TITLE 500,000
                {
                    name        : '104',
                    naming_opp  : 'fine-arts-building/main-500000.html',
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
                        fontSize: 1,
                        align: 'center'            
                    }        
                }    , 

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '33',
                    naming_opp  : 'fine-arts-building/n.dressing-rooms.html',
                    pointer_pos : [983, 616],
                    first_point : [994.0, 619.4],
                    sceneFunc: function(ctx) 
                    {
                          ctx.moveTo(955, 580);
                          ctx.lineTo(1013, 580);
                          ctx.lineTo(1013, 643);
                          ctx.lineTo(986, 643);
                          ctx.lineTo(986, 656);
                          ctx.lineTo(955, 656);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Lower Level Dressing Rooms - Boys',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                },
         
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '333',
                    naming_opp  : 'fine-arts-building/n.dressing-rooms.html',
                    pointer_pos : [1043, 616],
                    first_point : [994.0, 619.4],
                    sceneFunc: function(ctx) 
                    {
                          ctx.moveTo(1013, 580);
                          ctx.lineTo(1070, 580);
                          ctx.lineTo(1070, 655);
                          ctx.lineTo(1040, 655);
                          ctx.lineTo(1040, 643);
                          ctx.lineTo(1013, 643);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Lower Level Dressing Rooms - Girls (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                },

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '32',
                    naming_opp  : 'fine-arts-building/m.lounge-classroom.html',
                    pointer_pos : [912.6, 738.6],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(957.0, 688.8);
                      ctx.lineTo(865.4, 688.8);
                      ctx.lineTo(865.4, 788.3);
                      ctx.lineTo(957.0, 776.3);
                      ctx.lineTo(957.0, 688.8);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,          

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Lounge/Classroom (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 
                
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '34',
                    naming_opp  : 'fine-arts-building/p.concession-and-box-office.html',
                    pointer_pos : [589.8, 540.1],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(610.7, 581.3);
                      ctx.lineTo(566.0, 581.3);
                      ctx.lineTo(566.0, 498.8);
                      ctx.lineTo(610.7, 498.8);
                      ctx.lineTo(610.7, 581.3);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,          

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Concession & Box Office (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                } , 





                //TITLE 250,000
                {
                    name        : '104',
                    naming_opp  : 'fine-arts-building/main-250000.html',
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
                        fontSize: 1,
                        align: 'center'            
                    }        
                }    , 
                
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '7',
                    naming_opp  : 'fine-arts-building/u.technical-theater-office.html',
                    pointer_pos : [1169.5, 498.3],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(1193.2, 530.3);
                      ctx.lineTo(1143.6, 530.3);
                      ctx.lineTo(1143.6, 466.3);
                      ctx.lineTo(1193.2, 466.3);
                      ctx.lineTo(1193.2, 530.3);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Technical Theater Office',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 



                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '6',
                    naming_opp  : 'fine-arts-building/t.classroom.html',
                    pointer_pos : [993.1, 738.6],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1023.4, 767.5);
                          ctx.lineTo(1023.4, 701.9);
                          ctx.lineTo(985.3, 701.9);
                          ctx.lineTo(985.3, 688.8);
                          ctx.lineTo(957.0, 688.8);
                          ctx.lineTo(957.0, 776.3);
                          ctx.lineTo(1023.4, 767.5);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Classroom (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,



                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '10',
                    naming_opp  : 'fine-arts-building/w.catering-kitchen.html',
                    pointer_pos : [910.1, 629.7],
                    first_point : [994.0, 619.4],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(926.9, 654.5);
                        ctx.lineTo(880.7, 654.5);
                        ctx.lineTo(880.7, 592.3);
                        ctx.lineTo(926.9, 592.3);
                        ctx.lineTo(926.9, 654.5);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Catering Kitchen',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,



                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '8',
                    naming_opp  : 'fine-arts-building/v.stage-receiving-loading-dock.html',
                    pointer_pos : [1191.5, 431.4],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(1143.6, 396.9);
                      ctx.lineTo(1143.6, 466.3);
                      ctx.lineTo(1193.2, 466.3);
                      ctx.lineTo(1193.2, 479.9);
                      ctx.lineTo(1237.2, 479.9);
                      ctx.lineTo(1237.2, 466.3);
                      ctx.lineTo(1237.2, 461.8);
                      ctx.lineTo(1237.2, 396.9);
                      ctx.lineTo(1143.6, 396.9);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Stage Receiving/Loading Dock',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 


                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '9',
                    naming_opp  : 'fine-arts-building/s.front-of-house-elevator.html',
                    pointer_pos : [592.5, 428.3],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(571.3, 412.5);
                          ctx.lineTo(571.3, 441.7);
                          ctx.lineTo(610.7, 444.1);
                          ctx.lineTo(610.7, 412.5);
                          ctx.lineTo(571.3, 412.5);
                    }
                        ,
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

            
            
            
            
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '11',
                    naming_opp  : 'fine-arts-building/y.furniture-storage-room.html',
                    pointer_pos : [1191.8, 236.5],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1237.2, 278.0);
                          ctx.lineTo(1143.6, 278.0);
                          ctx.lineTo(1143.6, 195.1);
                          ctx.lineTo(1237.2, 195.1);
                          ctx.lineTo(1237.2, 278.0);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Furniture & Fixtures Room',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '12',
                    naming_opp  : 'fine-arts-building/z.scene-storage-room.html',
                    pointer_pos : [1191.8, 337.5],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1237.2, 396.9);
                          ctx.lineTo(1143.6, 396.9);
                          ctx.lineTo(1143.6, 278.0);
                          ctx.lineTo(1237.2, 278.0);
                          ctx.lineTo(1237.2, 396.9);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Scenes Room',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 


                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '106',
                    naming_opp  : 'fine-arts-building/z.main-gallery-stairwell.html',
                    pointer_pos : [995, 482],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(954, 464);
                          ctx.lineTo(1046, 464);
                          ctx.lineTo(1046, 503);
                          ctx.lineTo(954, 503);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Main Gallery Stairwell',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 








                //TITLE 150,000
                {
                    name        : '104',
                    naming_opp  : 'fine-arts-building/main-150000.html',
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
                        text: '<span>$150,000</span>',
                        fontSize: 1,
                        align: 'center'            
                    }        
                }    , 
            
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '113',
                    naming_opp  : 'fine-arts-building/a.house-manager-office.html',
                    pointer_pos : [771.4, 562.6],                    
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(789.4, 583.0);
      ctx.lineTo(748.9, 583.0);
      ctx.lineTo(748.9, 542.2);
      ctx.lineTo(789.4, 542.2);
      ctx.lineTo(789.4, 583.0);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'House Manager’s Office (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 


                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '112',
                    naming_opp  : 'fine-arts-building/a.conference-room.html',
                    pointer_pos : [771.4, 521.1],                    
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(789.4, 541.5);
      ctx.lineTo(748.9, 541.5);
      ctx.lineTo(748.9, 500.7);
      ctx.lineTo(789.4, 500.7);
      ctx.lineTo(789.4, 541.5);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Conference Room (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 






                //TITLE 150,000
                {
                    name        : '105',
                    naming_opp  : 'fine-arts-building/main-100000.html',
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
                        fontSize: 1,
                        align: 'center'            
                    }        
                }    , 



                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '16',
                    naming_opp  : 'fine-arts-building/ee.back-of-house-elevator.html',
                    pointer_pos : [1090.6, 485.4],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1107.6, 501.8);
                      ctx.lineTo(1070.8, 501.8);
                      ctx.lineTo(1070.8, 469.1);
                      ctx.lineTo(1107.6, 469.1);
                      ctx.lineTo(1107.6, 501.8);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Back of House Elevator (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 


                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '27',
                    naming_opp  : 'fine-arts-building/gg.music-storage-room.html',
                    pointer_pos : [1048.4, 736.0],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1070.5, 688.8);
                      ctx.lineTo(1043.7, 688.8);
                      ctx.lineTo(1043.7, 701.9);
                      ctx.lineTo(1023.4, 701.9);
                      ctx.lineTo(1023.4, 767.9);
                      ctx.lineTo(1070.5, 772.0);
                      ctx.lineTo(1070.5, 688.8);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Music Instrument Storage',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 



                  {
                      //==================================
                      // Basic settings
                      //==================================
                      name        : '18',
                      naming_opp  : 'fine-arts-building/uu.prop-storage-room.html',
                      pointer_pos : [1090.6, 732.6],
                      first_point : [623.8, 267.7],
                      sceneFunc: function(ctx) 
                      {
                          ctx.moveTo(1107.0, 775.2);
                        ctx.lineTo(1107.0, 688.8);
                        ctx.lineTo(1070.5, 688.8);
                        ctx.lineTo(1070.5, 772.0);
                        ctx.lineTo(1107.0, 775.2);
                      }
                          ,
                      fill        : 'rgba(170,255,0,0.3)',
                      stroke      : '#456800',
                      strokeWidth : 1,   

                      //==================================
                      // Tooltip settings
                      //==================================
                      tooltip     : {                
                          text: 'Prop Room (Reserved)',
                          fontSize: 14,                         
                          align: 'center'            
                      }        
                  }    , 
            
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '19',
                    naming_opp  : 'fine-arts-building/hh.piano-storage-room.html',
                    pointer_pos : [1089.1, 358.0],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1106.7, 382.9);
                          ctx.lineTo(1068.7, 382.9);
                          ctx.lineTo(1068.7, 333.1);
                          ctx.lineTo(1106.7, 333.1);
                          ctx.lineTo(1106.7, 382.9);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,      

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Piano Storage Room',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 

                

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '24',
                    naming_opp  : 'fine-arts-building/nn.backstage-crossover-halloway-(lower-level).html',
                    pointer_pos : [1127.0, 276.0],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1101.3, 157.5);
                      ctx.lineTo(1069.7, 149.0);
                      ctx.lineTo(1069.7, 104.9);
                      ctx.lineTo(1143.6, 123.6);
                      ctx.lineTo(1143.6, 251.3);
                      ctx.lineTo(1143.6, 462.7);
                      ctx.lineTo(1067.7, 462.7);
                      ctx.lineTo(1067.7, 382.9);
                      ctx.lineTo(1106.7, 382.9);
                      ctx.lineTo(1106.7, 202.6);
                      ctx.lineTo(1101.3, 202.6);
                      ctx.lineTo(1101.3, 157.5);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,      

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Backstage Hallway - Lower (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 

                
                
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '1',
                    naming_opp  : 'fine-arts-building/general-storage-room.html',
                    pointer_pos : [651.1, 795.9],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(610.7, 779.3);
                          ctx.lineTo(610.7, 818.6);
                          ctx.lineTo(837.9, 788.3);
                          ctx.lineTo(837.9, 779.3);
                          ctx.lineTo(610.7, 779.3);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'General Storage Room #1',
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
                    pointer_pos : [1089.1, 299.6],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(1106.7, 333.1);
                      ctx.lineTo(1068.7, 333.1);
                      ctx.lineTo(1068.7, 266.2);
                      ctx.lineTo(1106.7, 266.2);
                      ctx.lineTo(1106.7, 333.1);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,            

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'General Storage Room #2',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 




         /*       {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '14',
                    naming_opp  : 'fine-arts-building/cc.make-up-enclave.html',
                    pointer_pos : [1014.0, 658.0],
                    first_point : [994.0, 619.4],
                    sceneFunc: function(ctx) 
                    {
                      ctx.moveTo(1051.1, 654.5);
                      ctx.lineTo(1043.7, 654.5);
                      ctx.lineTo(1043.7, 642.4);
                      ctx.lineTo(1015.0, 642.4);
                      ctx.lineTo(986.6, 642.4);
                      ctx.lineTo(986.6, 654.5);
                      ctx.lineTo(979.3, 654.5);
                      ctx.lineTo(979.3, 673.8);
                      ctx.lineTo(1051.1, 673.8);
                      ctx.lineTo(1051.1, 654.5);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Make-up Enclave, Female, $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '15',
                    naming_opp  : 'fine-arts-building/dd.make-up-enclave.html',
                    pointer_pos : [1014.0, 688.0],
                    first_point : [994.0, 619.4],
                    sceneFunc: function(ctx) 
                    {
                      ctx.moveTo(979.3, 673.8);
                      ctx.lineTo(979.3, 693.0);
                      ctx.lineTo(986.6, 693.0);
                      ctx.lineTo(986.6, 702.5);
                      ctx.lineTo(1015.0, 702.5);
                      ctx.lineTo(1043.7, 702.5);
                      ctx.lineTo(1043.7, 693.0);
                      ctx.lineTo(1051.1, 693.0);
                      ctx.lineTo(1051.1, 673.8);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,         

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Make up Enclave, Male, $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            */
            
             /*   {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '17',
                    naming_opp  : 'fine-arts-building/ff.orchestra-shell-storage.html',
                    pointer_pos : [1089.1, 234.4],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1106.7, 266.2);
                      ctx.lineTo(1068.7, 266.2);
                      ctx.lineTo(1068.7, 202.6);
                      ctx.lineTo(1106.7, 202.6);
                      ctx.lineTo(1106.7, 266.2);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Orchestra Shell Storage, $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 
            */
                
                                
           /*     {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '21',
                    naming_opp  : 'fine-arts-building/kk.materials-storage-room.html',
                    pointer_pos : [1216.4, 521.1],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(1237.2, 562.4);
                      ctx.lineTo(1193.2, 562.4);
                      ctx.lineTo(1193.2, 479.9);
                      ctx.lineTo(1237.2, 479.9);
                      ctx.lineTo(1237.2, 562.4);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Materials Storage Room, $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , 
            */
         /*       {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '22',
                    naming_opp  : 'fine-arts-building/ll.tool-storage-room.html',
                    pointer_pos : [1216.4, 577.3],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1237.2, 592.3);
                      ctx.lineTo(1193.2, 592.3);
                      ctx.lineTo(1193.2, 562.4);
                      ctx.lineTo(1237.2, 562.4);
                      ctx.lineTo(1237.2, 592.3);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,           

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Tool Storage Room, $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , */
            
        /*        {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '23',
                    naming_opp  : 'fine-arts-building/mm.paint-pyro-room.html',
                    pointer_pos : [1216.4, 605.3],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(1237.2, 618.2);
                      ctx.lineTo(1193.2, 618.2);
                      ctx.lineTo(1193.2, 592.3);
                      ctx.lineTo(1237.2, 592.3);
                      ctx.lineTo(1237.2, 618.2);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,  

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Paint/Pyro Room, $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,*/ 
            
                
             /*   {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '25',
                    naming_opp  : 'fine-arts-building/pp.front-of-house-closet.html',
                    pointer_pos : [622.3, 397.1],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(631.0, 415.6);
                      ctx.lineTo(610.7, 415.6);
                      ctx.lineTo(610.7, 378.6);
                      ctx.lineTo(631.0, 378.6);
                      ctx.lineTo(631.0, 415.6);
                    }
                        ,
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,       

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Front of House Closet, $100,000',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    , */
            
    /*            {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '26',
                    naming_opp  : 'fine-arts-building/qq.stairway-(central).html',
                    pointer_pos : [1002.6, 482.3],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1045.3, 501.8);
                      ctx.lineTo(957.1, 501.8);
                      ctx.lineTo(957.1, 462.7);
                      ctx.lineTo(1045.3, 462.7);
                      ctx.lineTo(1045.3, 501.8);
                    }
                        ,
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
                }    ,         */        
                





                /*{
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '26',
                    naming_opp  : 'fine-arts-building/ejem1.html',
                    pointer_pos : [1085.1, 177.8],
                    first_point : [623.8, 267.7],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(1068.7, 149.0);
                      ctx.lineTo(1068.7, 202.6);
                      ctx.lineTo(1101.3, 202.6);
                      ctx.lineTo(1101.3, 157.5);
                      ctx.lineTo(1068.7, 149.0);
                    }
                        ,
                    fill        : 'red',
                    stroke      : '#456800',
                    strokeWidth : 1,   

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '??',
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
