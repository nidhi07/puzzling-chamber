<?php
session_start();
$_SESSION['password']=1;
include_once 'db_connect.php';
if ($_SESSION['loggedin'] == false) {
    $msg = "Your Session is Expired.";
    $uquery = "UPDATE url SET url='game_over.php?msg=Your Session is Expired&time=0&img=images/game_over.png'";
        @mysql_query($uquery,$link);
header("Location:game_over.php?msg=" . $msg."&time=0&img=images/game_over.png");}
else
    if (md5($_POST['password']) == "92d6325f8e9c5f737298595bc33a5acf") {
        $uquery = "UPDATE url SET url='game1_process.php'";
        @mysql_query($uquery,$link);
    header("Location:game1.php?NodeId=1&success=-1");
} else {
    $msg = "Incorrect Password";
    $uquery = "UPDATE url SET url='password.php?msg=Incorrect Password'";
        @mysql_query($uquery,$link)or die('The query cannot be executed '.mysql_error());
    header('Location:password.php?msg='. $msg);
}
?>