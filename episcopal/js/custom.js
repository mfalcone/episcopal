  var ancho;
  var test = false;
  var pop = false;
  var sidebarMobile = false;
  $(document).ready(function(){
      
      
      $('ul.nav li').hover(
        function()
        {
            if (!$(this).hasClass('active'))
            {    
                $(this).find('.submenu').css(
                { 
                    'display': 'block',
                    'z-index': '9'
                });
            }    
        }, 
        function()
        {
            if (!$(this).hasClass('active'))
            {    
                $(this).find('.submenu').css(
                { 
                    'display': 'none',
                    'z-index': '2'
                });
            }    
        }
      );
      
      /*$(window).load(function(){
          $("#sidebar div").mCustomScrollbar({
              scrollButtons:{
                  enable:true,
                  scrollInertia:80
              }
          });
      });*/
      ancho = $(window).width();
      
      $('.ancho').text(ancho);
      $(window).resize(function(){
          ancho = $(window).width();
          $('.ancho').text(ancho+17)
      });

      /*var subMenu = false;
      $( ".sub" ).click(function(){
          if(subMenu == false){
              $('.sub').addClass('active');
              $('.submenu,.bg_subnav').stop().fadeIn(250);
              subMenu = true;
          }else{
              $('.submenu,.bg_subnav').stop().fadeOut(250);
              subMenu = false;
          }
      });*/

      var menuMobile = false;
      var menu_scrolled = false;
      
      $('.nav-mobile').click(function()
      {
          if(menuMobile == false)
          {
              $('.menu-mobile').stop().fadeIn(250);
             //document.addEventListener("touchmove", preventBehavior, true);
              menuMobile = true;
              if(sidebarMobile == true){
                SideBar();
              }
          }else{
              $('.menu-mobile').stop().fadeOut(250);
             //document.addEventListener("touchmove", preventBehavior, false);
              menuMobile = false;
          }
          
          if (!menu_scrolled)
          {
              $(".menu-mobile").mCustomScrollbar({
                  scrollButtons:{
                        enable:true,
                        scrollInertia:80
                  }
              });
              
              menu_scrolled = true;  
          }    
      });

      $('.btn_sidebar').click(function(){
        SideBar();
      });
      $('#sidebar h2 a').click(function(){
        SideBar();
      });
     
      
      $('.overlayContact .close_pop').click(function(){
          cerrarPop();
      });
  });


  //mostrar-ocultar SideBar
  function SideBar(){
    if(sidebarMobile == false){
      $('#sidebar').addClass('sidebarPos');  
      $('#sidebar').css('left', 0);
      sidebarMobile = true;
    }
    else{
      $('#sidebar').removeClass('sidebarPos');
      sidebarMobile = false;
    }
  }
  
  function abrirPop(){
      //alert('abrirPop');
      if(pop == false)
      {
          $('body').addClass('overlayOpen');
          $('.overlayContact').stop().fadeIn(250,function(){
              $('.overlayContact .contenPoup').stop().animate({'top':'95px'},450);
          });
          pop = true;
      }
      
      return false;
  }

  //'easeOutQuad'
  function cerrarPop(){
      //alert('cerrarPop');
      if(pop == true){
          $('body').removeClass('overlayOpen');    
          $('.overlayContact .contenPoup').stop().animate({'top':'-1000px'},250,function(){
              $('.overlayContact').fadeOut(250);
              
              pop = false;    
          });
      }
      return false;
  }


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
  
 