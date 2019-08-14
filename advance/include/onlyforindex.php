        <div class="container-fluid">
            <div class="block-header">
                <h2 style="color:black;font-weight: bold; background:lightgreen;width:165px;padding: 20px;font-size: 22px;">DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            ALL
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">All POST</div>
                            <?php
                            $query="SELECT * FROM post";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>

                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">All User</div>
                            <?php
                            $query="SELECT * FROM profile";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">All COMMENTS</div>
                            <?php
                            $query="SELECT * FROM comment";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">All VISITORS</div>
                            <?php
                            $query="SELECT * FROM visitor";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second line widgets -->
           <b> NOT ONLINE</b>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">POSTS NOT PUBLISH </div>
                            <?php
                            $query="SELECT * FROM post where status='draft'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>

                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">Admin User</div>
                            <?php
                            $query="SELECT * FROM profile where user_role='admin'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">UNapprove COMMENTS</div>
                            <?php
                            $query="SELECT * FROM comment where status='unapprove'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Uniqe VISITORS</div>
                            <?php
                            $query="SELECT * FROM uniq_visitor";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second line widgets -->

             ONLINE
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">PUBLISH POSTS  </div>
                            <?php
                            $query="SELECT * FROM post where status='publish'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>

                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">Author User</div>
                            <?php
                            $query="SELECT * FROM profile where user_role='author'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Approve COMMENTS</div>
                            <?php
                            $query="SELECT * FROM comment where status='approve'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Subscribers</div>
                            <?php
                            $query="SELECT * FROM subscribe";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center"><h1>Country Visitors</h1></div>
                <!-- 4rth section unique_vister counter -->
            <b>UNiQ_Visitor_Counter_Country</b> 
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Pakistan uniq_Visitor Counter</div>
                            <?php
                            $query="SELECT * FROM uniq_visitor WHERE country='pakistan'";
                            $query_run=mysqli_query($connection ,$query);
                            $pakistan=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $pakistan; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">United State uniq_Visitor Counter</div>
                            <?php
                            $query="SELECT * FROM uniq_visitor WHERE country='united state'";
                            $query_run=mysqli_query($connection ,$query);
                            $united_state=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $united_state; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Indian uniq_Visitor Counter</div>
                            <?php
                            $query="SELECT * FROM uniq_visitor WHERE country='india'";
                            $query_run=mysqli_query($connection ,$query);
                            $india=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $india; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">China uniq_Visitor Counter</div>
                            <?php
                            $query="SELECT * FROM uniq_visitor WHERE country='china'";
                            $query_run=mysqli_query($connection ,$query);
                            $china=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $china; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- 5th section NoN_unique_vister counter -->
            NoN_Uniq_Visitor_Counter_Country 
            <div class="row clearfix">  
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Pakistan Non_Visitor Counter</div>
                            <?php
                            $query="SELECT * FROM visitor WHERE country='pakistan'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">United State Non_Visitor Counter</div>
                            <?php
                            $query="SELECT * FROM visitor WHERE country='united state'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Indian Non_Visitor Counter</div>
                            <?php
                            $query="SELECT * FROM visitor WHERE country='india'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">China Non_Visitor Counter</div>
                            <?php
                            $query="SELECT * FROM visitor WHERE country='china'";
                            $query_run=mysqli_query($connection ,$query);
                            $row=mysqli_num_rows($query_run);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $row; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
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
            <!-- #END# CPU Usage -->
            <div class="row clearfix" style="text-align: center;">
                <!-- Visitors -->
                <h2>Daily Visitor and User Counter</h2>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <h2>Daliy Users Counter</h2>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right">
                                        <b>
                    <?php
                    $query="SELECT * FROM profile WHERE date_time= DATE_SUB(CURRENT_DATE(), INTERVAL 0 DAY)";
                    $query_run=mysqli_query($connection ,$query);
                    $row=mysqli_num_rows($query_run);
                    echo $row;
                    ?>
                                        </b> 
                                    <small>USERS</small>
                                    </span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right">
                                        <b>
                    <?php
                    $query="SELECT * FROM profile WHERE date_time= DATE_SUB(CURRENT_DATE(), INTERVAL 1 DAY)";
                    $query_run=mysqli_query($connection ,$query);
                    $row=mysqli_num_rows($query_run);
                    echo $row;
                    ?>
                                        </b> 
                                    <small>USERS</small>
                                    </span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right">
                                        <b>
                    <?php
                    $query="SELECT * FROM profile WHERE date_time>=DATE_SUB(CURDATE(), INTERVAL 6 WEEK)";
                    $query_run=mysqli_query($connection ,$query);
                    $row=mysqli_num_rows($query_run);
                    echo $row;
                    ?>
                                        </b> 
                                    <small>USERS</small>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Visitor Uniqe Counter Today Yesterday Last Week -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-black">
                            <h2>Unique Visitor Counter</h2>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right">
                                        <b>
                    <?php
                    $query="SELECT * FROM uniq_visitor WHERE date_time= DATE_SUB(CURRENT_DATE(), INTERVAL 0 DAY)";
                    $query_run=mysqli_query($connection ,$query);
                    $row=mysqli_num_rows($query_run);
                    echo $row;
                    ?>
                                        </b> 
                                    <small>Visitor</small>
                                    </span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right">
                                        <b>
                    <?php
                    $query="SELECT * FROM uniq_visitor WHERE date_time= DATE_SUB(CURRENT_DATE(), INTERVAL 1 DAY)";
                    $query_run=mysqli_query($connection ,$query);
                    $row=mysqli_num_rows($query_run);
                    echo $row;
                    ?>
                                        </b> 
                                    <small>Visitor</small>
                                    </span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right">
                                        <b>
                    <?php
                    $query="SELECT * FROM uniq_visitor WHERE date_time>=DATE_SUB(CURDATE(), INTERVAL 6 WEEK)";
                    $query_run=mysqli_query($connection ,$query);
                    $row=mysqli_num_rows($query_run);
                    echo $row;
                    ?>
                                        </b> 
                                    <small>Visitor</small>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# vister counter form today yesterday last Week-->
                <!-- NoN Unique Visitor Counter -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <h2>NoN Unique Visitor Counter</h2>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right">
                                        <b>
                    <?php
                    $query="SELECT * FROM visitor WHERE date_time= DATE_SUB(CURRENT_DATE(), INTERVAL 0 DAY)";
                    $query_run=mysqli_query($connection ,$query);
                    $row=mysqli_num_rows($query_run);
                    echo $row;
                    ?>
                                        </b> 
                                    <small>Visitor</small>
                                    </span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right">
                                        <b>
                    <?php
                    $query="SELECT * FROM visitor WHERE date_time= DATE_SUB(CURRENT_DATE(), INTERVAL 1 DAY)";
                    $query_run=mysqli_query($connection ,$query);
                    $row=mysqli_num_rows($query_run);
                    echo $row;
                    ?>
                                        </b> 
                                    <small>Visitor</small>
                                    </span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right">
                                        <b>
                    <?php
                    $query="SELECT * FROM visitor WHERE date_time>=DATE_SUB(CURDATE(), INTERVAL 6 WEEK)";
                    $query_run=mysqli_query($connection ,$query);
                    $row=mysqli_num_rows($query_run);
                    echo $row;
                    ?>
                                        </b> 
                                    <small>Visitor</small>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# NoN Unique Visitor Counter -->
            </div>

            <div class="row clearfix">

<!-- this is for the visitor counter -->
<?php
$query="SELECT * FROM visitor WHERE country='russia'";
$query_run=mysqli_query($connection ,$query);
$russia=mysqli_num_rows($query_run);
// Germany
$query="SELECT * FROM visitor WHERE country='germany'";
$query_run=mysqli_query($connection ,$query);
$germany=mysqli_num_rows($query_run);
// afghanistan
$query="SELECT * FROM visitor WHERE country='afghanistan'";
$query_run=mysqli_query($connection ,$query);
$afghanistan=mysqli_num_rows($query_run);
// uae
$query="SELECT * FROM visitor WHERE country='russia'";
$query_run=mysqli_query($connection ,$query);
$russia=mysqli_num_rows($query_run);
// Belgium
$query="SELECT * FROM visitor WHERE country='belgium'";
$query_run=mysqli_query($connection ,$query);
$belgium=mysqli_num_rows($query_run);
// UAE
$query="SELECT * FROM visitor WHERE country='united arab amirates'";
$query_run=mysqli_query($connection ,$query);
$uae=mysqli_num_rows($query_run);
// Austrila
$query="SELECT * FROM visitor WHERE country='australia'";
$query_run=mysqli_query($connection ,$query);
$australia=mysqli_num_rows($query_run);
// canada
$query="SELECT * FROM visitor WHERE country='canada'";
$query_run=mysqli_query($connection ,$query);
$canada=mysqli_num_rows($query_run);
// Bangladesh
$query="SELECT * FROM visitor WHERE country='bangladesh'";
$query_run=mysqli_query($connection ,$query);
$bangladesh=mysqli_num_rows($query_run);
// south africa
$query="SELECT * FROM visitor WHERE country='south africa'";
$query_run=mysqli_query($connection ,$query);
$south_africa=mysqli_num_rows($query_run);
// japan
$query="SELECT * FROM visitor WHERE country='japan'";
$query_run=mysqli_query($connection ,$query);
$japan=mysqli_num_rows($query_run);
// France
$query="SELECT * FROM visitor WHERE country='france'";
$query_run=mysqli_query($connection ,$query);
$france=mysqli_num_rows($query_run);
// belgium
$query="SELECT * FROM visitor WHERE country='belgium'";
$query_run=mysqli_query($connection ,$query);
$belgium=mysqli_num_rows($query_run);
// Greece
$query="SELECT * FROM visitor WHERE country='greece'";
$query_run=mysqli_query($connection ,$query);
$greece=mysqli_num_rows($query_run);
// greenland
$query="SELECT * FROM visitor WHERE country='greenland'";
$query_run=mysqli_query($connection ,$query);
$greenland=mysqli_num_rows($query_run);

?>
<!-- ++++++++++++++++++++ for the Geo map show on map +++++++++++++ -->
                <div style="text-align: center;">
                    <h2>GEO MAPS OF VISITOR</h2>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {
'packages':['geochart'],
// Note: you will need to get a mapsApiKey for your project.
// See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
});
google.charts.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap() {
var data = google.visualization.arrayToDataTable([
  ['Country', 'Visitor'],
  <?php
  $text=['Pakistan','United States','India','China' , 'russia' ,'Germany' ,'Afghanistan' , 'United Arab Emirates' , 'Australia' , 'canada' , 'Bangladesh' ,'south africa' , 'japan' , 'Brazil' ,'France' ,'Belgium' ,'Greece' , 'Greenland'];
  $count=[$pakistan, $united_state, $india, $china , $russia ,$germany ,$afghanistan , $uae ,$australia ,$canada , $bangladesh , $south_africa , $japan , $belgium ,$france ,$belgium ,$greece , $greenland];
  for ($i=0; $i<18; $i++) {
      echo "['{$text[$i]}'".","."{$count[$i]}],";
  }
  ?>

]);

var options = {
    chart:{
        title:'visitor counter map',
        subtitle:'Count the uniqe_visiter of all time'
    }
};

var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

chart.draw(data, options);
}
</script>
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