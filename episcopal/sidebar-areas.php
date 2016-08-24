<!-- sidebar -->
<div class="btn_sidebar">
	<div></div>
</div>

<style>
	.btn_areas_list{
		background-color:red;
		z-index:0;
		position:fixed;
		top:77px;
		bottom:0;
		width:35px;
		left:0;
		cursor:pointer;
		background: url("images/area_icon.png") no-repeat scroll center center #242424;
	}

	.btn_areas_list:hover{
		background-color:#2f2f2f;
	}
        
        #sidebar h2 {
            font-size:1.1em;
        }
</style>

<script>
	
      /*  var theinterval;
        
	$(document).ready(function()
        {
            
            $('.btn_areas_list').mouseenter(function() 
            {   
                enableSideBar();                                
            });
            
            $('#sidebar').mouseenter(function() 
            {   
                clearInterval(theinterval);                        
            });

            $('#sidebar').mouseleave(function() {
                    theinterval = setInterval(function(){ disableSideBar(); }, 3000);
            });
            
            setTimeout(function(){ enableSideBar(); }, 1000);
	});
	

	function disableSideBar()
        {
		$('#sidebar').stop().animate({'left':'-300px'}, 500, "easeOutExpo");
		$('.btn_areas_list').stop().delay(500).animate({'left':'0px'}, 250, "easeOutExpo");		
	}

	function enableSideBar()
        {		
            $('#sidebar').stop().animate({'left':'0px'}, 500, "easeOutExpo");
            $('.btn_areas_list').stop().animate({'left':'-40px'}, 250, "easeOutExpo");            
	}
*/
</script>

<div style="position: fixed; height: 15px; bottom: 0px; font-size: 14px; text-align: right; background-color: rgba(0, 0, 0, 0.4); color: rgb(255, 255, 255); right: 0px; left: 34px; padding: 2px;">Please note that plans may change and final building configuration may shift during construction of the building.</div>

<div class="btn_areas_list"></div>

<div id="sidebar">
    <h2>
        Naming Opportunities 
        <span></span>
        <a href="#"></a>
    </h2>
    <div class="scroll">
    	<ul></ul>
    </div>
</div>