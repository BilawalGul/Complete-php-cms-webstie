<!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../images/<?php echo $_SESSION['image']; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></div>
                    <div class="email"><?php echo $_SESSION['email'];?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profile"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../logout.php">
                                <i class="material-icons">input</i>
                                Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="allpost">
                            <i class="material-icons">widgets</i>
                            <span>Allpost</span>
                        </a>
                    </li>
                    <li>
                        <a href="addpost">
                            <i class="material-icons">text_fields</i>
                            <span>addpost</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="addquotes">
                            <i class="material-icons">widgets</i>
                            <span>Add Quotes</span>
                        </a>
                    </li>
                    <li>
                        <a href="subscribe">
                            <i class="material-icons">view_list</i>
                            <span>Subscribe</span>
                        </a>
                    </li>
                    <li>
                        <a href="Comments">
                            <i class="material-icons">comment</i>
                            <span>Comments</span>
                        </a>
                    </li>
                    <li>
                        <a href="front_image">
                            <i class="material-icons">image</i>
                            <span>front_image</span>
                        </a>
                    </li>
                    <li>
                        <a href="menu">
                            <i class="material-icons">menu</i>
                            <span>Catagories</span>
                        </a>
                    </li>
                    <li>
                        <a href="user">
                            <i class="material-icons">account_circle</i>
                            <span>Users</span>
                        </a>
                    </li>
                    
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li> -->
                    <li >
                        <a href="image-gallery.php" >
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/maps/google.html">Google Map</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - Ongoing <a href="javascript:void(0);">Admin - ItsMain</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>