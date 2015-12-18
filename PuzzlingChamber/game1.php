<?php
session_start();
if (!isset($_SESSION['password']))
    header("Location:password.php");
include 'db_connect.php';
if ($_SESSION['loggedin'] == false) {
    $msg = "Your Session is Expired.";
    $uquery = "UPDATE url SET url='game_over.php?msg=Your Session is Expired&time=0&img=images/game_over.png'";
    @mysql_query($uquery, $link);
    header("Location:game_over.php?msg=" . $msg . "&time=0&img=images/game_over.png");
}
?>
<html>

    <head>
        <title>Puzzling Chamber</title>

        <script type="text/javascript" src="js/min/json2.min.js"></script>
        <script type="text/javascript" src="js/min/AC_OETags.min.js"></script>
        <script type="text/javascript" src="js/min/cytoscapeweb.min.js"></script>
        <script type="text/javascript" src="jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <script type="text/javascript" src="timer.js"></script>
        <link rel="icon" type="image/jpg" href="images/logo.png">
        <?php
        $query3 = "SELECT EdgeId,Color FROM edge ORDER BY EdgeId";
        $result3 = mysql_query($query3, $link);
        $i = 0;
        while ($row = mysql_fetch_array($result3)) {
            $data1[$i]['EdgeId'] = $row['EdgeId'];
            $data1[$i]['Color'] = $row['Color'];
            $i++;
        }
        $query4 = "SELECT NodeId,Color FROM node ORDER BY NodeId";
        $result4 = mysql_query($query4, $link);
        $i = 0;
        while ($row = mysql_fetch_array($result4)) {
            $data2[$i]['NodeId'] = $row['NodeId'];
            $data2[$i]['Color'] = $row['Color'];
            $i++;
        }
        ?> 
        <script type='text/javascript'>

            var color = <?php echo json_encode($data1) ?>;
            var color2 = <?php echo json_encode($data2) ?>;
            window.onload = function() {
                // id of Cytoscape Web container div
                var div_id = "cytoscapeweb";
                // NOTE: - the attributes on nodes and edges
                //       - it also has directed edges, which will automatically display edge arrows
                var xml = '\
                        <graphml>\
                          <key id="label" for="all" attr.name="label" attr.type="string"/>\
                          <key id="weight" for="edge" attr.name="weight" attr.type="double"/>\
                          <graph edgedefault="undirected">\
                            <node id="1">\
                                <data key="label">S</data>\
                            </node>\
                            <node id="2">\
                                <data key="label">2</data>\
                            </node>\\n\
                            <node id="3">\
                                <data key="label">3</data>\
                            </node>\\n\
                            <node id="4">\
                                <data key="label">4</data>\
                            </node>\\n\
                            <node id="5">\
                                <data key="label">5</data>\
                            </node>\\n\
                            <node id="6">\
                                <data key="label">6</data>\
                            </node>\\n\
                            <node id="7">\
                                <data key="label">7</data>\
                            </node>\\n\
                            <node id="8">\
                                <data key="label">8</data>\
                            </node>\\n\
                            <node id="9">\
                                <data key="label">9</data>\
                            </node>\\n\
                            <node id="10">\
                                <data key="label">10</data>\
                            </node>\\n\
                            <node id="11">\
                                <data key="label">11</data>\
                            </node>\\n\
                            <node id="12">\
                                <data key="label">12</data>\
                            </node>\\n\
                            <node id="13">\
                                <data key="label">13</data>\
                            </node>\\n\
                            <node id="14">\
                                <data key="label">14</data>\
                            </node>\\n\
                            <node id="15">\
                                <data key="label">15</data>\
                            </node>\\n\
                            <node id="16">\
                                <data key="label">16</data>\
                            </node>\\n\
                            <node id="17">\
                                <data key="label">17</data>\
                            </node>\\n\
                            <node id="18">\
                                <data key="label">18</data>\
                            </node>\\n\
                            <node id="19">\
                               <data key="label">19</data>\
                             </node>\\n\
                            <node id="20">\
                                <data key="label">20</data>\
                            </node>\\n\
                            <node id="21">\
                                <data key="label">21</data>\
                            </node>\\n\
                            <node id="22">\
                                <data key="label">22</data>\
                            </node>\\n\
                            <node id="23">\
                                <data key="label">23</data>\
                            </node>\\n\
                            <node id="24">\
                                <data key="label">D</data>\
                            </node>\
                            <edge id="1" source="1" target="2">\
                                <data key="label">WD,7</data>\
                                <data key="weight">7</data>\
                            </edge>\
                            <edge id="2" source="1" target="3">\
                                <data key="label">DS,7</data>\
                                <data key="weight">7</data>\
                            </edge>\
                            <edge id="3" source="1" target="4">\
                                <data key="label">M,7</data>\
                                <data key="weight">7</data>\
                            </edge>\
                            <edge id="4" source="6" target="5">\
                                <data key="label">CA,7</data>\
                                <data key="weight">7</data>\
                            </edge>\
                            <edge id="5" source="7" target="10">\
                                <data key="label">CA,7</data>\
                                <data key="weight">7</data>\
                            </edge>\
                            <edge id="6" source="5" target="10">\
                                <data key="label">NL,7</data>\
                                <data key="weight">7</data>\
                            </edge>\
                            <edge id="7" source="2" target="7">\
                                <data key="label">CA,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="8" source="3" target="7">\
                                <data key="label">M,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="9" source="4" target="7">\
                                <data key="label">WD,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="10" source="7" target="6">\
                                <data key="label">NL,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="11" source="7" target="11">\
                                <data key="label">DS,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="12" source="10" target="13">\
                                <data key="label">NL,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="13" source="5" target="8">\
                                <data key="label">WD,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="14" source="10" target="15">\
                                <data key="label">WD,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="15" source="13" target="16">\
                                <data key="label">M,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="16" source="15" target="18">\
                                <data key="label">CA,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="17" source="12" target="13">\
                                <data key="label">DS,6</data>\
                                <data key="weight">6</data>\
                            </edge>\
                            <edge id="18" source="7" target="9">\
                                <data key="label">WD,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="19" source="8" target="9">\
                                <data key="label">DS,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="20" source="9" target="12">\
                                <data key="label">M,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="21" source="9" target="16">\
                                <data key="label">CA,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="22" source="13" target="14">\
                                <data key="label">WD,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="23" source="11" target="17">\
                                <data key="label">NL,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="24" source="13" target="17">\
                                <data key="label">CA,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="25" source="15" target="19">\
                                <data key="label">M,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="26" source="18" target="19">\
                                <data key="label">NL,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="27" source="16" target="19">\
                                <data key="label">DS,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="28" source="16" target="21">\
                                <data key="label">NL,5</data>\
                                <data key="weight">5</data>\
                            </edge>\
                            <edge id="29" source="9" target="22">\
                                <data key="label">DS,4</data>\
                                <data key="weight">4</data>\
                            </edge>\
                            <edge id="30" source="19" target="22">\
                                <data key="label">WD,4</data>\
                                <data key="weight">4</data>\
                            </edge>\
                            <edge id="31" source="19" target="20">\
                                <data key="label">CA,4</data>\
                                <data key="weight">4</data>\
                            </edge>\
                            <edge id="32" source="17" target="22">\
                                <data key="label">DS,4</data>\
                                <data key="weight">4</data>\
                            </edge>\
                            <edge id="33" source="20" target="21">\
                                <data key="label">WD,4</data>\
                                <data key="weight">4</data>\
                            </edge>\
                            <edge id="34" source="20" target="23">\
                                <data key="label">M,4</data>\
                                <data key="weight">4</data>\
                            </edge>\
                            <edge id="35" source="19" target="23">\
                                <data key="label">M,4</data>\
                                <data key="weight">4</data>\
                            </edge>\
                            <edge id="36" source="14" target="23">\
                                <data key="label">NL,4</data>\
                                <data key="weight">4</data>\
                            </edge>\
                            <edge id="37" source="22" target="24">\
                                <data key="label">CA,3</data>\
                                <data key="weight">3</data>\
                            </edge>\
                            <edge id="38" source="20" target="24">\
                                <data key="label">NL,3</data>\
                                <data key="weight">3</data>\
                            </edge>\
                            <edge id="39" source="23" target="24">\
                                <data key="label">WD,3</data>\
                                <data key="weight">3</data>\
                            </edge>\
                          </graph>\
                        </graphml>\
                        ';
                function rand_color() {
                    function rand_channel() {
                        return Math.round(Math.random() * 255);
                    }
                    function hex_string(num) {
                        var ret = num.toString(16);
                        if (ret.length < 2) {
                            return "0" + ret;
                        } else {
                            return ret;
                        }
                    }
                    var r = rand_channel();
                    var g = rand_channel();
                    var b = rand_channel();
                    return "#" + hex_string(r) + hex_string(g) + hex_string(b);
                }
                // visual style we will use
                var visual_style = {
                    global: {
                        backgroundColor: "#000000"
                    },
                    nodes: {
                        shape: "Circle",
                        borderWidth: 2,
                        borderColor: "#ffffff",
                        size: {
                            discreteMapper: {
                                attrName: "id",
                                entries: [
                                    {attrValue: 1, value: 30},
                                    {attrValue: 24, value: 30}
                                ]
                            }
                        },
                        color: {
                            discreteMapper: {
                                attrName: "id",
                                entries: [
                                    {attrValue: 1, value: color2[0].Color},
                                    {attrValue: 2, value: color2[1].Color},
                                    {attrValue: 3, value: color2[2].Color},
                                    {attrValue: 4, value: color2[3].Color},
                                    {attrValue: 5, value: color2[4].Color},
                                    {attrValue: 6, value: color2[5].Color},
                                    {attrValue: 7, value: color2[6].Color},
                                    {attrValue: 8, value: color2[7].Color},
                                    {attrValue: 9, value: color2[8].Color},
                                    {attrValue: 10, value: color2[9].Color},
                                    {attrValue: 11, value: color2[10].Color},
                                    {attrValue: 12, value: color2[11].Color},
                                    {attrValue: 13, value: color2[12].Color},
                                    {attrValue: 14, value: color2[13].Color},
                                    {attrValue: 15, value: color2[14].Color},
                                    {attrValue: 16, value: color2[15].Color},
                                    {attrValue: 17, value: color2[16].Color},
                                    {attrValue: 18, value: color2[17].Color},
                                    {attrValue: 19, value: color2[18].Color},
                                    {attrValue: 20, value: color2[19].Color},
                                    {attrValue: 21, value: color2[20].Color},
                                    {attrValue: 22, value: color2[21].Color},
                                    {attrValue: 23, value: color2[22].Color},
                                    {attrValue: 24, value: color2[23].Color}

                                ]
                            }

                        },
                        labelHorizontalAnchor: "center",
                        labelFontColor: {
                            discreteMapper: {
                                attrName: "id",
                                entries: [
                                    {attrValue: 1, value: "#000000"},
                                    {attrValue: 24, value: "#000000"}
                                ]
                            }
                        },
                        labelFontSize: {
                            discreteMapper: {
                                attrName: "id",
                                entries: [
                                    {attrValue: 1, value: 18},
                                    {attrValue: 2, value: 15},
                                    {attrValue: 3, value: 15},
                                    {attrValue: 4, value: 15},
                                    {attrValue: 5, value: 15},
                                    {attrValue: 6, value: 15},
                                    {attrValue: 7, value: 15},
                                    {attrValue: 8, value: 15},
                                    {attrValue: 9, value: 15},
                                    {attrValue: 10, value: 15},
                                    {attrValue: 11, value: 15},
                                    {attrValue: 12, value: 15},
                                    {attrValue: 13, value: 15},
                                    {attrValue: 14, value: 15},
                                    {attrValue: 15, value: 15},
                                    {attrValue: 16, value: 15},
                                    {attrValue: 17, value: 15},
                                    {attrValue: 18, value: 15},
                                    {attrValue: 19, value: 15},
                                    {attrValue: 20, value: 15},
                                    {attrValue: 21, value: 15},
                                    {attrValue: 22, value: 15},
                                    {attrValue: 23, value: 15},
                                    {attrValue: 24, value: 18}
                                ]
                            }
                        },
                        labelFontWeight: "bold"
                    },
                    edges: {
                        width: 3,
                        color: {
                            discreteMapper: {
                                attrName: "id",
                                entries: [
                                    {attrValue: 1, value: color[0].Color},
                                    {attrValue: 2, value: color[1].Color},
                                    {attrValue: 3, value: color[2].Color},
                                    {attrValue: 4, value: color[3].Color},
                                    {attrValue: 5, value: color[4].Color},
                                    {attrValue: 6, value: color[5].Color},
                                    {attrValue: 7, value: color[6].Color},
                                    {attrValue: 8, value: color[7].Color},
                                    {attrValue: 9, value: color[8].Color},
                                    {attrValue: 10, value: color[9].Color},
                                    {attrValue: 11, value: color[10].Color},
                                    {attrValue: 12, value: color[11].Color},
                                    {attrValue: 13, value: color[12].Color},
                                    {attrValue: 14, value: color[13].Color},
                                    {attrValue: 15, value: color[14].Color},
                                    {attrValue: 16, value: color[15].Color},
                                    {attrValue: 17, value: color[16].Color},
                                    {attrValue: 18, value: color[17].Color},
                                    {attrValue: 19, value: color[18].Color},
                                    {attrValue: 20, value: color[19].Color},
                                    {attrValue: 21, value: color[20].Color},
                                    {attrValue: 22, value: color[21].Color},
                                    {attrValue: 23, value: color[22].Color},
                                    {attrValue: 24, value: color[23].Color},
                                    {attrValue: 25, value: color[24].Color},
                                    {attrValue: 26, value: color[25].Color},
                                    {attrValue: 27, value: color[26].Color},
                                    {attrValue: 28, value: color[27].Color},
                                    {attrValue: 29, value: color[28].Color},
                                    {attrValue: 30, value: color[29].Color},
                                    {attrValue: 31, value: color[30].Color},
                                    {attrValue: 32, value: color[31].Color},
                                    {attrValue: 33, value: color[32].Color},
                                    {attrValue: 34, value: color[33].Color},
                                    {attrValue: 35, value: color[34].Color},
                                    {attrValue: 36, value: color[35].Color},
                                    {attrValue: 37, value: color[36].Color},
                                    {attrValue: 38, value: color[37].Color},
                                    {attrValue: 39, value: color[38].Color}
                                ]
                            }
                        },
                        labelFontSize: 18,
                        labelFontColor: "#FFFFFF"
                    }
                };
                // initialization options
                var options = {
                    swfPath: "swf/CytoscapeWeb",
                    flashInstallerPath: "swf/playerProductInstall"
                };

                var vis = new org.cytoscapeweb.Visualization(div_id, options);
                // callback when Cytoscape Web has finished drawing
                vis.ready(function() {
                    // add a listener for when nodes and edges are clicked
                    vis.addListener("click", "nodes", function(event) {
                        handle_click(event);
                    });
                    function handle_click(event) {
                        var target = event.target;

                        // console.log(target.data['id']);
                        location.replace("node_click_process.php?NodeId=" + target.data['id']);
                    }
                    function clear() {
                        document.getElementById("note").innerHTML = "";
                    }
                    function print(msg) {
                        document.getElementById("note").innerHTML += "<p>" + msg + "</p>";
                    }
                });
                var draw_options = {
                    // your data goes here
                    network: xml,
                    // show edge labels too
                    edgeLabelsVisible: true,
                    // let's try another layout
                    layout: {name: "Preset", options: {points: [{id: "1", x: -506, y: 31},
                                {id: "2", x: -383, y: -4},
                                {id: "3", x: -370, y: 74},
                                {id: "4", x: -368, y: 131},
                                {id: "5", x: 47, y: -256},
                                {id: "6", x: -135, y: -84},
                                {id: "7", x: -272, y: -5},
                                {id: "8", x: 7, y: 74},
                                {id: "9", x: -58, y: 140},
                                {id: "10", x: -246, y: -145},
                                {id: "11", x: -132, y: -25},
                                {id: "12", x: -146, y: 28},
                                {id: "13", x: 85, y: -225},
                                {id: "14", x: 211, y: -187},
                                {id: "15", x: -32, y: -148},
                                {id: "16", x: 48, y: 174},
                                {id: "17", x: 354, y: 95},
                                {id: "18", x: 141, y: -121},
                                {id: "19", x: 223, y: 11},
                                {id: "20", x: 488, y: 115},
                                {id: "21", x: 375, y: 225},
                                {id: "22", x: 45, y: 255},
                                {id: "23", x: 317, y: -218},
                                {id: "24", x: 485, y: -152}
                            ]}},
                    // set the style at initialisation
                    visualStyle: visual_style,
                    // hide pan zoom
                    panZoomControlVisible: true,
                    panZoomControlPosition: "bottomLeft"
                };
                vis.draw(draw_options);
            };
        </script>
        <style>
            * { margin: 0; padding: 0; font-family: Helvetica, Arial, Verdana, sans-serif; }
            html, body { height: 100%; width: 100%; padding: 0; margin: 0; background-color: #000000; }
            body { line-height: 1.5; color: #000000; font-size: 14px; }
            /* The Cytoscape Web container must have its dimensions set. */
            #cytoscapeweb { width: 100%; height: 100%; }
            #note { width: 100%; text-align: center; padding-top: 1em; }
            .link { text-decoration: underline; color: #0b94b1; cursor: pointer; }
            div[class*='col']
            {
                //border:solid 1px #FF0000;
                display:table-cell;
                float:none;
                padding: 5px;
            }
            #mod_ques{
                white-space: pre;
            }
            #endet{
                white-space: pre;
            }
            .doors{
                position:absolute;
                top:7px;
            }
            .cyto{
                height:400px;
            }
            .row{
                display:table;
                width:100%;
                padding: 5px;
            }
            .modal{
                height: 600px;
            }
            .image:hover img {
                -webkit-transform:scale(1.25); /* Safari and Chrome */
                -moz-transform:scale(1.25); /* Firefox */
                -ms-transform:scale(1.25); /* IE 9 */
                -o-transform:scale(1.25); /* Opera */
                transform:scale(1.25);
            }
            .col-md-2{
                float:left;
                position: absolute;
            }
            #id{
                position:absolute;
                top:5px;
            }
            @font-face {
                font-family:"Creepsville";
                src: url("fonts/Creepsville.ttf") /* TTF file for CSS3 browsers */
            }
            .text-info{
                font-family:'Creepsville', sans-serif;
                font-size: 40px;
            }
        </style>
    </head>
    <body >
        <?php
        $query = "SELECT Score,Weight FROM team";
        $result = mysql_query($query, $link);
        $row1 = mysql_fetch_row($result);
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-info" align="center">Choose the door you want to enter. But,<br/> "BEWARE Monsters are waiting!"</div>
                </div>
                <div class="col-md-6" align="right">
                    <div class="col-md-3">
                        <div class="text-danger" align="center"><font size="4px">CURRENT NODE:<br/><font color="pink"><?php echo $_GET['NodeId']; ?> </font></font></div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-danger" align="center"><font size="4px"> WEIGHT:<br/><font color="pink"><?php echo $row1[1]; ?> </font></font></div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-danger" align="center"><font size="4px"> SCORE:<br/><font color="pink"><?php echo $row1[0]; ?> </font></font></div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-danger" align="center"><font size="4px"> TIME LEFT:<br/>
                            <font color="pink"><div id="divCounter"></div></font></font></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">

                    <div id="ques">
                        <div class="doors">
                            <?php
                            $query1 = "SELECT * FROM edge WHERE( Node1='$_GET[NodeId]' OR Node2='$_GET[NodeId]') AND (Successful=0) AND (Attempts=0)";
                            $result1 = mysql_query($query1, $link);
                            $query2 = "SELECT Visited FROM node WHERE NodeId='$_GET[NodeId]'";
                            $result2 = mysql_query($query2, $link);
                            $row = mysql_fetch_array($result2);
                            $Visited = $row['Visited'];
                            if ($Visited == 0) {
                                echo "<script>location.replace('node_click_process.php?NodeId=1')</script>";
                            }
                            echo "<script>var NodeId=" . $_GET['NodeId'] . ";</script>";
                            $i = 0;
                            while ($row = mysql_fetch_array($result1)) {
                                $data[$i]['EdgeId'] = $row['EdgeId'];
                                $data[$i]['Weight'] = $row['Weight'];
                                $data[$i]['Category'] = $row['Category'];
                                $data[$i]['Question'] = $row['Question'];
                                $data[$i]['Answer'] = $row['Answer'];
                                $data[$i]['Hint1'] = $row['Hint1'];
                                $data[$i]['Hint2'] = $row['Hint2'];
                                $data[$i]['EncryptionDetails'] = $row['EncryptionDetails'];
                                $data[$i]['Successful'] = $row['Successful'];
                                $data[$i]['Attempts'] = $row['Attempts'];
                                $data[$i]['Node1'] = $row['Node1'];
                                $data[$i]['Node2'] = $row['Node2'];
                                $i++;
                            }
                            ?>
                            <font color="red">
                            <div class="row">
                                <?php
                                $n = 1;
                                if (mysql_num_rows($result1) != 0) {
                                    foreach ($data as $k => $v) {
                                        if ($n == 4) {
                                            echo "</div>";
                                            echo "<div class='row'>";
                                        }
                                        echo "<div class='col-md-4' align='center'>";
                                        ?>

                                        <div class="image" style="padding:20px">
                                            <img id="<?php echo $v['EdgeId']; ?>" data-backdrop="static" data-keyboard="false" data-question="<?php echo $v['Question']; ?>" data-answer="<?php echo $v['Answer']; ?>" data-hint1="<?php echo $v['Hint1']; ?>" data-endet="<?php echo $v['EncryptionDetails']; ?>" data-toggle="modal" data-target=".bs-example-modal-lg" src ="images/door.jpg" data-hint2="<?php echo $v['Hint2']; ?>" onclick="ques_disp(event)" /> 
                                            <br/> </div> <br/>
                                        <?php
                                        echo $v['Category'] . " , " . $v['Weight'];
                                        echo "</div>";
                                        $n++;
                                    }
                                } else {
                                    echo "<div class='col-md-4 col-md-offset-4' align='center'><font color='red' size='4px'> <br/><br/>No Unvisited edges left for this Node. Select a different Node.</font></div>";
                                }
                                ?>
                            </div>
                            </font>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cyto">
                        <div id="cytoscapeweb" >
                            Oops! Your map is MISSING. :( <br/> Contact your Invigilator.
                        </div></div>
                    <br/>  <div class="text-info" align="center">Click on the node (either source node or green nodes) from which you want to travel further.</div>
                </div>

            </div>
            <div class="row" >
                <div class="col-md-6">

                </div>
                <div class="col-md-6" style="background:pink">
                    <div class="col-md-6">
                        <b>Categories:</b><br/>
                        <strong>NL:</strong>Networking and Linux<br/>
                        <strong>WD:</strong>Web Development and Database<br/>
                        <strong>DS:</strong>Data Structures and Algorithms<br/>
                        <strong>CA:</strong>Computer Architecture(Digital Logic and Operating Systems)<br/>
                        <strong>M:</strong> Miscellaneous
                    </div>
                    <div class="col-md-6">
                        <b>Color Interpretation:</b><br/>
                        <font color="#34DDDD">---------</font> Unvisited Edges<br/>
                        <font color="#FF0000">---------</font> Unsuccessful Edge/Node<br/>
                        <font color="#00FF00">---------</font> Successful Edge/Node<br/>
                    </div>
                </div>
            </div>

        </div>
        <!-- Modal -->
        
            <div style="position:fixed;
             overflow-x:auto;overflow-y:scroll;bottom:0;left:0;right:0;top:0;
             z-index:9999;" class="modal fade bs-example-modal-lg" style="position:fixed; overflow-x:auto; overflow-y: scroll;top:0;bottom:0;left:0;right:0;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Question</h4>
                        </div>
                        <div class="modal-body" align="left">
                            <p id="mod_ques"> </p>
                            <i><p id="ans_form"></p></i>
                            <font color="red"> <p id="secondAttempt"></p></font>
                            <input type="text" id="mod_ans" name="Answer" placeholder="Answer"/><br/>

                            <div class="col-md-6">
                                <button type="button" class="btn-info" onclick="fn_hint1()" data-toggle="tooltip" data-placement="left" title="-20 points">Hint 1</button><br/>
                                <br/><p id="hint1"> </p>
                                <p id="endet"> </p>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn-info" onclick="fn_hint2()" data-container="body" data-toggle="tooltip" data-placement="right" title="-40 points">Hint 2</button><br/>
                                <br/><p id="hint2"> </p>
                            </div>               
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="mod_submit" class="btn btn-primary" onclick="fn_redirect()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
       
        <script type='text/javascript'>
            $(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });
            var EdgeId, endet, hint1, hint2, Attempt = 0, success = 2, answer, f1 = 0, f2 = 0;
            //--------Modal Class------------
            $('#myModal').on('show.bs.modal', function(event) {
                // $("body").css("overflow","hidden");
<?php $_SESSION['loggedin'] = false; ?>
                var img = $(event.relatedTarget); // Button that triggered the modal
                var question = img.data('question');
                answer = img.data('answer');
                hint1 = img.data('hint1');
                hint2 = img.data('hint2');
                endet = img.data('endet');
                // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this);
                modal.find('#mod_ques').text(question);
                if (EdgeId != 18 && EdgeId != 31 && EdgeId != 37)
                    modal.find('#ans_form').text('(Submit your answer as A/B/C/D only.)');
            });
            function fn_hint1() {
                document.getElementById("hint1").innerHTML = hint1;
                document.getElementById("endet").innerHTML = "<b>Encryption Details:</b><br/>" + endet;
                f1 = 1;
            }
            function fn_hint2() {
                document.getElementById("hint2").innerHTML = hint2;
                f2 = 1;
            }
            function fn_redirect() {
                //confirm("Confirm Your Answer.")
                Attempt++;
                if (EdgeId != 31 || EdgeId != 37) {
                    if (document.getElementById("mod_ans").value.toUpperCase() == answer.toUpperCase())
                        success = 1;
                } else {
                    if (document.getElementById("mod_ans").value == answer)
                        success = 1;
                }
                if (Attempt == 1 && success == 2) {
                    document.getElementById("mod_ans").value = "";
                    document.getElementById("secondAttempt").innerHTML = "The answer you submitted was wrong.This is your last attempt."
                }
                if (success == 1 || Attempt == 2) {
                    var time = localStorage.getItem("counter");
                    window.location = "game1_process.php?time=" + time + "&success=" + success + "&EdgeId=" + EdgeId + "&NodeId=" + NodeId + "&f1=" + f1 + "&f2=" + f2 + "&Attempt=" + Attempt;
                }
            }
            function ques_disp(event) {
                EdgeId = event.target.id;
            }
            function disable_f5(e) //f5 & (Ctrl+r) disabled
            {
                if (((e.which || e.keyCode) == 116))
                {
                    e.preventDefault();
                }
            }
            $(document).ready(function() {
                $(document).bind("keydown", disable_f5);

            });


            //----------------right click disable---------------------
            window.history.forward(1);
            document.onmousedown = disableclick;
            status = "Right Click is not allowed";
            function disableclick(e)
            {
                if (event.button == 2)
                {
                    alert(status);
                    return false;
                }
            }
            //-----------pop up message-----------------------

<?php
echo "var Node=" . $_GET['NodeId'] . ";";
echo "var successmsg=" . $_GET['success'] . ";";
?>
            if (successmsg == 1)
                var msg = "Congo! Your answer was RIGHT :)";
            else
                var msg = "Oops, your answer was WRONG! :(";



            if (successmsg != -1) {
                if (Node != 1)
                    alert(msg + " \nYou are at Node " + Node);
                else
                    alert(msg + "\nYou are at Source Node (S)" + "\n");
            }
            else {
                if (Node != 1)
                    alert("You are at Node " + Node + "\n");
                else
                    alert("You are at Source Node (S)" + "\n");
            }

        </script>
    </body>
</html>


