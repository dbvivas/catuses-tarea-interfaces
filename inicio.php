<?php $nombreModulo = "Inicio"; ?>

<?php include 'index_header.php'; ?>
<?php include 'index_body.php'; ?>
<?php include 'index_menu_superior.php'; ?>

   

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
                      <a class="btn btn-info active" href="javascript:void(0)" data-filter="all">TODOS</a>
                      <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> SAMSUNG </a>
                      <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> IPHONE </a>
                      <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> REDMI </a>

                    </div>

                  </div>


                  <div>
                    <div class="filter-container p-0 row">
                      <?php 
                      $sql = "SELECT * FROM modelos";
                      $query = $conn->query($sql);
                      ?>

                      <?php while ($row = $query->fetch_assoc()) { ?>

                        <div class="filtr-item col-sm-2" data-category="<?php echo $row['marca_id'];?>" data-sort="white sample">

                          <a 
                          href="<?php echo $row['url_photo'];?>" 
                          data-toggle="lightbox" 
                          data-title="<?php echo $row['descripcion']; ?>"                          
                          data-max-width="400"
                          data-max-height="400"
                          data-footer="<a href='seleccion.php?id=<?php echo $row['id']; ?>' class='btn btn-primary btn-sm '>
                            <i class='fa fa-info fa-lg mr-2'></i>
                            SELECCIONAR</button>"




                          >
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
 <?php include 'footer.php'; ?>
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
