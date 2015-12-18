<?php session_start();
include_once 'db_connect.php';
$uquery = "UPDATE url SET url='game_start.php'";
        @mysql_query($uquery,$link);
?>
<html>
    
    <head>
        <title>Puzzling Chamber | Map</title>
        <link rel="icon" type="image/jpg" href="images/logo.png">
        <script type="text/javascript" src="js/min/json2.min.js"></script>
        <script type="text/javascript" src="js/min/AC_OETags.min.js"></script>
        <script type="text/javascript" src="js/min/cytoscapeweb.min.js"></script>
        
        <script type="text/javascript">
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
                        return Math.round( Math.random() * 255 );
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
                        backgroundColor: "#ABCFD6"
                    },
                    nodes: {
                        shape: "Point",
                        borderWidth: 2,
                        borderColor: "#ffffff",
                        size: {
                          
                           
                        },
                        color: {
                            discreteMapper: {
                                attrName: "id",
                                entries: [
                                    { attrValue: 1, value: "#EE2C2C" },
                                    { attrValue: 24, value: "#EE2C2C" }
                                ]
                            }
                        },
                        labelHorizontalAnchor: "center",
                        labelFontColor: {
                            discreteMapper: {
                                attrName: "id",
                                entries: [
                                    { attrValue: 1, value: "#000000" },
                                    { attrValue: 24, value: "#000000" }
                                ]
                            }
                        },
                        labelFontSize: {
                            discreteMapper: {
                                attrName: "id",
                                entries: [
                                    { attrValue: 1, value: 15 },
                                    { attrValue: 24, value: 15 }
                                ]
                            }
                        },
                        labelFontWeight: {
                            discreteMapper: {
                                attrName: "id",
                                entries: [
                                    { attrValue: 1, value: "bold" },
                                    { attrValue: 24, value: "bold" }
                                ]
                            }
                        }
                    },
                    edges: {
                        width: 3,
                        color: "#0B94B1",
                        labelFontSize: 12
                    }
                };
                
                // initialization options
                var options = {
                    swfPath: "swf/CytoscapeWeb",
                    flashInstallerPath: "swf/playerProductInstall"
                };
                
                var vis = new org.cytoscapeweb.Visualization(div_id, options);
                
                vis.ready(function() {
                    // set the style programmatically
                    document.getElementById("color").onclick = function(){
                        visual_style.edges.color = rand_color();
                        vis.visualStyle(visual_style);
                    };
                });

                var draw_options = {
                    // your data goes here
                    network: xml,
                    
                    // show edge labels too
                    edgeLabelsVisible: true,
                    
                    // let's try another layout
                    layout:{name:"Preset",options:{points:[{ id: "1", x:  -506, y:  31 },
                                        { id: "2", x:  -383, y:  -4 },
                                    { id: "3", x:  -370, y:  74 },
                                    { id: "4", x:  -368, y:  131 },
                                    { id: "5", x:  47, y: -256 },
                                    { id: "6", x:  -135, y: -84 },
                                    { id: "7", x:  -272, y: -5 },
                                    { id: "8", x:  7, y:  74 },
                                    { id: "9", x:  -58, y:  140 },
                                    { id: "10", x:  -246, y:  -145 },
                                    { id: "11", x:  -132, y:  -25 },
                                    { id: "12", x:  -146, y:  28 },
                                    { id: "13", x:  85, y:  -225 },
                                    { id: "14", x:  211, y:  -187 },
                                    { id: "15", x:  -32, y:  -148 },
                                    { id: "16", x:  48, y:  174 },
                                    { id: "17", x: 354 , y: 95 },
                                    { id: "18", x:  141, y:  -121 },
                                    { id: "19", x:  223, y:  11 },
                                    { id: "20", x:  488, y:  115 },
                                    { id: "21", x:  375, y:  225 },
                                    { id: "22", x:  45, y:  255 },
                                    { id: "23", x:  317, y:  -218 },
                                    { id: "24", x:  485, y:  -152 }
                    ]}},
                    
                    // set the style at initialisation
                    visualStyle: visual_style,
                    
                    // hide pan zoom
                    panZoomControlVisible: true,
                    panZoomControlPosition: "topLeft"
                };
                
                vis.draw(draw_options);
            };
        </script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <style>
            * { margin: 0; padding: 0; font-family: Helvetica, Arial, Verdana, sans-serif; }
            html, body { height: 100%; width: 100%; padding: 0; margin: 0; background-color: #f0f0f0; }
            body { line-height: 1.5; color: #000000; font-size: 14px; }
            /* The Cytoscape Web container must have its dimensions set. */
            #cytoscapeweb { width: 100%; height: 100%; }
            #note { width: 100%; text-align: center; padding-top: 1em; }
            .link { text-decoration: underline; color: #0b94b1; cursor: pointer; }
            
            div[class*='col']
            {
               // border:solid 1px #000000;
                display:table-cell;
                float:none;
            }
            .cyto{
                height:600px;
                
            }
            .row{
                display:table;
                width:100%
            }
            .col-md-2{
                float:left;
                position: absolute;
               top:0;
                
            }
        </style>
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="text-info"><br/>
                     Given below is the MAP of the Puzzling Chamber. You, being the Saviour, are standing at the Source Node(S)
                        and Ginny is lying unconscious at the Destination Node(D). Move on and save Ginny, but remember 
                        <br/><b>"Life begins at the end of your comfort zone"</b><br/><cite>-Neale Donald Walsch</cite><br/><br/>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-10">
                <div class="cyto">
                <div id="cytoscapeweb" >
            Oops! Your map is MISSING. :( <br/> Contact your Invigilator.
                </div></div>
            </div>
        <div class="col-md-2">
         <br/><br/>
         <button type="button" class="btn btn-primary" onclick=location.replace('rules2.php')>
             Continue</button> <br/><br/><br/><br/>
            <font color="red">S</font>:Source<br/><font color="red">D</font>:Destination<br/>
            <br/><br/><b>Categories:</b><br/>
                    <strong>NL:</strong>Networking and Linux<br/>
                    <strong>WD:</strong>Web Development and Database<br/>
                    <strong>DS:</strong>Data Structures and Algorithms<br/>
                    <strong>CA:</strong>Computer Architecture(Digital Logic and Operating Systems)<br/>
                    <strong>M:</strong> Miscellaneous
                    
        </div>
        </div>
            
        </div>
    </body>
    
</html>