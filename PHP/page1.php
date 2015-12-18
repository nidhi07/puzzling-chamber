<?php
session_start();
include_once 'db_connect.php';
$uquery = "UPDATE url SET url='page1.php'";
        @mysql_query($uquery,$link);
?>
<html>
    <head>
        <title> Puzzling Chamber | Problem Statement </title>
    <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <style>
            #carousel-example-generic{
                width:100%;
               height:100%;
            }
            .carousel-caption {
    top: 0;
    bottom: auto;
}


@font-face {
    font-family:"October Crow";
    src: url("fonts/October Crow.ttf") /* TTF file for CSS3 browsers */
}
p{
    font-family:'October Crow', sans-serif;
    font-size: 30px;
}
      
        </style>
        <link rel="icon" type="image/jpg" href="images/logo.png">
    </head>
    <body background="#000000">
       <div id="carousel-example-generic" class="carousel slide" data-interval="15000" data-ride="carousel" align="center" style="background: black">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
    <div class="item active">
        <img src="images/Page1.png" data-holder-rendered="true">
      <div class="carousel-caption">
          <p><font color="white" >Harry finds a note in Hermione's hand who is in an unconscious state. 
        The note reveals that Ginny has been taken into the Chamber of Secrets by a giant monster, Basilisk.
        At the back of the note, there is a weighted, undirected graph G having 24 vertices 
        that is a map which represents the interior of the Chamber.
        </font></p>
      </div>
    </div>
    <div class="item">
        <img src="images/Page2.png" data-holder-rendered="true">
      <div class="carousel-caption">
          <p><font color="white" >Harry carries the map and ventures into the Chamber alone with the Sword of Gryffindor to save Ginny.
         Basilisk, being an intelligent monster, made the chamber into a maze of doors whose paths are being guarded by the baby monsters .
        </font></p>
      </div>
    </div>
    
    <div class="item">
        <img src="images/Page3.png" data-holder-rendered="true">
      <div class="carousel-caption">
          <p><font color="white" >
        <br/> Each door can be unlocked only by answering the question written over it. 
        Difficulty of the question will be inversely proportional to the no.
        of baby monsters on the leading path ( weight of the edge ).
        Harry has to reach Ginny as soon as possible so he will prefer the path that contains less no. of baby monsters to be killed.
        </font></p>
      </div>
    </div>
      <div class="item">
          <img src="images/Page4.png" data-holder-rendered="true">
      <div class="carousel-caption">
          <p><font color="white" >
        <br/> Initially the potential of Sword of Gryffindor is 200 units which will be modified later depending upon the following:
        <br/>1. no. of questions answered
        <br/>2. no. and types of hints used
        <br/>3. no. of attempts taken
        </font> </p>
      </div>
    </div>
      <div class="item">
          <img src="images/Page5.png" data-holder-rendered="true">
      <div class="carousel-caption">
          <p><font color="white" >
         Now your aim is to help Harry to save Ginny by reaching the destination node.
        Make the potential of the Sword of Gryffindor as large as possible while keeping the weight of the graph as small as possible. 
        If all the doors from all the nodes that you have visited are locked, your game is OVER!
        <br>(Backtracking is allowed)
        <br/><br/><br/>
        <a href="game_start.php"> <font color="pink" size="70">Click here to continue.</font></a>
        </font></p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </body>
</html>