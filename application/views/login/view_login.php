<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $titulo ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('dist/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('dist/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css') ?>>
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('dist/AdminLTE/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/AdminLTE/dist/css/AdminLTE.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('dist/AdminLTE/plugins/iCheck/square/blue.css') ?>">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b><?php echo $tituloLogin ?></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Entre para iniciar sua sessão idiota verdadeiro</p>

    <!-- Inicio do formulario -->
    <?= $this->session->flashdata('erro_login'); ?>
    <form action="" method="POST">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="E-mail">
        <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="senha" class="form-control" placeholder="Senha">
        <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Logar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- fim do formulario -->

    <a href="#">Esqueci a minha senha</a><br>
    <a href="register.html" class="text-center">Registre uma nova associação</a>

    <?php  
      /*echo '<pre>';
      echo print_r($this->input->post());
      echo '</pre>';*/
    ?>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
