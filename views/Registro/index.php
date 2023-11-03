<!DOCTYPE html>
<html lang="es">
    <head>
        <?php require_once("../Main/mainhead.php"); ?>
        <title>Registro | Santa Maria</title>
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
                                        <h5 class="text-muted text-uppercase py-3 font-16">Registro</h5>
                                    </div>
                                    <form id="loginform" method="post" class="mt-2">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group mb-3">
                                                    <label for="lbl_nombres">Nombres:</label>
                                                    <input class="form-control" type="text" placeholder="Ingrese sus nombres" id="user_nom" autocomplete="off" required="">
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group mb-3">
                                                    <label for="lbl_nombres">Apellidos:</label>
                                                    <input class="form-control" type="text" placeholder="Ingrese sus apellidos" id="user_ape" autocomplete="off" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group mb-3">
                                                    <label for="lbl_nombres">DNI:</label>
                                                    <input class="form-control" type="number" placeholder="Ingrese su dni" id="user_dni" autocomplete="off" required="">
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group mb-3">
                                                    <label for="lbl_nombres">Celular:</label>
                                                    <input class="form-control" type="number" placeholder="Ingrese su celular" id="user_cel" autocomplete="off" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="lbl_nombres">Correo Electronico:</label>
                                            <input class="form-control" type="text" placeholder="Ingrese su correo electronico" id="user_cel" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="lbl_nombres">Fecha de Nacimiento:</label>
                                            <input class="form-control" type="date" placeholder="Ingrese su fecha de nacimiento" id="user_cel" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-success btn-block waves-effect waves-light" id="btningresar"> Registrarse </button>
                                        </div>
                                    </form>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Ya tienes tu cuenta? <a href="../Login/" class="text-white ml-1"><b>Inicia Sesión</b></a></p>
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