<?php
include_once 'db_connect.php';
        session_start();
        ?>
<html>
    <head>
        <title> Puzzling Chamber | Rules </title>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="icon" type="image/jpg" href="images/logo.png">
        <style>
            @font-face {
    font-family:"Note this";
    src: url("fonts/Note this.ttf") /* TTF file for CSS3 browsers */
}
html,body{
background-image:url(images/rules_bg.jpg);
background-repeat:no-repeat;
height: 100%; width: 100%;   
}
body{
    font-family:'Note this', sans-serif;
    font-size: 22px;
}
        </style>
    </head>
     <body>
        
         <div style="position:absolute;left:350px">
         <h3 align="center">
             <div class="text-capitalize text-info"><b><u>Rules</u></b></div>
         </h3>
         <b>
             <ul>
                 <li>
                 A graph will be given in which you have to travel from the source node to the destination node.   
                 </li>
                 <li>
                 Participants have to answer a question for every edge they'll select while traversing the graph. 
                        They'll be given 2 attempts for every question.
                 </li>
                 <li>
                 Various categories (specified on the edge itself) from which the questions will be asked are as follows
                 <ol>
                     <li>Data Structure and Algorithms</li>
                     <li>Web Development and Database</li>
                     <li>Networking and Linux</li>
                     <li>Computer Architecture (Digital logic, Operating System)</li>
                     <li>Miscellaneous</li>  
                 </ol>
                 </li>
                 <li>Difficulty level of the question will be inversely proportional to the weight of the edge. </li>
                 <li>Category of question to be asked and the weight of the edge will be mentioned at the center of the edge. </li>
                 <li>Initially each team will be given 200 points.</li>
                 <li>
            Each question will contain 2 hints:
            <ul><li>Hint 1: It will be an encoded hint. You need to decode it with the given encryption details.<br/>
                    &nbsp; &nbsp; &nbsp; 20 points will be deducted on using this hint.</li>
                <li>Hint 2: It will be in plain text. 40 points will be deducted on using this hint.</li>
            </ul>
                 </li>
                 <li>
                     Answering every question will give 100 points (on 1st attempt) and 50 points (on 2nd attempt). 
                 </li>
                 <li>
                     Bonus 400 points will be given on reaching the destination node. 
                 </li>
            <li>Participants will be judged on the basis of following 2 criteria:
                <ol><li>Total weight of the graph.</li>
                    <li>Total score(points earned).</li></ol>

            </li>
             </ul><br/>
            <font color="#FF0000"> &nbsp; &nbsp; &nbsp;NOTE:- Once your game begins, do not press refresh or back button otherwise <br/>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;your game will be OVER! </font>
            <br/><br/></b>
            <form action="page1.php" align="center">
             <input class="btn-primary btn-lg" type="submit" value="Continue" formaction="page1.php"/>
         </form>
         </div>
     </body>
</html>