
  <div class="modal fade" id="modal-delete">
    <div class="modal-dialog">      



      <div class="modal-content">

        <form class="form-horizontal" action="index_06_modal_delete_f.php" method="POST" enctype="multipart/form-data">

          <div class="modal-header">
            <h4 class="modal-title">eliminar <?php echo $titulo_modulo; ?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="card-body">
            <input type="hidden" class="empid" name="id">
            


            <p><h5 style="text-align: center;"> estas seguro que deseas eliminar este registro </h5></p>

          </div>

          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="delete" class="btn btn-danger">Eliminar</button>
          </div>

        </form>
        
      </div>
      




    
    </div>
    
  </div>
      