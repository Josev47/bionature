<!DOCTYPE html>
<html>

    <?php include_once 'vista/comps/head.php'; ?>

    <body id="page-top">

        <div id="wrapper">

        <?php include_once 'vista/comps/nav.php'; ?>

            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">

                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                      <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline bio1">Usuario</span>
                                    <i class="fas fa-sm fa-user bio2"></i>
                                </a> 
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Cerrar sesión
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </nav>
                    <div class="container-fluid">

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><b class="bio1">Bio<span class="bio2">Nature</span></b>, Un Universo Natural</h1>
                        </div>
                      <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="font-weight-bold bio2 mt-2">Nuevo pago</h6>
                        </div>
                        <div class="card-body">
                        <div class="p-4">
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="formaPago" name="formaPago" placeholder="Forma de pago">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="bcoEmisor" name="bcoEmisor" placeholder="Banco emisor">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-user" id="montoUSD" name="montoUSD" placeholder="Monto en $">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-user" id="montoBSD" name="montoBSD" placeholder="Monto en Bolívares">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control form-control-user" id="fecha" name="fecha">
                                    </div>
                                    <div class="col-sm-3">
                                    <button type="submit" href="?pagina=pago" class="btn btn-primary btn-user btn-block">
                                            Registrar pago
                                        </button>
                                    </div>
                                </div>        
                            </form>
                            
                        </div>    
                        </div>
                      </div>
                    </div>

                </div>
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto bio-size">
                            <p class="dark">Copyright &copy; <b class="bio1">Bio<span class="bio2">Nature</span></b> 2024</p>
                        </div>
                    </div>
                </footer>

            </div>

        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">Por favor, confirme el cierre de su sesión</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="?pagina=login">Confirmar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="assets/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="assets/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="assets/js/demo/chart-area-demo.js"></script>
        <script src="assets/js/demo/chart-pie-demo.js"></script>


    </body>

</html>