<?php
    if(isset ($_SESSION["Duenio"])){
        $Duenio = $_SESSION["Duenio"];
    }
?>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          <!--<strong>Framework</strong>-->
     </span>
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Duenio/DuenioShowProfile">Inicio</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Mascota/ShowListMascotaView">Lista</a>
          </li>      
          <li class="nav-item">
               <a class="nav-link" href="<?php echo FRONT_ROOT ?>Guardian/ShowListView">ListaDeGuardianes</a>
          </li>       
     </ul>
</nav>