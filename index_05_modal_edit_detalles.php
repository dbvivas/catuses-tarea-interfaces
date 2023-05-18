<div class="modal fade" id="modal-edit-detalles">
  <div class="modal-dialog">      
    <div class="modal-content">
      <form class="form-horizontal" action="index_05_modal_edit_photo_f.php" method="POST" enctype="multipart/form-data">


        <div class="modal-header">
          <h4 class="modal-title">Subir Foto </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="card-body">
         
         <input type="text" class="empid1" name="id">
         <input type="text"                     name="tabla"  value="">
         <input type="text"                     name="modulo"  value="index.php">


         <!-- FOTO  -->
         <div class="form-group row">
          <label for="edit_dato8" class="col-sm-2 col-form-label">FOTO</label>
          <div class="col-sm-10 custom-file">
            <input type="file" class="form-control custom-file-input" id="edit_dato8" name="dato8"  placeholder="FOTO">
            <label class="custom-file-label" for="exampleInputFile">Seleccione una Foto</label>
          </div>
        </div>  




        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" name="upload" class="btn btn-primary">Salvar</button>
        </div>

      </div>

    </form>

  </div>    
</div>  
</div>




