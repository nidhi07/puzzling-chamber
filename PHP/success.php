<?php
session_start();
include "db_connect.php"; 
$query1 = "SELECT url FROM url";
$result1=mysql_query($query1, $link);
$row=  mysql_fetch_row($result1);
if (!isset ($_SESSION['password'])&&$row[0]!='success.php?msg=Hurray!!! Ginny is Saved.:D')
    header("Location:password.php");
include "db_connect.php";                
if(isset($_GET['time'])){
$time=$_GET['time'];
$query1 = "UPDATE team SET Time='$time', Msg='$_GET[msg]'";
mysql_query($query1, $link);}
$query1 = "SELECT Score,Weight FROM team";
$result=mysql_query($query1, $link);
$row=  mysql_fetch_row($result);
session_unset();
session_destroy();

?>
<html>
<head>
    <title> HURRAY</title>
    <!-- If Chrome Frame is enabled, let's use it! -->
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
     <!-- Load jQuery -->
     <script type="text/javascript" src="jquery-1.11.2.min.js" type="text/javascript"></script>

    <!-- Load Canvas support for IE8 and below (IE9 support Canvas) -->
    <!--[if lt IE 9]><script src="canvas/excanvas.js"></script><![endif]-->

    <!-- jQuery UI is only used for the nice slider controls -->
    <link type="text/css" href="fireworks/ui/themes/base/ui.all.css" rel="stylesheet" />
    <script type="text/javascript" src="fireworks/ui/jquery-ui.js"></script>
    <script type="text/javascript" src="fireworks/ui/ui.slider.js"></script>

    <!-- Load the fireworks script and stylesheet -->
    <script type="text/javascript" src="fireworks/canvas/fireworks.js"></script>
    <link type="text/css" href="fireworks/canvas/fireworks.css" rel="stylesheet" />
    <link rel="icon" type="image/jpg" href="images/logo.png">
    <style>
       @font-face {
    font-family:"October Crow";
    src: url("fonts/October Crow.ttf") /* TTF file for CSS3 browsers */
}
.score{
    font-family:'October Crow', sans-serif;
    font-size: 30px;
}
    </style>
</head>
<body align='right'>
    <font color='white' size='6'><b>
        <div class='score'> <?php echo 'Score : '.$row[0].'<br/>Weight : '.$row[1]; ?></div></b>
    </font>
    <script type="text/javascript">
        // we need a full screen canvas, but the canvas tag doesn't support percentage widths
        // so we simply write out the canvas tag using javascript
        document.write('<div style="background:url(fireworks/images/background.jpg) repeat-x;position:absolute;left:0;top:'+($(window).height()-193)+'px;width:100%;height:200px;"></div>');
        document.write('<canvas id="cv" width="'+$(window).width()+'" height="'+($(window).height()-100)+'" style="position:absolute;left:0;top:0;"></canvas>');
        // obviously, this become wrong if the browser window changes size
        // so we simply reload the page on resize
    </script>
    
    <div >
        <form onsubmit="FireworkDisplay.launchText();return false;" style="visibility:hidden;bgcolor:black">
            <div>
                <input id="firetext" type="text" value=" HURRAY!!GINNY IS SAVED!:D "/>
                <input id="launch" type="submit" value="Launch!"/>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        try {
        var pageTracker = _gat._getTracker("UA-6696309-2");
        pageTracker._trackPageview();
        } catch(err) {}
    </script>

</body>
</html>