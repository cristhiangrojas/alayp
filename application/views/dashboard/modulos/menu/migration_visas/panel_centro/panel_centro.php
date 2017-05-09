<div class="content-wrapper">
  <section class="content-header">
      <h1>Migration Visas | Panel Centro</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>administrador/dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Migration Visas</li>
      </ol>
    </section>

    <div class="pad margin no-print">
      <div class="span5" style="margin-left: 0">
        <a href="<?php echo base_url() ?>administrador/modulos/menu/migration_visas/migration_visas/agregar_panel_centro" class="btn btn-success"><i class="fa fa-plus fa fa-white"> </i> Agregar Panel Centro</a>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado Migration Visas | Panel Centro</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Fecha Hora</th>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        if ( count($listado_migration_visas) > 0 ) 
                        {
                          foreach ( $listado_migration_visas as $row ) 
                          {
                              ?>
                                  <tr>
                                    <td><?php echo $row->id_migration_visas_panel_centro;?></td>
                                    <td><?php echo $row->fecha_hora;?></td>
                                    <td><?php echo $row->titulo;?></td>
                                    <td><?php echo $row->descripcion;?></td>
                                    <td align="center">

                                      <a href="<?php echo site_url('administrador/modulos/menu/migration_visas/migration_visas/visualizar_panel_centro?id_migration_visas_panel_centro='.$row->id_migration_visas_panel_centro)?>" style="color:#000;text-decoration:none;"><i style="font-size: 20px;"class="fa fa-eye" title="Visualizar"></i></a>

                                      <a href="<?php echo site_url('administrador/modulos/menu/migration_visas/migration_visas/editar_panel_centro?id_migration_visas_panel_centro='.$row->id_migration_visas_panel_centro)?>" style="color:#000;text-decoration:none;"><i style="font-size: 20px;"class="fa fa-pencil" title="Editar"></i></a>

                                      <a href="#modal-delete" role="button" data-toggle="modal" produto="<?php echo $row->id_migration_visas_panel_centro; ?>"  style="color:#000;text-decoration:none;"><i style="font-size: 20px;"class="glyphicon glyphicon-remove" title="Eliminar"></i></a>

                                      </td>
                                  </tr>
                              <?php
                          }
                        }else{
                          ?>
                              <td colspan="5" style="text-align: center;">No hay registros</td>
                          <?php
                        }
                      ?>
                </tfoot>
              </table>
              </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <?php
                if ($this->session->flashdata('agregar_panel_centro')==true) 
                {
                  ?>
                      <div class="alert alert-success" role="alert">
                        <?=$this->session->flashdata('agregar_panel_centro')?>
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

                if ($this->session->flashdata('editar_panel_centro')==true) 
                {
                  ?>
                      <div class="alert alert-success" role="alert">
                        <?=$this->session->flashdata('editar_panel_centro')?>
                      </div>
                    <?php
                }

                if ($this->session->flashdata('eliminar_panel_centro')==true) 
                {
                  ?>
                      <div class="alert alert-success" role="alert">
                        <?=$this->session->flashdata('eliminar_panel_centro')?>
                      </div>
                    <?php
                }
            ?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url() ?>administrador/modulos/menu/migration_visas/migration_visas/eliminar_panel_centro" method="post" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h5 id="myModalLabel">Elimina registro</h5>
        </div>
        <div class="modal-body">
          <input type="hidden" id="idProduto" name="id_migration_visas_panel_centro" value="" />
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