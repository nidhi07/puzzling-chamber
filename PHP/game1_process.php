<?php
session_start();
$_SESSION['loggedin']=true;
if (!isset ($_SESSION['password']))
    header("Location:password.php");
if(!isset($_GET['success'])){
    header("Location:game1.php?NodeId=1&success=-1");
}
include "db_connect.php";
//------edge table update-------------
$Color = "#FF0000";
if ($_GET['success'] == 1)
    $Color = "#00FF00";
$query1 = "UPDATE edge SET successful='$_GET[success]', Attempts='$_GET[Attempt]',Color='$Color' WHERE EdgeId='$_GET[EdgeId]'";
mysql_query($query1, $link);
//----------edge table retreival------
$query1 = "SELECT Node1,Node2,Weight FROM edge WHERE EdgeId='$_GET[EdgeId]'";
$result1 = mysql_query($query1, $link);

$row = mysql_fetch_array($result1);
$Node1 = $row['Node1'];
$Node2 = $row['Node2'];
$Weight = $row['Weight'];
//-----------team table update-------

if ($_GET['success'] == 1 && $_GET['Attempt'] == 1) {
    $AddScore = 100;
} else if ($_GET['success'] == 1) {
    $AddScore = 50;
} else {
    $AddScore = 0;
}
if ((($Node1==24) || ($Node2==24)) && ($_GET['success'] == 1)){
    $AddScore = $AddScore + 400;
}
if ($_GET['f1'] == 1) {
    $AddScore = $AddScore - 20;
}
if ($_GET['f2'] == 1) {
    $AddScore = $AddScore - 40;
}

$query1 = "UPDATE team SET Score=Score+'$AddScore', Weight=Weight+'$Weight'";
mysql_query($query1, $link);

//------------node table update---------

if ($Node2 == $_GET['NodeId']) {
    $temp = $Node1;
    $Node1 = $Node2;
    $Node2 = $temp;
}

$Node = $Node1;
$Visited = false;
$Color = "#FFFFFF";
if ($_GET['success'] == 1) {
    $Visited = true;
    $Color = "#00FF00";
    $Node = $Node2;
}

$query1 = "UPDATE node SET Visited='$Visited',Color='$Color' WHERE NodeId='$Node2' AND Color!='#00FF00' ";
mysql_query($query1, $link);

//------------blocked node color update--------
$query1 = "SELECT Color FROM edge  WHERE( Node1='$Node2' OR Node2='$Node2') AND (Successful!=2)";
$result1 = mysql_query($query1, $link);
if (mysql_num_rows($result1) == 0) {
    $query1 = "UPDATE node SET Color='#FF0000' WHERE NodeId='$Node2'";
    mysql_query($query1, $link);
}
//----------------Game Over-----------------
$f=0;
$query1 = "SELECT EdgeId FROM edge  WHERE (Node1 in (SELECT NodeId FROM node WHERE Visited=1)  OR Node2 in (SELECT NodeId FROM node WHERE Visited=1)) AND (Successful=0)";
$result1 = mysql_query($query1, $link);                        //all nodes blocked
if (mysql_num_rows($result1) == 0) 
    $f=1;
$time=$_GET['time'];
if($Node==24){
    $msg="Hurray!!! Ginny is saved.:D";     //Reached Destination Node
    $uquery = "UPDATE url SET url='success.php?msg=Hurray!!! Ginny is Saved.:D'";
        @mysql_query($uquery,$link)or die('The query cannot be executed '.mysql_error());
header("Location:success.php?msg=" .$msg."&time=".$time);
}
else if($f==1) {
    $msg="You have no more edges to travel."; 
    $uquery = "UPDATE url SET url='game_over.php?msg=You have no more edges to travel.&time=0&img=images/game_over.png'";
        @mysql_query($uquery,$link)or die('The query cannot be executed '.mysql_error());
    header("Location:game_over.php?msg=" .$msg."&time=".$time."&img=images/game_over.png");
}
else 
   header("Location:game1.php?NodeId=" . $Node."&success=".$_GET['success']);
?>
