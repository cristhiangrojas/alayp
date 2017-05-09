<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Nuevo Traveling
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>administrador/dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li>Traveling</li>
        <li class="active">Nuevo Traveling</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <form action="<?php echo base_url(); ?>administrador/modulos/menu/traveling/traveling/procesar_agregar_panel_centro" id="agregar_articulo" method="POST" class="form-horizontal" enctype="multipart/form-data">

              <div class="box-body">

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Titulo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingrese titulo" autocomplete="off">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Imagen</label>
                  <div class="col-sm-10">
                    <input type="file" name="userfile" size="20" />
                  </div>
                </div>   

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="link" id="link" placeholder="Ingrese link" autocomplete="off">
                  </div>
                </div> 

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Descripción</label>
                  <div class="col-sm-10">
                    <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control" placeholder="Ingrese descripción"></textarea>
                  </div>
                </div>  

              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('administrador/modulos/menu/traveling/traveling/panel_centro') ?>" id="" class="btn btn-default pull-left"><i class="fa fa-arrow-left"></i> Atras</a>
                <button type="submit" class="btn btn-success pull-right"><i class="fa fa-plus fa fa-white"> </i> Agregar</button>
              </div>
            </form>
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
            ?>
          </div>
        </div>
      </div>
    </section>
  </div>