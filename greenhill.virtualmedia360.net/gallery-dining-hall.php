<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include('metas.php'); ?>
        
                
        <!-- google font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900,300,500,600,800,100,200' rel='stylesheet' type='text/css'>
            
        <!--supersize-->
        <script type="text/javascript" src="js/supersized.3.2.7.js"></script>
        <script type="text/javascript" src="theme/supersized.shutter.js"></script>
        <!--google map-->
        <!--script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script-->
        <!--script type="text/javascript" src="js/mapa2.js"></script-->
        <script type="text/javascript">
            var ancho;
            var test = false;
            $(document).ready(function()
            {
                $('.btnGreenHill').click(function()
                {
                  /*  var file = $(this).attr('rel');
                    
                    api.playToggle('pause');
                    
                    openInfo(file);*/
        
                    var url = $(this).attr('rel');
                    
                    window.location = url;
        
                });
                $('.nam-opp .close_pop').click(function(){
                    
                    api.playToggle('play');
                    
                    closeInfo();    
                });
             
           $('#li_cafeteria').addClass('active');  
             
                /* supersize*/
                jQuery(function($){
                    $.supersized({
                        //slideshow               :   false,
                        // Functionality
                        slide_interval          :   3000,       // Length between transitions
                        transition              :   1,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                        transition_speed        :   700,        // Speed of transition
                                                                   
                        // Components                           
                        slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                        slides                  :   [           // Slideshow Images
                                                        
                                                        
                                                        //cafeteria_building
                                                        {
                                                            image : 'images/gallery/cafeteria_building/1680_main-dining-room.jpg',
                                                            title: 'Main Dining Room',
                                                            nam_opp: 'dining-hall.php#cafeteria-building/a.dining-hall-&-student-center.html'
                                                        },
                                                        {
                                                            image : 'images/gallery/cafeteria_building/1680_cafeteria-hot-servery.jpg',
                                                            title: 'Main Servery',
                                                            nam_opp: 'dining-hall.php#cafeteria-building/h.main-servery.html'
                                                        }
                                                    ]
                    });
                });
                /* end supersize */








            });

            function testing(){
                if(test == false){
                    $('body').addClass('test');
                    $('.ancho').fadeIn(250);
                    test = true;
                }else{
                    $('body').removeClass('test');
                    $('.ancho').fadeOut(250);
                    test = false;
                }
            }
        </script>
        
    </head>
    <body>

    <!--Arrow Navigation-->
    <a id="prevslide" class="load-item"></a>
    <a id="nextslide" class="load-item"></a>


    <!--Control Bar-->
    <div id="controls-wrapper" class="load-item">
        <div id="controls">
            <!--Slide counter-->
            <a href="#" rel="" class="borderM solid bgMD colorM btnGreenHill">Learn More <i class="fa fa-plus"></i></a>
            <!--div id="slidecounter">
                <span class="slidenumber"></span> / <span class="totalslides"></span>
            </div-->
            <div id="slidecaption"></div>
        </div>
    </div>


        <?php include('overlays.php'); ?>
    
        <div class="ancho brd_50"></div>
        
        <div class="guides">
            <div class="_r">
                <div class="_1">
                    <div class="lineL"></div>
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
                <div class="_1">
                    <div class="lineR"></div>
                </div>
            </div>
        </div>
        
        <?php include('header.php'); ?>

        <?php include('menu-mobile.php'); ?>  

       

        <!--wrapper -->
        <!--div id="wrapper">
            <div class="_r">
                <div class="_f _fN">
                </div>
            </div>
        </div-->
        <!--end wrapper -->
    </body>
</html>
