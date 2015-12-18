<?php

session_start();
if (!isset ($_SESSION['password']))
    header("Location:password.php");
$_SESSION['loggedin']=true;
header('Location:game1.php?NodeId='.$_GET['NodeId']."&success=-1");
?>
