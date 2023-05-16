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

    <!-- Default box -->
    <div class="card">
      <div class="card-body row">
        <div class="col-5 text-center d-flex align-items-center justify-content-center">
          <div class="">
            <h2>Aqui su <strong> IMAGEN</strong></h2>
            <p class="lead mb-5">recuerda cumplir con las <br>
              Eespecificaciones
            </p>

            <a href="#modal-edit-picture" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['empid']; ?>" onclick = "funcionP(<?php echo $row['empid']; ?>)" >
              <div class="">
                <img src="dist/img/default.png" style="width: 200px; height: 200px;" alt="">
              </div>
            </a>


          </div>
        </div>



        <div class="col-7">

          <form action="metodo_pago.php" method="get">
            <div class="form-group">
              <label for="inputName">Imagen</label>
              <p>Subir una Imagen de referencia</p>
            </div>
            <div class="form-group">
              <label for="inputEmail">Calidad</label>
              <p>La imagen debe ser de buena calidad</p>
            </div>
            <div class="form-group">
              <label for="inputSubject">Color Fondo</label>
              <p> En caso de querer color de fondo especificar el color deseado y si se quiere que el
              color de fondo cubra toda la parte trasera o solo sean brochazos como en los ejemplos  </p>
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="submit"  class="btn btn-primary" value="Enviar">
            </div>
          </form>


        </div>
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

</body>
</html>
