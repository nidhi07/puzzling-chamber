<?php
ini_set('session.cookie_lifetime', 60 * 60 * 3);
ini_set('session.gc_maxlifetime', 60 * 60 * 3);
session_start();
    $_SESSION['loggedin']= true;
    include_once 'db_connect.php';
    if ($_POST['TeamName']== NULL)
            header('Location:index.php');
        else
        {
   $query= "INSERT INTO team SET
            CollegeName='$_POST[CollegeName]',
            TeamName='$_POST[TeamName]',
            MemberName1='$_POST[MemberName1]',
            MemberName2='$_POST[MemberName2]'";
   $result = @mysql_query($query,$link) or die('The query cannot be executed '.mysql_error());
        }
        $uquery = "UPDATE url SET url='rules.php'";
        @mysql_query($uquery,$link);
		header('Location:rules.php');
    ?>