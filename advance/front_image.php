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
        <?php include 'include/leftslider.php';?>


        <!-- #END# Left Sidebar -->

    </section>



    <section id="content" style="margin-top: 100px;margin-left:320px;">
        <?php
        if(isset($_GET['source'])){
            $source=$_GET['source'];
        }else{
            $source="";
        }
        switch ($source) {
            case 'add_front':
                include 'include/add_front_image.php';
                break;
            
            default:
                echo 
                '
                    <a href="front_image.php?source=add_front">
                        <button class="btn btn-danger">
                            Add New Image
                        </button>
                    </a>
                ';
                break;
        }
       ?>
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Exportable table - ItsMain (<b>Subscribe Page</b>)
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Image</th>
                                            <th>Alt_tag</th>
                                            <th>date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php
                $query="SELECT * FROM front_page ORDER by id DESC";
                $query_run=mysqli_query($connection , $query);
                while($run=mysqli_fetch_array($query_run)){
                    $id=$run['id'];
                    $picture=$run['picture'];
                    $Alt_tag=$run['alt_tag'];
                    $date_time=$run['date_time'];
            ?> 

                                        <tr>
                                            <td><?php echo $id;?></td>
                                            <td>
                                                <?php echo  '<b style="position:absolute;">'.$picture.'</b>';
                                                ?>
                                                <img src="../images/<?php echo $picture;?>" width="100%">
                                            </td>
                                            <td><?php echo $Alt_tag;?></td>
                                            <td><?php echo $date_time;?></td> 
                                            <td><a href="front_image.php?delete=<?php echo $id;?>">Delete</a></td> 
                                        </tr>

                                    <?php } ?>


                                    </tbody>
                                </table>
                                <?php
                                  if(isset($_GET['delete'])){
                                  $delete=$_GET['delete'];
                                  $query="DELETE FROM front_page WHERE id='$delete'";
                                  $delete_query=mysqli_query($connection,$query);
                                  header("Location:front_image");
                                  if(!$delete_query){
                                    die("QUERY FAILED". mysqli_error($connection));
                                  }
                                  }
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
