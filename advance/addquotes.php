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

    <section class="content">

        
   
       <?php
        if(isset($_GET['source'])){
            $source=$_GET['source'];
        }else{
            $source="";
        }
        switch ($source) {
            case 'add_quotes':
                include 'include/add_quotes.php';
                break;
            case 'edit_quotes':
                include 'include/edit_quote.php';
                break;
            
            default:
                echo 
                '
                    <a href="addquotes.php?source=add_quotes">
                        <button class="btn btn-primary" style="border:1px solid white; margin-bottom: 10px;">
                            Add QUotes
                        </button>
                    </a>
                ';
                break;
        }
       ?>

    </section>

        <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>All Time Quotes</h2>
            </div>

            <!-- #END# Basic Example -->
            <!-- Colored Card - With Loading -->
            
            <div class="row">

                <?php 
                $query="SELECT * FROM quotes order by id DESC ";
                $query_run=mysqli_query($connection , $query);
                while($rows=mysqli_fetch_array($query_run)){
                  $author=$rows['author'];
                  $txt=$rows['text'];
                  $color=$rows['color'];
                  $date=$rows['date_time'];
                ?>
                
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header <?php echo $color;?>">
                            <h2>
                                <?php echo ucwords($author)?> <small><?php echo $date; ?></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="addquotes.php?source=edit_quotes&id=<?php echo $rows['id'];?>">Edit</a></li>
                                        <li><a onClick="javascript: return confirm('Are you sure you want to delete');" href="addquotes.php?delete=<?php echo $rows['id'];?>">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <?php echo $txt; ?>
                        </div>
                    </div>
                </div>


                <?php 
                    }
                ?>

                        <?php
                         if(isset($_GET['delete'])){
                              $delete=$_GET['delete'];
                              $query="DELETE FROM quotes WHERE id='$delete'";
                              $delete_query=mysqli_query($connection,$query);
                              header("Location:addquotes.php");
                              if(!$delete_query){
                                die("QUERY FAILED". mysqli_error($connection));
                              }

                         }

                        ?>
            </div>
            <!-- #END# Colored Card - With Loading -->
    </section>







    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/ui/modals.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
