<?php
session_start();
include_once 'db_connect.php';
$uquery = "UPDATE url SET url='rules2.php'";
        @mysql_query($uquery,$link);
?>
<html>
    <head>
        <title>Puzzling Chamber | Rules</title>
        <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="icon" type="image/jpg" href="images/logo.png">
        <style>
            
            @font-face {
    font-family:"nemo NightMares";
    src: url("fonts/Nemo Nightmares.ttf") /* TTF file for CSS3 browsers */
}
h1{
    font-family:'Nemo Nightmares', sans-serif;
    font-size: 70px;
}
        </style>
    </head>
    <body align="center" style="background-image:url(images/game_bg.jpg); background-repeat:no-repeat; background-size: 100% 100%">
        <h1 style="position: absolute; top: 100px; left: 100px">
            <font color="#00ffff">You are about to enter the <br/> <font color="#ccff00">"Puzzling Chamber".</font><br/>
            So let us see how your gaming screen <br/>will look like!<br/><br/></font>
            <button class="btn-danger" type='button' data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#modal1">
                Continue
            </button>
        </h1>
        <!-- Modal 1-->
        <div class="modal fade bs-example-modal-lg" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal1Label">Instruction 1</h4>
                    </div>
                    <div class="modal-body" align="center">
                        Given below is the screenshot of your gaming screen.<br/>
                        Follow the details mentioned carefully.<br/><br/>
                        <img src="images/screenshot.png" style="width: 850px;"/><br/>
                     <br/>   
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="mod1_ok" class="btn btn-primary" data-dismiss="modal" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#modal2">
                            OK, got it! </button>
                    </div>
              </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="modal fade bs-example-modal-lg" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal2Label">Instruction 2</h4>
                    </div>
                    <div class="modal-body" align="center">
                   Participants will be judged on the basis of following 2 criteria:
                   <br/>1. Total weight of the graph. 
                   <br/>2. Total score(points earned).
                   <br/><br/> Your score and weight will be shown at the top of the screen-<br/><br/>
                   <img src="images/score_weight.png" style="width: 500px;"/><br/><br/>
                   </div>
                    <div class="modal-footer">
                        <button type="button" id="mod2_ok" class="btn btn-primary" data-dismiss="modal" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#modal3">
                            OK, got it! </button>
                    </div>
              </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="modal fade bs-example-modal-lg" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal3Label">Instruction 3</h4>
                    </div>
                    <div class="modal-body" align="center">
                        <br/> Total time of <b>1 hour</b> <br/>
                        will begin as soon as you start the game.<br/>
                        The timer will be shown on the top right corner of your screen-<br/><br/>
                        <img src="images/timer.png" style="width: 500px;"/><br/><br/>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="mod3_ok" class="btn btn-primary" data-dismiss="modal" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#modal4">
                            OK, got it! </button>
                    </div>
              </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="modal fade bs-example-modal-lg" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal4Label">Instruction 4</h4>
                    </div>
                    <div class="modal-body" align="center">
                        <br/>If you get a link(url) anywhere in the question or in the <br/>
                        hint, copy and paste it in the new tab to view it as shown below-<br/>
                       <br/>
                        <img src="images/new_tab.png" style="width: 500px;"/>                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="mod4_ok" class="btn btn-primary" data-dismiss="modal" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#modal5">
                            OK, got it! </button>
                    </div>
              </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="modal fade bs-example-modal-lg" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal5Label">Instruction 5</h4>
                    </div>
                    <div class="modal-body" align="center">
                        Your Game will be OVER in the following cases:<br/>
                        1. When the Destination Node is reached.<br/>
                        2. When the Time is UP!<br/>
                        3. When you have no more edges left to travel.<br/>
                        4. Do <font color="red">NOT</font> press <font color="red">REFRESH</font> or <font color="red">BACK</font> button
                        <br/> otherwise your game will be OVER!<br/><br/>
                       <img src="images/refresh.jpg" style="width: 300px;"/><br/><br/> 
                                               
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="mod5_ok" class="btn btn-primary" data-dismiss="modal" onclick=location.replace('password.php')>
                            OK, got it! </button>
                    </div>
              </div>
            </div>
        </div>
    </body>
</html>