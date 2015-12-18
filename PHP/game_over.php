<?php
session_start();
include "db_connect.php";
$query1 = "SELECT url FROM url";
$result1 = mysql_query($query1, $link);
$row = mysql_fetch_row($result1 );

if (!isset($_SESSION['password'])&& $row[0] != 'game_over.php?msg=Your Session is Expired&time=0&img=images/game_over.png' && $row[0] != 'game_over.php?msg=You have no more edges to travel.&time=0&img=images/game_over.png')
    header("Location:password.php");

$time = $_GET['time'];
$query1 = "UPDATE team SET Time='$time', Msg='$_GET[msg]'";
mysql_query($query1, $link);
$query1 = "SELECT Score,Weight FROM team";
$result = mysql_query($query1, $link);
$row = mysql_fetch_row($result);
session_unset();
session_destroy();
?>
<html>
    <head>
        <title> Puzzling Chamber | Game Over</title>
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
    <body align="center" style="background-image:url(<?php echo $_GET['img']; ?>); background-repeat:no-repeat; background-size: 100% 100%">

        <div class='score' align='right'>
            <font color='white' size='6'><b>
                <?php echo 'Score : ' . $row[0] . '<br/>Weight : ' . $row[1]; ?></b>
            </font></div>

        <h1><font color="#FFFFFF"> <?php echo $_GET['msg']; ?> </font></h1>
    </body>
</html>