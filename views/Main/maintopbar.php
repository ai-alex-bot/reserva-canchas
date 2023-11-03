<!-- Topbar Start -->
<div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="../../public/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium"><?php echo ($user_nom)." ".($user_ape); ?></span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="../Main/logout.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Cerrar Sesion</span>
                            </a>
                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="../Inicio/" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="../../public/images/logo_rubio.png" alt="" height="50">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="../../public/images/logo_rubio_responsive.png" alt="" height="50">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->