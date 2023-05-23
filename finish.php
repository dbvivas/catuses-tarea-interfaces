<?php $nombreModulo = "Enviar"; ?>
<?php include 'index_header.php'; ?>
<?php include 'index_body.php'; ?>
<?php include 'index_menu_superior.php'; ?>







<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Enviar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
            <li class="breadcrumb-item active">Enviar</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <?php include '00_includes/alertas.php'; ?>


    <!-- Default box -->
    <div class="card">
      <div class="card-body row">
        <div class="col-12 text-center d-flex align-items-center justify-content-center">
          <div class="">
            <h2>Hemos <strong> Terminado </strong></h2>
            <p class="lead mb-5">ingresa los ultimos detalles para enviarte tu pedido
            </p>

            <!-- <a href="#modal-edit-picture" data-toggle="modal" class="pull-right photo" data-id="<?php //echo $row['empid']; ?>" onclick = "funcionP(<?php //echo $row['empid']; ?>)" >
              <div class="">
                <img src="dist/img/default.png" style="width: 200px; height: 200px;" alt="">
              </div>
            </a> -->


          </div>
        </div>




      </div>




      <div class="card-footer">
        <div class="float-right">
        <!-- <a href="inicio.php">
        <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Inicio</button>
      </a> -->

      <a href="index.php">
        <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Ir al Inicio</button>
      </a> 
    </div>
    <a href="index.php">
      <button type="button" class="btn btn-default"><i class="fas fa-plus"></i> Iniciar Nueva Compra</button>
    </a>
    <!-- <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button> -->
  </div>

</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php   include 'index_05_modal_edit_photo.php'; ?>

<?php   include 'footer.php'; ?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>

  $(function () {

   window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
      $(this).remove();
    });
  }, 3000);


 });

</script>

</body>
</html>
