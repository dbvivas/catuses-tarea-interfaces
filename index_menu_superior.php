 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <!-- <li class="nav-item">
      <a class="nav-link"  href="index.php" role="button"><i class="fas fa-bars"></i></a>
    </li> -->
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index.php" class="nav-link"><i class="fa fa-home"></i> Inicio</a>
    </li>

  </ul>

  <?php 

$idO = orden_actual($user['id']); 
$tItemsCar = tOrdenCar($idO);


?>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

   <!-- Notifications Dropdown Menu -->
   <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="fa fa-shopping-cart"></i>
      <span class="badge badge-warning navbar-badge"><?php echo $tItemsCar; ?></span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      
      <div class="dropdown-divider"></div>
      <a href="carrito.php" class="dropdown-item">
        <i class="fa fa-shopping-cart mr-2"></i><?php echo $tItemsCar; ?> IR AL CARRITO
        <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-file mr-2"></i>4 ORDENES CERRADAS
        <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
      </a>
      
      <!-- <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-users mr-2"></i> 8 friend requests
        <span class="float-right text-muted text-sm">12 hours</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item">
        <i class="fas fa-file mr-2"></i> 3 new reports
        <span class="float-right text-muted text-sm">2 days</span>
      </a> -->
      <!-- <div class="dropdown-divider"></div>
      <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
      
    </div>
  </li>


  <li class="nav-item dropdown user-menu">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
      <img src="dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
      <span class="d-none d-md-inline"><?php echo $user['firstname']; ?></span>
    </a>        
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
      <!-- User image -->
      <li class="user-header bg-primary">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

        <p>
          <?php echo $user['firstname']; ?>
          <small>Member since Nov. 2012</small>
        </p>
      </li>

      <li class="user-footer">
        <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
        <a href="logout.php" class="btn btn-danger  float-right">Cerrar Sesion</a>
      </li>
    </ul>
  </li>

</ul>
</nav>
    <!-- /.navbar -->