<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tcthecase | Pagina de Registro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
  <div class="register-box">


    <?php include '00_includes/alertas.php'; ?>

    <div class="register-logo">
      <a href="register.php"><b>Metodos de </b>PAGO</a>    
    </div>



    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Seleccione el metodo de su preferencia</p>

        <form action="#" method="post" enctype="multipart/form-data">

          <div class="form-group">

            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
              <label for="customRadio1" class="custom-control-label">CREDITO..............</label>
              <img src="dist/img/credit/visa.png" alt="Visa">
            </div>
            <br>  
          
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked>
              <label for="customRadio2" class="custom-control-label">DEBITO................</label>
              <img src="dist/img/credit/mastercard.png" alt="Mastercard">
            </div>
            <br>  
           
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" id="customRadio3" name="customRadio" checked>
              <label for="customRadio3" class="custom-control-label">OXXO...................</label>
              <img src="dist/img/credit/american-express.png" alt="American Express">
            </div>
            <br>  
            
            <div class="custom-control custom-radio">
              <input class="custom-control-input" type="radio" id="customRadio4" name="customRadio" checked>
              <label for="customRadio4" class="custom-control-label">PAYPAL................</label>
              <img src="dist/img/credit/paypal2.png" alt="Paypal">
            </div>







            
          </div>


       <br>  
               


          <div class="row">

           <!-- /.col -->
           <div class="col-12">
            <button type="submit" name="add" class="btn btn-primary btn-block">SELECCIONAR</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">

      </div>

      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
