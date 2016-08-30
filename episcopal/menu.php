<style>
    @media only screen and (min-width: 1200px) 
    {
        ul.nav li a {
            font-size: 14px;
        }
        
        ul.nav li ul.submenu li a {
            font-size: 14px;
        }
    }
</style>

<ul class="nav none">
    <li class="sub" id="li_home">
        <a href="index.php">Home</a>
        <ul class="submenu">
            <li><a href="campus-map.php">Campus Map</a></li>
        </ul>
        <div class="bg_subnav"></div>
    </li>
    <li class="area sub" id="li_perform">
        <a href="sciences-building-main-level.php">Sciences building</a>
        <ul class="submenu">
            <li><a href="sciences-building-main-level.php">Level 1</a></li>
            <li><a href="sciences-building-second-level.php">Level 2</a></li>
        </ul>
        <div class="bg_subnav"></div>
    </li>
    <li class="area" id="li_cafeteria">
        <a href="dining-hall.php">Lower school</a>
        <ul class="submenu">
            <li><a href="gallery-dining-hall.php">Level 1</a></li>
            <li><a href="dining-hall.php">Level 2</a></li>
        </ul>
        <div class="bg_subnav"></div>
    </li>                            
    <li><a href="#" onclick="abrirPop()">Contact</a></li>
</ul>