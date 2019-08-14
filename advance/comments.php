<?php include 'include/toplink.php';?>
<?php
if(!is_admin($_SESSION['username'])){
    header('Location:dashboard');
}
?>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->



    <!-- NAV TAGE  start from here  -->
    <?php include 'include/nav.php'; ?>
    <!-- #Top Bar -->

    

    <section>
         <!-- LEFT SLIDER START FROM HERE -->
        


        <!-- #END# Left Sidebar -->
    </section>


                <h3 class="text-center" style="margin-top: 100px;margin">
                    <a href="index.php">Back to Home</a> 
                </h3>

    <section id="content" style="margin-top: 10px;margin-left:;">

        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Exportable table - ItsMain (<b>Comments Page</b>)
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>post url</th>
                                            <th>email</th>
                                            <th>website</th>
                                            <th>Status</th>
                                            <th>Text</th>
                                            <th>Approve</th>
                                            <th>UnApprove</th>
                                            <th>date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php
                $query="SELECT * FROM comment ORDER by id DESC";
                $query_run=mysqli_query($connection , $query);
                while($run=mysqli_fetch_array($query_run)){
                    $id=$run['id'];
                    $name=$run['name'];
                    $post_url=$run['post_url'];
                    $email=$run['email'];
                    $website=$run['website'];
                    $status=$run['status'];
                    $text=$run['text_cm'];
                    $date_time=$run['date_time'];
            ?> 

                                        <tr>
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $name;?></td>
                                            <td>
                                                <a href="../post.php?/=<?php echo $run['post_url'];?>" target="_blank"><?php echo $post_url;?>
                                                </a>
                                            </td>
                                            <td><?php echo $email;?></td>
                                            <td><?php echo $website;?></td>
                                            <td><?php
                                            if($status=='approve'){
                                                echo '<div style="background:lightgreen;padding:3px;border-radius:3px;">'.$status.'</div>';
                                            }else{
                                                echo '<div style="background:red;padding:3px;border-radius:3px;color:white;">'.$status.'</div>';
                                            }
                                             ?></td>
                                            <td><?php echo $text;?></td>
                                            <td><a href="comments.php?approve=<?php echo $id;?>"> approve</a></td>
                                            <td><a href="comments.php?unapprove=<?php echo $id;?>"> UnApprove</a></td>
                                            <td><?php echo $date_time;?></td>
                                            <td><a onClick="javascript: return confirm('Are you sure you want to delete');" href="comments.php?delete=<?php echo $id;?>">Delete</a></td>
                                            
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <?php
                                  if(isset($_GET['approve'])){
                                  $approve=$_GET['approve'];
                                  $query="UPDATE comment SET status='approve' WHERE id='$approve'";
                                  $delete_query=mysqli_query($connection,$query);
                                  header("Location:comments");
                                  if(!$delete_query){
                                    die("QUERY FAILED". mysqli_error($connection));
                                  }}
                                ?>
                                <?php
                                  if(isset($_GET['unapprove'])){
                                  $unapprove=$_GET['unapprove'];
                                  $query="UPDATE comment SET status='unapprove' WHERE id='$unapprove'";
                                  $delete_query=mysqli_query($connection,$query);
                                  header("Location:comments.php");
                                  if(!$delete_query){
                                    die("QUERY FAILED". mysqli_error($connection));
                                  }}
                                ?>
                                <?php
                                  if(isset($_GET['delete'])){
                                  $delete=$_GET['delete'];
                                  $query="DELETE FROM comment WHERE id='$delete'";
                                  $delete_query=mysqli_query($connection,$query);
                                  header("Location:comments.php");
                                  if(!$delete_query){
                                    die("QUERY FAILED". mysqli_error($connection));
                                  }}
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
