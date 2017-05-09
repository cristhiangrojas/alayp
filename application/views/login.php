<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>::.. LOGIN || ACCESO AL SISTEMA ..::</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>external/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>external/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>external/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="" style="color: #fff;"><b>ALA</b>YP</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar sesión</p>

    <form action="<?php echo base_url() ?>login/procesar_login" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" autocomplete="off">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <?php 
          if($this->session->flashdata('usuario_incorrecto'))
          {
            ?>
              <p><?=$this->session->flashdata('usuario_incorrecto')?></p>
              <p><?=$this->session->flashdata('login_usuario')?></p>
            <?php
          }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ?>external/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src=".<?php echo base_url() ?>external/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>external/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
