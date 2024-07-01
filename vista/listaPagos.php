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
                            <h6 class="font-weight-bold bio2 mt-2">Lista de pagos</h6>
                              <button class="ml-auto btn btn-primary"><i class="fas fa-fw fa-plus"></i> Nuevo pago</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead class="bio1">
                                  <tr>
                                      <th>ID Pago</th>
                                      <th>Forma de pago</th>
                                      <th>Banco emisor</th>
                                      <th>Monto en USD</th>
                                      <th>Monto en BsD</th>
                                      <th>Fecha de pago</th>
                                      <th></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    <td>1</td>
                                    <td>Transferencia</td>
                                    <td>BNC</td>
                                    <td>123</td>
                                    <td>876</td>
                                    <td>01/01/2024</td>
                                    <td>
                                      <form method="post" action="?pagina=pago">
                                        <button class="btn btn-warning"  value="">
                                          <i class="fas fa-fw fa-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger" value="">
                                          <i class="fas fa-fw fa-xmark"></i>
                                        </button>
                                      </form>
                                    </td>
                                  </tbody>
                                </table>
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
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="assets/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="assets/js/demo/chart-area-demo.js"></script>
        <script src="assets/js/demo/chart-pie-demo.js"></script>

    </body>

</html>