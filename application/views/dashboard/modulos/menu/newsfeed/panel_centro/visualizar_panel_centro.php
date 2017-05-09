<div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php echo $row->titulo; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>administrador/dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li>Newsfeed</li>
        <li class="active"><?php echo $row->titulo; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <form action="<?php echo base_url(); ?>administrador/modulos/menu/newsfeed/newsfeed/procesar_agregar_newsfeed" id="agregar_articulo" method="POST" class="form-horizontal" enctype="multipart/form-data">

              <div class="box-body">

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Titulo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="titulo" id="titulo" readonly value="<?php echo $row->titulo; ?>" placeholder="Ingrese titulo" autocomplete="off">
                  </div>
                </div>

                <?php 

                  if ($row->link == true)
                  {
                    ?>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Link</label>
                        <div class="col-sm-10">
                          <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row->link; ?>"></iframe>
                          </div>
                        </div>
                      </div> 
                    <?php 
                  }

                ?>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Descripción</label>
                  <div class="col-sm-10">
                    <textarea name="descripcion" id="descripcion" cols="30" rows="5" readonly value="<?php echo $row->descripcion; ?>" class="form-control" placeholder="Ingrese descripción"><?php echo $row->descripcion; ?></textarea>
                  </div>
                </div> 

                <?php 

                  if ($row->imagen == true)
                  {
                    ?>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Imagen</label>
                        <div class="col-sm-10">
                          <?php 
                            echo '<img src="../../../../../uploads/newsfeed/panel_centro/'.$row->imagen.'" class="img-responsive" />';
                          ?>
                        </div>
                      </div> 
                    <?php 
                  }

                ?>

                     

              </div>
              <div class="box-footer">
                <a href="<?php echo site_url('administrador/modulos/menu/newsfeed/newsfeed/panel_centro') ?>" id="" class="btn btn-default pull-left"><i class="fa fa-arrow-left"></i> Atras</a>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
  </div>