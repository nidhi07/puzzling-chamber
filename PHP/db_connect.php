<?php
$link= @mysql_connect('localhost','root','');
if(!$link)
{
     die("Could not connect to Mysql".mysql_error());
}
mysql_select_db('puzzling_chamber',$link)or die ("could not open database ".mysql_error());
?>