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
        <div class="col-5 text-center d-flex align-items-center justify-content-center">
          <div class="">
            <h2>Estamos por terminar <strong> Enviar</strong></h2>
            <p class="lead mb-5">ingresa los ultimos detalles para enviarte tu pedido
            </p>

            <!-- <a href="#modal-edit-picture" data-toggle="modal" class="pull-right photo" data-id="<?php //echo $row['empid']; ?>" onclick = "funcionP(<?php //echo $row['empid']; ?>)" >
              <div class="">
                <img src="dist/img/default.png" style="width: 200px; height: 200px;" alt="">
              </div>
            </a> -->


          </div>
        </div>



        <div class="col-7">

          <form action="updateEnvioInfo.php" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php   echo $idO; ?>">

            <div class="form-group">
              <label for="inputName">Direccion</label>              
              <input type="text" name="address" class="form-control" placeholder="ingresa tu direccion">
            </div>
            <div class="form-group">
              <label for="inputName">Municipio</label>              
              <input type="text" name="municipio" class="form-control" placeholder="ingresa tu municipio">
            </div>

            <div class="form-group">
              <label for="inputName">Colonia</label>              
              <input type="text" name="colonia" class="form-control" placeholder="ingresa tu colonia">
            </div>


            <div class="form-group">
              <label for="inputName">Codigo Postal</label>              
              <input type="text" name="codigoPostal" class="form-control" placeholder="ingresa tu codigo postal">
            </div>
            <div class="form-group">
              <label for="inputName">Telefono</label>              
              <input type="text" name="telefono" class="form-control" placeholder="ingresa tu telefono">
            </div>

            <div class="form-group">
              <label for="inputName">Email</label>              
              <input type="email" name="email" class="form-control" placeholder="ingresa tu email">
            </div>



            <div class="form-group">
              <input type="submit" name="envioInfo"  class="btn btn-primary" value="Enviar y Finalizar">
            </div>
          </form>


        </div>
      </div>




      <div class="card-footer">
        <div class="float-right">
        <!-- <a href="inicio.php">
        <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Inicio</button>
      </a> -->
      <!-- <a href="metodo_pago.php">
        <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Continuar</button>
      </a> -->
    </div>
    <a href="metodo_pago_select.php">
      <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Regresar</button>
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
