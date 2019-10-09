                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="assets/images/user.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="profile.php"><?php echo $user_names; ?></a>
                                    <p class="text-muted m-0"><?php echo $user_role;?></p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="dashboard.php"><i class="ti-home"></i> Dashboard </a></li>
                                <li><a href="register-entrant.php"><i class="ti ti-plus"></i> Register entrant </a></li>
                                <li><a href="entrants.php"><i class="ti ti-layers"></i> Entrants </a></li>
                                <?php
                                if($user_role == "Administrator") {
                                ?>
                                <li><a href="users.php"><i class="ti-user"></i> Users </a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->
