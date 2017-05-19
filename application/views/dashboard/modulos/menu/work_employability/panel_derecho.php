<div class="content-wrapper">
  <section class="content-header">
      <h1>Starting a Business | Panel Derecha</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>administrador/dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Starting a Business</li>
      </ol>
    </section>

    <div class="pad margin no-print">
      <div class="span5" style="margin-left: 0">
        
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Agregar Sponsors</h3>
            </div>
            <div class="box-body">
              <form action="<?php echo base_url(); ?>administrador/modulos/menu/work_employability/work/procesar_sponsors" id="agregar_articulo" method="POST" class="form-horizontal" enctype="multipart/form-data">

              <?php 

                if ( count($listado_panel_centro_sponsors) > 0 ) 
                {
                  foreach ($listado_panel_centro_sponsors as $row)
                  {
                    echo '<img src="'.base_url().'uploads/work_employability/sponsors/'.$row->imagen.'" class="img-responsive" />';
                  }
                }else{
                  echo "";
                }

              ?>

              <div class="box-body">

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Imagen</label>
                  <div class="col-sm-10">
                    <input type="file" name="userfile" size="20" required />
                  </div>
                </div>      

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-pencil fa fa-white"> </i> Modificar</button>
              </div>
            </form>

            <?php
                if ($this->session->flashdata('edit_panel_derecha_sponsors')==true) 
                {
                  ?>
                      <div class="alert alert-success" role="alert">
                        <?=$this->session->flashdata('edit_panel_derecha_sponsors')?>
                      </div>
                    <?php
                }

                if ($this->session->flashdata('error_imagen')==true) 
                {
                  ?>
                    <div class="alert alert-danger" role="alert">
                      <?=$this->session->flashdata('error_imagen')?>
                    </div>
                  <?php
                }
            ?>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url() ?>administrador/modulos/menu/newsfeed/newsfeed/eliminar_panel_centro" method="post" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h5 id="myModalLabel">Eliminar registro</h5>
        </div>
        <div class="modal-body">
          <input type="hidden" id="idProduto" name="id_newsfeed_panel_centro" value="" />
          <h5 style="text-align: center">¿Esta seguro de eliminar este registro?</h5>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
          <button class="btn btn-danger">Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo base_url();?>external/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
  $(document).ready(function(){

   $(document).on('click', 'a', function(event) 
   {        
      var produto = $(this).attr('produto');
      $('#idProduto').val(produto);
    });

  });
</script>