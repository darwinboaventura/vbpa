<!DOCTYPE html>

<html>

      <head>

            <meta charset="UTF-8">



            <title>VBPA</title>



            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>



            <!-- Bootstrap 3.3.4 -->

            <link href="<?php echo base_url();?>/assets/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />



            <!-- Font Awesome Icons -->

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />



            <!-- Theme style -->

            <link href="<?php echo base_url();?>/assets/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />



            <!-- iCheck -->

            <link href="<?php echo base_url();?>/assets/admin/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />



            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

            <!--[if lt IE 9]>

            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

            <![endif]-->

      </head>



      <body class="login-page">

            <div class="login-box">

                  <div class="login-logo">

                        <a href="#">

                              <b>VBPA</b>

                        </a>

                  </div>

                  <!-- /.login-logo -->



                  <div class="login-box-body">

                        <p class="login-box-msg">Faça o login para começar</p>



                        <form action="<?php echo base_url('login/signin');?>" method="post">

                              <div class="form-group has-feedback">

                                    <input type="text" class="form-control" name="cnpj" placeholder="Login" />



                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                              </div>



                              <div class="form-group has-feedback">

                                    <input type="password" class="form-control" name="password" placeholder="Senha" />



                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                              </div>



                              <div class="row">

                        		<div class="col-xs-8">

                        			<a href="<?php echo base_url('login/esqueceu');?>">Esqueceu sua senha?</a>

                        		</div>



                                    <div class="col-xs-4">

                                          <button type="submit" class="btn btn-primary btn-block btn-flat submit-login-site">Entrar</button>

                                    </div><!-- /.col -->

                              </div>

                        </form>



                        <?php $success = $this->session->flashdata('success'); if (!empty($success)) : ?>

                              <div class="alert alert-success alert-dismissible" style="margin-top: 30px;">

                                    <h4>

                                          <i class="icon fa fa-check"></i> Sucesso!

                                    </h4>



                                    <?php echo $this->session->flashdata('success');?>

                              </div>

                        <?php endif;?>

                        <?php $error = $this->session->flashdata('error'); if (!empty($error)) : ?>

					<div class="alert alert-danger alert-dismissible" style="margin-top: 30px;">

						<h4>

							<i class="icon fa fa-ban"></i> Erro!

						</h4>



						<?php echo $this->session->flashdata('error');?>

					</div>

				<?php endif;?>

                  </div>

                  <!-- /.login-box-body -->

            </div>

            <!-- /.login-box -->



            <!-- jQuery 2.1.4 -->

            <script src="<?php echo base_url();?>/assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>



            <!-- Bootstrap 3.3.2 JS -->

            <script src="<?php echo base_url();?>/assets/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>



            <!-- iCheck -->

            <script src="<?php echo base_url();?>/assets/admin/plugins/iCheck/icheck.min.js" type="text/javascript"></script>



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

