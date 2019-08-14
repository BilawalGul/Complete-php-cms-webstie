<div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
<!-- there getting the browser information  -->
<?php
// chrome
$query="SELECT * FROM browser WHERE browser='google chrome'";
$query_run=mysqli_query($connection ,$query);
$chrome=mysqli_num_rows($query_run);
// opera
$query="SELECT * FROM browser WHERE browser='opera'";
$query_run=mysqli_query($connection ,$query);
$opera=mysqli_num_rows($query_run);
// safari
$query="SELECT * FROM browser WHERE browser='apple safari'";
$query_run=mysqli_query($connection ,$query);
$safari=mysqli_num_rows($query_run);
// internet Ex
$query="SELECT * FROM browser WHERE browser='internet explorer'";
$query_run=mysqli_query($connection ,$query);
$internet=mysqli_num_rows($query_run);
// mozila
$query="SELECT * FROM browser WHERE browser='mozilla firefox'";
$query_run=mysqli_query($connection ,$query);
$mozila=mysqli_num_rows($query_run);
// default
$query="SELECT * FROM browser WHERE browser='default browser'";
$query_run=mysqli_query($connection ,$query);
$default=mysqli_num_rows($query_run);
?>
                    <div id="regions_div" style="width: 100%; height:auto;"></div>
                </div>
<!-- this is for the brwser checker  -->
                <div style="margin:50px; text-align: center; ">
                    <h2>Browser Checker</h2>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Browser', 'Use All History'],
            <?php
    $text=['Mozilla Firefox', 'Internet Explorer', 'Apple Safari',  'Google Chrome', 'Opera' ,'default browser'];
    $count=[$mozila , $internet , $safari , $chrome , $opera , $default];
                for($i=0; $i<6; $i++){
                    echo "['{$text[$i]}'".","."{$count[$i]}],";
                }
            ?>
        ]);

        var options = {
          title: 'Browser checker full History',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
                    <div id="donutchart" style="width: 900px; height: 500px;"></div>
                </div>
            </div>
        </div>  