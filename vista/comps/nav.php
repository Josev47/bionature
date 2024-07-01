<?php 

    

?>

  <ul class="navbar-nav bg-white sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?pagina=home">
        <div class="sidebar-brand-icon rotate-n-15">
        <img src="assets/img/logo.png" width="65%">
        </div>
        <div class="sidebar-brand-text mr-3 bio1">Bio<span class="bio2">Nature</span></div>
    </a>

    <hr class="sidebar-divider my-0 divider-bio1">

    <li class="nav-item active">
        <a class="nav-link bio2" href="?pagina=home">
            <i class="fas fa-fw fa-home bio1"></i>
            <span>Inicio</span></a>
    </li>

    <hr class="sidebar-divider divider-bio1">

    <div class="sidebar-heading bio1">
        Menú
    </div>

    <li class="nav-item">
    <a class="nav-link collapsed bio2" href="#" data-toggle="collapse" data-target="#citas" aria-expanded="true" aria-controls="citas">
        <i class="fas fa-fw fa-clipboard-list bio1"></i>
        <span>Gestión de Citas</span>
      </a>
      <div id="citas" class="collapse" aria-labelledby="citas" data-parent="#accordionSidebar">
          <div class="bio1 py-2 collapse-inner rounded">
              <a class="collapse-item bio1" href="?pagina=cita">Nueva cita</a>
              <a class="collapse-item bio1" href="?pagina=listaCitas">Lista de citas</a>
          </div>
      </div>
    </li>

    <li class="nav-item">
    <a class="nav-link collapsed bio2" href="#" data-toggle="collapse" data-target="#pacientes" aria-expanded="true" aria-controls="pacientes">
        <i class="fas fa-fw fa-user-injured bio1"></i>
        <span>Gestión de pacientes</span>
      </a>
      <div id="pacientes" class="collapse" aria-labelledby="pacientes" data-parent="#accordionSidebar">
          <div class="bio1 py-2 collapse-inner rounded">
              <a class="collapse-item bio1" href="?pagina=paciente">Nuevo paciente</a>
              <a class="collapse-item bio1" href="?pagina=listaPacientes">Lista de pacientes</a>
          </div>
      </div>
    </li>

    <li class="nav-item">
    <a class="nav-link collapsed bio2" href="#" data-toggle="collapse" data-target="#pagos" aria-expanded="true" aria-controls="pagos">
        <i class="fas fa-fw fa-cash-register bio1"></i>
        <span>Gestión de pagos</span>
      </a>
      <div id="pagos" class="collapse" aria-labelledby="pagos" data-parent="#accordionSidebar">
          <div class="bio1 py-2 collapse-inner rounded">
              <a class="collapse-item bio1" href="?pagina=pago">Nuevo pago</a>
              <a class="collapse-item bio1" href="?pagina=listaPagos">Lista de pagos</a>
          </div>
      </div>
    </li>


    <hr class="sidebar-divider d-none d-md-block divider-bio1">

  </ul>