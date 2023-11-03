<?php require_once("../Main/sesion.php");?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once("../Main/mainhead.php"); ?>
        <title>Dashboard | Santa Maria</title>
    </head>
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            
            <?php require_once("../Main/maintopbar.php"); ?>
            
            <?php require_once("../Main/mainsidebar.php"); ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Navegacion</a></li>
                                            <li class="breadcrumb-item active">Reservas</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Reservas</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../../public/images/canchas/cancha1.jpg" alt="Card image cap">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Roque Saenz</h5>
                                        <p class="card-text">Av. Ivanna Hinojosa # 2 Hab. 010.</p>
                                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                            <span class="btn-label"><i class="mdi mdi-check"></i></span>Alquilar
                                        </button>
                                    </div>
                                </div>
                            </div><!-- end col -->
            
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../../public/images/canchas/cancha2.jpg" alt="Card image cap">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">CD Juan Joya Cordero</h5>
                                        <p class="card-text">Cl. Antonella Quesada # 4256.</p>
                                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                            <span class="btn-label"><i class="mdi mdi-check"></i></span>Alquilar
                                        </button>
                                    </div>
                                </div>
                            </div><!-- end col -->
            
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../../public/images/canchas/cancha3.jpg" alt="Card image cap">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">CD Julio Melende</h5>
                                        <p class="card-text">Jr. Sara Sofía Burgos # 65 Piso 96.</p>
                                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                            <span class="btn-label"><i class="mdi mdi-check"></i></span>Alquilar
                                        </button>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../../public/images/canchas/cancha4.jpg" alt="Card image cap">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">CD Hernan Gomez</h5>
                                        <p class="card-text">Av. Damián Uribe # 1.</p>
                                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                            <span class="btn-label"><i class="mdi mdi-check"></i></span>Alquilar
                                        </button>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div>

                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $Year = date("Y"); ?> &copy; Todos los derechos reservados <a href="#">Santa Maria - Reservas de Canchas Deportivas</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-18 m-0 text-white">Theme Customizer</h4>
            </div>
            <div class="slimscroll-menu">
        
                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="dist/assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="dist/assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="dist/assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/XY7j5" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <?php require_once("../Main/mainjs.php"); ?>
        <script src="./inicio.js"></script>
    </body>
</html>