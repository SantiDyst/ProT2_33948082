
<nav class="navbar navbar-expand-lg " style="background-color:#C39BD3 ">
  <div class="container-fluid" style="border:solid 1px blueviolet" >
    <a class="navbar-brand" href="<?php echo base_url('principal')?>">
   <!--                         logo principal              -->
    <img src="<?php echo base_url('assets/img/reloj-rosa.png')?>"  alt="marca" width="75" height="30" class="img-fluid">
    </a>

    <button class="navbar-toggler" type="button"              data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"             aria-controls="navbarNavDropdown" aria-expanded="false"             aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <!--                                Listas del nav                 -->

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="quienes_somos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca de nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrarse">Registrarse</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <div class="dropdown " >

       <!--                             menu desplegable                        -->

        <button class="btn btn-secondary bg-primary dropdown-toggle mx-2" type="button" data-bs-toggle="dropdown" aria-expanded="false"  >
          Menu
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>

 <!--                                   buscador                               -->
  <form class="d-flex">
    <input class="form-control me-2 mx-2" type="search" placeholder="Buscar" aria-label="Buscar">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
  </form>

</nav>

