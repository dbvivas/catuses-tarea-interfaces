<?php
include '00_includes/session.php';

$i=$user['rol_id'];
switch ($i) {

  case 1:
  //$_SESSION['success'] = 'Bienvenido!';
  break;

  // case 2:
  // //ADMIN
  // //$_SESSION['success'] = 'Bienvenido!';
  // header('location: ../m_dashboard_admin/index.php');
  // break;


  default:
  $_SESSION['error'] = 'Usuarios no cuenta con permisos! .... rol id = ['.$i.'] y la sesion es: ['.$_SESSION['admin'].']';
  header('location: index.php');

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Tcthecase</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link"  href="index.php" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
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
            <!-- Menu Body -->
          <!-- <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>            
          </li> -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
            <a href="logout.php" class="btn btn-danger  float-right">Cerrar Sesion</a>
          </li>
        </ul>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Interfaz de Productos</h4>
              </div>
              <div class="card-body">

                <div>
                  <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all">Todos las Marcas</a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (SAMSUNG) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (IPHONE) </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (REDMI) </a>
                    <!-- <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a> -->
                  </div>
                  <!-- <div class="mb-2">
                    <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                    <div class="float-right">
                      <select class="custom-select" style="width: auto;" data-sortOrder>
                        <option value="index"> Sort by Position </option>
                        <option value="sortData"> Sort by Custom Data </option>
                      </select>
                      <div class="btn-group">
                        <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                        <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                      </div>
                    </div>
                  </div> -->
                </div>


                <div>
                  <div class="filter-container p-0 row">
                    <?php 
                    $sql = "SELECT * FROM modelos";
                    $query = $conn->query($sql);
                    ?>

                    <?php while ($row = $query->fetch_assoc()) { ?>

                      <div class="filtr-item col-sm-2" data-category="<?php echo $row['marca_id'];?>" data-sort="white sample">
                        <a href="<?php echo $row['url_photo'];?>" data-toggle="lightbox" data-title="<?php echo $row['descripcion']; ?>">
                          <img src="<?php echo $row['url_photo'];?>" style="width: 170px;height: 170px;" class="img-fluid mb-2" alt="white sample"/>
                        </a>
                        <h5><?php echo $row['descripcion']; ?></h5>
                        <h6> <strong> <?php echo $row['precio']; ?> </strong> </h6>
                      </div>

                    <?php } ?>



                    


                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Tcthecase
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023-2031 <a href="https://Tcthecase.com">Tcthecase</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
</body>
</html>
