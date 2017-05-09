<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php echo $row->titulo; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>administrador/dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li>Traveling</li>
        <li class="active"><?php echo $row->titulo; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <form action="<?php echo base_url(); ?>administrador/modulos/menu/traveling/traveling/procesar_edit_panel_centro" id="agregar_articulo" method="POST" class="form-horizontal" enctype="multipart/form-data">

              <div class="box-body">

                <input type="hidden" class="form-control" name="id_traveling_panel_centro" id="id_traveling_panel_centro" value="<?php echo $row->id_traveling_panel_centro; ?>" autocomplete="off">

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Titulo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $row->titulo; ?>" placeholder="Ingrese titulo" autocomplete="off">
                  </div>
                </div>

                <?php 

                  if ($row->link == true)
                  {
                    ?>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Link</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="link" id="link" placeholder="Ingrese link" value="<?php echo $row->link; ?>" autocomplete="off">
                        </div>
                      </div>
                    <?php
                  }else{
                    ?>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Imagen</label>
                        <div class="col-sm-10">
                          <input type="file" name="userfile" size="20" />
                        </div>
                      </div> 
                    <?php
                  }

                ?>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Descripción</label>
                  <div class="col-sm-10">
                    <textarea name="descripcion" id="descripcion" cols="30" rows="5" value<?php echo $row->descripcion; ?> class="form-control" placeholder="Ingrese descripción"><?php echo $row->descripcion; ?></textarea>
                  </div>
                </div>      

              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('administrador/modulos/menu/traveling/traveling/panel_centro') ?>" id="" class="btn btn-default pull-left"><i class="fa fa-arrow-left"></i> Atras</a>
                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-pencil fa fa-white"> </i> Modificar</button>
              </div>
            </form>
            
          </div>
        </div>
      </div>
    </section>
  </div>