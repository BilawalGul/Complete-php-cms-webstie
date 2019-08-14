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

 
    <h3 class="text-center" style="margin-top: 80px;">
        <a href="index">Back to Home</a> 
    </h3>
    
    <section id="content" style="margin-top: 20px;">
        <?php
        if(isset($_GET['source'])){
            $source=$_GET['source'];
        }else{
            $source="";
        }
        switch ($source) {
            case 'add_user':
                include 'include/adduser.php';
                break;
            case 'edit_user':
                include 'include/edituser.php';
                break;
            
            default:
                echo 
                '
                    <a href="user?source=add_user">
                        <button class="btn btn-success" style="border:1px solid white; margin-bottom: 10px;">
                            Add User
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
                                Exportable table - ItsMain (<b>User Page</b>)
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>First Name</th>
                                            <th>Description</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Confirm</th>
                                            <th>Status</th>
                                            <th>image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
            <?php
                $query="SELECT * FROM profile";
                $query_run=mysqli_query($connection , $query);
                while($run=mysqli_fetch_array($query_run)){
                    $id=$run['id'];
                    $first_name=$run['First_Name'];
                    $last_name=$run['Last_Name'];
                    $user_name=$run['user_name'];
                    $email=$run['email'];
                    $password=$run['password'];
                    $confrim=$run['confirm'];
                    $status=$run['user_role'];
                    $image=$run['image'];
                    $description=$run['description'];
            ?> 


                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $first_name; ?></td>
                                            <td><?php echo substr($description ,0 ,20); ?></td> 
                                            <td><?php echo $user_name; ?></td> 
                                            <td><?php echo $email; ?></td> 
                                            <td><?php echo $confrim; ?></td>
                                            <td><?php  if($status=='admin'){
                                                echo '<b style="background:green;padding:2px;color:white;border-radius:2px;">'.$status.'</b>'; }else{
                                                    echo '<b style="background:red;padding:2px;color:white;border-radius:2px;">'.$status.'</b>';
                                                }
                                             ?></td>
                                            <td><img src="../images/<?php echo $image;?>" width="70px;"></td>
                                            >
                                             
                                            <td><a href="user?source=edit_user&edit=<?php echo $id;?>">Edit</a></td>
                                            <td><a onClick="javascript: return confirm('Are you sure you want to delete');" href="user?delete=<?php echo $id;?>">Delete</a></td>    
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <?php
                                  if(isset($_GET['delete'])){
                                  $delete=$_GET['delete'];
                                  $query="DELETE FROM profile WHERE id='$delete'";
                                  $delete_query=mysqli_query($connection,$query);
                                  header("Location:user");
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
