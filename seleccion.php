<?php $nombreModulo = "Seleccion"; ?>
<?php include 'index_header.php'; ?>
<?php include 'index_body.php'; ?>
<?php include 'index_menu_superior.php'; ?>

<?php
$idP = $_GET['id'];
$sql = "SELECT * FROM modelos WHERE id = ".$idP;
$query = $conn->query($sql);
$row = $query->fetch_assoc();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $row['descripcion']; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
            <li class="breadcrumb-item active"><?php echo $nombreModulo; ?></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3 class="d-inline-block d-sm-none"><?php echo $row['descripcion']; ?></h3>
            <div class="col-12">
              <img src="<?php echo (!empty($row['url_photo'])) ? $row['url_photo'] : 'dist/img/dispositivo1.jpg'; ?>" class="product-image" style="width: 300px; height: 300px;" alt="Product Image">
            </div>
            <div class="col-12 product-image-thumbs">


              <div class="product-image-thumb active" >
                <img src="<?php echo (!empty($row['url_photo'])) ? $row['url_photo'] : 'dist/img/dispositivo1.jpg'; ?>" alt="Product Image">
              </div>

              <div class="product-image-thumb" >
                <img src="<?php echo (!empty($row['url_photo2'])) ? $row['url_photo2'] : 'dist/img/dispositivo2.jpg'; ?>" alt="Product Image">
              </div>

              <div class="product-image-thumb" >
                <img src="<?php echo (!empty($row['url_photo3'])) ? $row['url_photo3'] : 'dist/img/dispositivo3.jpg'; ?>" alt="Product Image">
              </div>

              <div class="product-image-thumb" >
                <img src="<?php echo (!empty($row['url_photo4'])) ? $row['url_photo4'] : 'dist/img/dispositivo4.jpg'; ?>" alt="Product Image">
              </div>

              <div class="product-image-thumb" >
                <img src="<?php echo (!empty($row['url_photo5'])) ? $row['url_photo5'] : 'dist/img/dispositivo5.jpg'; ?>" alt="Product Image">
              </div>

            </div>







          </div>
          <div class="col-12 col-sm-6">
            <h3 class="my-3"><?php echo $row['descripcion']; ?></h3>
            <p>descripcion del producto.</p>

            <hr>


            <form action="enviar_add_order_detail.php" method="POST" enctype="multipart/form-data">

              <div class="bg-primary py-2 px-3 mt-4">
                <h2 class="mb-0" id="subtotal">
                  <?php echo $row['precio']; ?>
                </h2>

              <!-- <h4 class="mt-0">
                <small>Ex Tax: $80.00 </small>
              </h4> -->
            </div>


            <?php 
             // $idO = orden_actual($user['id']);
            ?>

            <input type="text" name="userId" id="userId" value="<?php echo $user['id']; ?>">            
            <input type="text" name="productoId" id="productoId" value="<?php echo $idP; ?>">
            <input type="text" name="ordenId" id="ordenId" value="<?php echo $idO; ?>">

            <div class="input-group mt-4 col-12 col-sm-6">

              <div  class="btn btn-danger" onclick="minus()">
                <i class=" fa fa-minus ">  </i>
              </div>

              <input type="number" name="cant" min="1"  id="cant" class="form-control" value="1"  placeholder="cantidad">

              <div  class="btn btn-primary" onclick="plus()">
                <i class=" fa fa-plus ">  </i>
              </div>

              <script type="text/javascript">

               function minus() {
                if (document.getElementById('cant').value <= 1 ) {
                 document.getElementById('cant').value = 1;
                 var precioU = <?php echo $row['precio']; ?>;
                 document.getElementById('subtotal').value = document.getElementById('cant').value * parseFloat(precioU);
               }else{
                document.getElementById('cant').value = (document.getElementById('cant').value - 1);
                var precioU = <?php echo $row['precio']; ?>;
                document.getElementById('subtotal').innerHTML  = document.getElementById('cant').value * parseFloat(precioU);
              }
            }

            function plus() {
              document.getElementById('cant').value = ( parseInt(document.getElementById('cant').value) + 1);
              var precioU = <?php echo $row['precio']; ?>;
              document.getElementById('subtotal').innerHTML  = document.getElementById('cant').value * parseFloat(precioU);
            }


          </script>

        </div>

        <div class="mt-4">

          <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-lg ">
            <i class="fas fa-cart-plus fa-lg mr-2"></i>
            Add to Cart
          </button>

              <!-- <div class="btn btn-default btn-lg btn-flat">
                <i class="fas fa-heart fa-lg mr-2"></i>
                Add to Wishlist
              </div> -->
            </div>

          </form>

          
        </div>
      </div>
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'footer.php'; ?>

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
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
</body>
</html>
