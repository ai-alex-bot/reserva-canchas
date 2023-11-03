<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once("../Main/mainhead.php"); ?>
        <title>Login | Santa Maria</title>
    </head>
    <body class="authentication-bg" style="padding-bottom: 0px !important;">
        <div class="account-pages pt-5 my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="account-card-box">
                            <div class="card mb-0">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="my-3">
                                            <a href="javascript: void(0);">
                                                <span>
                                                    <img src="../../public/images/logo_rubio.png" class="img-fluid" alt="" height="70">
                                                </span>
                                            </a>
                                        </div>
                                        <h5 class="text-muted text-uppercase py-3 font-16">Login</h5>
                                    </div>
                                    <form id="loginform" method="post" class="mt-2">
                                        <div class="form-group mb-3">
                                            <label for="lbl_nombres">Usuario:</label>
                                            <input class="form-control" type="text" placeholder="Ingrese su correo electronico" id="user_usu" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="lbl_nombres">Contraseña:</label>
                                            <input class="form-control" type="password" placeholder="Ingrese su contraseña" id="user_pass" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                                <label class="custom-control-label" for="checkbox-signin">Recordar cuenta</label>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-success btn-block waves-effect waves-light" id="btningresar"> Iniciar sesión </button>
                                        </div>
                                        <a href="#" class="text-muted">
                                            <i class="mdi mdi-lock mr-1"></i> Olvidastes tu contraseña?
                                        </a>
                                    </form>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">No tienes una cuenta? <a href="../Registro/" class="text-white ml-1"><b>Registrate</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <?php require_once("../Main/mainjs.php"); ?>
        <script src="./login.js"></script>
    </body>
</html>