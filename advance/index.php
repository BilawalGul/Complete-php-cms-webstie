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
    


        <!-- NAV TAGE  start from here  -->

            <?php include 'include/nav.php'; ?>







    <!-- #Top Bar -->
    <section>
        



        <!-- LEFT SLIDER START FROM HERE -->
        <?php include 'include/leftslider.php';?>




        <!-- #END# Left Sidebar -->

    </section>

    <section class="content">
        <?php include 'include/onlyforindex.php'; ?>
    </section>

    <?php include 'include/bottomlink.php';?>

<script src="https://js.pusher.com/4.3/pusher.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        var pusher= new Pusher('3955a184b1af6e46996e', {
            cluster:'aps',
            encrypted:true
        });
        var notificationChannel = pusher.subscribe('notifications');
        notificationChannel.bind('new_user', function(notification){
            var message = notification.message;
            toastr.success('{message} Just Register');
        });

    });
</script>


</body>

</html>
