<?php session_start();
include_once 'db_connect.php';
$uquery = "UPDATE url SET url='password.php'";
        @mysql_query($uquery,$link);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Puzzling Chamber</title>
        <link rel="icon" type="image/jpg" href="images/logo.png">
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    </head>
    
    <body align="center">
        <br><br><br><br><br><br><br>
        <table align="center"> 
            <tr><td><font color="red"><?php echo @$_GET['msg'];  ?></font></td></tr>
        </table>
        <br><br><br>
        <form name="myForm" action="password_process.php" method="POST" autocomplete="off">
            <input type="password" class="form-control-static" placeholder=" Enter password" name="password"/>
            <br><br><input type="submit" class="btn btn-info" value="Continue"/>
        </form>
    </body>
</html>