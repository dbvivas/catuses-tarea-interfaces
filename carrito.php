<?php $nombreModulo = "Carrito"; ?>
<?php include 'index_header.php'; ?>
<?php include 'index_body.php'; ?>
<?php include 'index_menu_superior.php'; ?>



<input type="hidden" name="userId" id="userId" value="<?php echo $user['id']; ?>">
<input type="hidden" name="ordenId" id="ordenId" value="<?php echo $idO; ?>">



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Carrito</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
            <li class="breadcrumb-item active">Carrito</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-8">
        <div class="card card-primary shadow-none">
          <div class="card-header">
            <h3 class="card-title">Carrito</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>CANT</th>
                <th>DESCRIP</th>
                <th>PRICE</th>
                <th>SUBT</th>
                <th>OPC</th>
              </tr>
            </thead>
            <tbody>
              <?php  

              $sql = "SELECT * 
              FROM ordenes_detalles  
              INNER JOIN modelos ON modelos.id = ordenes_detalles.producto_id
              INNER JOIN ordenes ON ordenes.id = ordenes_detalles.orden_id
              WHERE orden_id = ".$idO;
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){  ?>
               <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['cant']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td><?php echo $row['precio']; ?></td>


                <?php 

                $fechaOrden = date('Y - m - d', strtotime($row['fecha']));
                $subtotal = $row['cant'] * $row['precio'];
                $subtotalG = $subtotalG + $subtotal;

                ?>

                <td><?php echo number_format($subtotal,2); ?></td>



                <td style="text-align: center; align-items: center; vertical-align: middle;">

                 <button  style=" margin-right: 2px; margin-left: 2px;" class="btn btn-warning btn-sm plus " data-id="<?php echo $row['id'];  ?>" onclick = "funcionX(<?php echo $row['id']; ?>)"><i class="fa fa-plus"></i> </button>

                 <button  style=" margin-right: 2px; margin-left: 2px;" class="btn btn-danger btn-sm minus " data-id="<?php echo $row['id'];  ?>" onclick = "funcionX(<?php echo $row['id']; ?>)"><i class="fa fa-minus"></i> </button>

                 <button  style=" margin-right: 2px; margin-left: 2px;" class="btn btn-success btn-sm detail " data-id="<?php echo $row['id'];  ?>" onclick = "funcionX(<?php echo $row['id']; ?>)"><i class="fa fa-bars"></i> </button>

                 <button  style=" margin-right: 2px; margin-left: 2px;" class="btn btn-danger btn-sm delete " data-id="<?php echo $row['id'];  ?>" onclick = "funcionX(<?php echo $row['id']; ?>)"><i class="fa fa-trash"></i> </button>

               </td>
             </tr> 
           <?php  }  ?>
         </tbody>


       </table>
     </div>
     <!-- /.card-body -->
   </div>
   <!-- /.card -->
 </div>
 <!-- /.col -->
 <div class="col-md-4">
  <div class="card card-success shadow-sm">
    <div class="card-header">
      <h3 class="card-title"><strong>Detalles Totales</strong></h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <p class="lead">Orden Realizada <?php echo $fechaOrden; ?></p>

      <div class="table-responsive">
        <table class="table">
          <tr>
            <th style="width:50%">Subtotal:</th>
            <td><?php echo '$'.number_format($subtotalG,2); ?></td>
          </tr>
          <tr>
            <th>Tax (9.3%)</th>
            <?php $tax = $subtotalG * 0.093; ?>
            <td><?php echo '$'.number_format($tax,2); ?></td>
          </tr>
          <tr>
            <?php $shipping = 5.80; ?>
            <th>Shipping:</th>
            <td>$<?php echo number_format($shipping,2) ?></td>
          </tr>
          <tr>
            <?php $total = $subtotalG + $tax + $shipping; ?>
            <th>Total:</th>
            <td>$<?php echo number_format($total,2) ?></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="card-footer">
      <div class="float-right">
        <!-- <a href="inicio.php">
        <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Inicio</button>
      </a> -->
      <a href="enviar.php">
        <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Continuar</button>
      </a>
    </div>
    <a href="inicio.php">
      <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Regresar</button>
    </a>
    <!-- <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button> -->
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->


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

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<!-- <script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script> -->
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
      "autoWidth": false,
     /* "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>

</body>
</html>
