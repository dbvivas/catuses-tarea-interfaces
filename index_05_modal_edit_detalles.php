<div class="modal fade" id="modal-edit-detalles">
  <div class="modal-dialog modal-xl">      
    <div class="modal-content">
      <form class="form-horizontal" action="index_05_modal_edit_detalles_f.php" method="POST" enctype="multipart/form-data">


        <div class="modal-header">
          <h4 class="modal-title">Subir Foto </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="card-body">

         <input type="hidden" class="empid1" name="id">
         


         <div class="row">
          <div class="col-md-6">
            <!-- Buttons with Icons -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cargar Foto</h3>

              </div>
              <div class="card-body row">

                <div class="col-12 text-center d-flex align-items-center justify-content-center">
                  <div class="">
                    <h2>Aqui su <strong> IMAGEN</strong></h2>
                    

                    <div class="form-group row">
                      <label for="edit_dato8" class="col-sm-12 col-form-label">

                        <img  id="output" src="dist/img/default.png" style="width: 200px; height: 200px;" alt="">

                      </label>

                      
                      <input style="display: none;" type="file" accept="image/*" onchange="loadFile(event)" class="form-control " id="edit_dato8" name="dato8"  >
                      

                      
                    </div>  

                    <p style="text-align: center;" class="lead mb-12"> <strong> hacer clic en la imagen para subir tu foto </strong> </p>

                    
                    <script>
                      var loadFile = function(event) {
                        var reader = new FileReader();
                        reader.onload = function(){
                          var output = document.getElementById('output');
                          output.src = reader.result;
                        };
                        reader.readAsDataURL(event.target.files[0]);
                      };
                    </script>
                    


                  </div>
                </div>
              </div>
              <div class="card-footer">
               
              </div>
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <!-- Application buttons -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">recuerda cumplir con las Especificaciones</h3>
              </div>
              <div class="card-body">
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
                <label for="edit_observaciones">Message</label>
                <textarea  id="edit_observaciones"  name="observaciones"  class="form-control" rows="4"></textarea>
              </div>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


        </div>
        <!-- /.col -->
      </div>




      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="detalles" class="btn btn-primary">Guardar</button>
      </div>

    </div>

  </form>

</div>    
</div>  
</div>




