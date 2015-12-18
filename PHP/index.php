<?php
include_once 'db_connect.php';
$uquery = "SELECT url FROM url";
$uresult = @mysql_query($uquery,$link);
$urow = mysql_fetch_row($uresult);

if($urow[0]!="index.php")
header('Location:'.$urow[0]);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Software Corner | Puzzling Chamber</title>
        <script>localStorage.clear();</script>
        
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="icon" type="image/jpg" href="images/logo.png">
        <style>
            html,body{
background: rgb(195,195,195) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
@font-face {
    font-family:"Creepsville";
    src: url("fonts/Creepsville.ttf") /* TTF file for CSS3 browsers */
}
p{
    font-family:'Creepsville', sans-serif;
    font-size: 60px;
}
.submit,label{
    font-family:'Creepsville', sans-serif;
    font-size: 35px;
}
</style>
    </head>
    <body align="center">
        <div class="row">
            <div class="col-md-4">
                <br/><img src="images/logo1.jpg" align="center" style="height: 550px; width: 450px"/><br/>
            </div>
            <div class="col-md-8">
        <br/><br/><p><font color="brown">The Puzzling Chamber</font></p><br/>
        <form role="form" name="myForm" action="index_process.php" method="post" onsubmit="return validateForm()" autocomplete="off">
  <div class="form-group">
    <label for="CN">College Name:&nbsp;</label>
    <input type="College Name" placeholder="College Name" name="CollegeName" class="form-control-static" id="CN" required>
  </div>
  <div class="form-group">
    <label for="TN">Team Name:&nbsp;</label>
    <input type="Team Name" placeholder="Team Name" name="TeamName" class="form-control-static" id="TN" required>
  </div>
  <div class="form-group">
    <label for="MN1">First Member Name:&nbsp;</label>
    <input type="Member Name 1" placeholder="Member Name 1" name="MemberName1" class="form-control-static" id="MN1" required>
  </div>
  <div class="form-group">
    <label for="MN2"> Second Member Name:&nbsp;</label>
    <input type="Member Name 2" class="form-control-static" name="MemberName2" placeholder="Member Name 2" id="MN2" required>
  </div><br/><br/>
  <div class="submit"><input type="submit" class="btn btn-success" style="font-size:25px" value="Submit"/></div>
      </form></div></div>
    </body>
</html>
