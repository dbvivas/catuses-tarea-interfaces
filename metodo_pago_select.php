<?php $nombreModulo = "Metodo de Pago"; ?>
<?php include 'index_header.php'; ?>
<?php include 'index_body.php'; ?>
<?php include 'index_menu_superior.php'; 
?>







<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Metodo de pago Seleccionado.</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
            <li class="breadcrumb-item active">Medoto Pago Seleccionado</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-body">

       <div class="row">
        <div class="col-md-6">

          <div class="card card-primary">

            <?php 


            include '00_includes/alertas.php';


            ?>

            <div class="card-header">
              <h3 class="card-title">Detalles Metodo Pago</h3>
            </div>
            <div class="card-body">
              <form action="updateCardInfo.php" method="POST" enctype="multipart/form-data">

               <div class="form-group">
                <label>NOMBRE:</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                  </div>
                  <input type="text" required class="form-control" name="nombreUsuario" placeholder="Nombre Usuario">
                </div>
              </div>

              <input type="hidden" name="id" value="<?php   echo $idO; ?>">

              <!-- phone mask -->
              <div class="form-group">
                <label>N° TARJETA</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                  </div>
                  <input type="text" required class="form-control" name="numeroTarjeta" placeholder="9999-9999-9999-9999"
                  data-inputmask="'mask': ['9999-9999-9999-9999', '9999 9999 9999']" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->




              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>VENCE:</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="text" name="vence" required class="form-control" placeholder="00/00" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/yy" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->


<!-- 
            <div class="form-group">
              <label>Date masks:</label>
              
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                </div>
                
              </div>
              
            </div> -->

            
            <div class="form-group">
              <label>CVV:</label>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-eye"></i></span>
                </div>
                <input type="text" name="cvv" required placeholder="123" class="form-control" data-inputmask='"mask": "999"' data-mask>
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->

            

            
            <!-- <div class="form-group">
              <label>IP mask:</label>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-laptop"></i></span>
                </div>
                <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
              </div>
              
            </div> -->

            <div class="float-right">
              <!-- <a href="enviar.php"> -->
                <button type="submit" name="cardInfo" class="btn btn-success"><i class="fas fa-share"></i> Continuar</button>
                <!-- </a> -->
              </div>  

            </form>      

          </div>


          <div class="card-footer">

        <!-- <a href="inicio.php">
        <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Inicio</button>
      </a> -->


      <a href="metodo_pago.php">
        <button type="button" class="btn btn-danger"><i class="fas fa-reply"></i> Regresar</button>
      </a>
      <!-- <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button> -->
    </div>


    <!-- /.card-body -->
  </div>
  <!-- /.card -->


  <!-- /.card -->

</div>
<!-- /.col (left) -->

<!-- /.col (right) -->
</div>


</div>
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->






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
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>

<script type="text/javascript">

  $(function () {

 //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

  })

</script>

</body>
</html>
