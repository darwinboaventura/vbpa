<!DOCTYPE html>
<html>
      <head>
            <meta charset="UTF-8">

            <title>VBPA</title>

            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

            <!-- Bootstrap 3.3.4 -->
            <link href="<?php echo base_url();?>assets/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

            <!-- FontAwesome 4.3.0 -->
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

            <!-- Ionicons 2.0.0 -->
            <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

            <!-- Theme style -->
            <link href="<?php echo base_url();?>assets/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

            <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
            <link href="<?php echo base_url();?>assets/admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

            <!-- iCheck -->
            <link href="<?php echo base_url();?>assets/admin/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />

            <!-- Morris chart -->
            <link href="<?php echo base_url();?>assets/admin/plugins/morris/morris.css" rel="stylesheet" type="text/css" />

            <!-- jvectormap -->
            <link href="<?php echo base_url();?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

            <!-- Date Picker -->
            <link href="<?php echo base_url();?>assets/admin/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />

            <!-- Daterange picker -->
            <link href="<?php echo base_url();?>assets/admin/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />

            <!-- DATA TABLES -->
            <link href="<?php echo base_url();?>assets/admin/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

            <!-- bootstrap wysihtml5 - text editor -->
            <link href="<?php echo base_url();?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
      </head>

      <body class="skin-blue sidebar-mini">
            <div class="wrapper">
                  <header class="main-header">
                        <a href="<?php echo base_url();?>" class="logo">
                              <span class="logo-mini">
                                    <b>VBPA</b>
                              </span>

                              <span class="logo-lg">
                                    <b>VBPA</b>
                              </span>
                        </a>

                        <!-- Header Navbar: style can be found in header.less -->
                        <nav class="navbar navbar-static-top" role="navigation">

                        </nav>
                  </header>

                  <!-- Left side column. contains the logo and sidebar -->
                  <aside class="main-sidebar">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                              <!-- Sidebar user panel -->
                              <div class="user-panel">
                                    <div class="pull-left image">
                                          <img src="<?php echo base_url();?>/uploads/<?php $logged_thumbnail = $this->session->userdata('logged_thumbnail'); echo $logged_thumbnail;?>" class="img-circle" alt="User Image" />
                                    </div>

                                    <div class="pull-left info">
                                          <p><?php echo $this->session->userdata('logged_name');?></p>

                                          <a href="<?php echo base_url('admin/login/logout');?>">
                                                <i class="fa fa-circle text-success"></i> Sair
                                          </a>
                                    </div>
                              </div>

                              <!-- sidebar menu: : style can be found in sidebar.less -->
                              <ul class="sidebar-menu">
                                    <li class="header">MENU DE NAVEGAÇÃO</li>

                                    <li class="active">
                                          <a href="<?php echo base_url('admin');?>">
                                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                          </a>
                                    </li>

                                    <li class="treeview">
                                          <a href="#">
                                                <i class="fa fa-files-o"></i>

                                                <span>Clientes</span>

                                                <i class="fa fa-angle-down pull-right"></i>
                                          </a>

                                          <ul class="treeview-menu">
                                                <li>
                                                      <a href="<?php echo base_url('admin/cliente/novo');?>">
                                                            <i class="fa fa-circle-o"></i> Adicionar novo
                                                      </a>
                                                </li>

                                                <li>
                                                      <a href="<?php echo base_url('admin/cliente');?>">
                                                            <i class="fa fa-circle-o"></i> Clientes
                                                      </a>
                                                </li>
                                          </ul>
                                    </li>

                                    <li class="treeview">
                                          <a href="#">
                                                <i class="fa fa-file-text"></i>

                                                <span>Categorias</span>

                                                <i class="fa fa-angle-down pull-right"></i>
                                          </a>

                                          <ul class="treeview-menu">
                                                <li>
                                                      <a href="<?php echo base_url('admin/categoria/novo');?>">
                                                            <i class="fa fa-circle-o"></i> Adicionar nova
                                                      </a>
                                                </li>

                                                <li>
                                                      <a href="<?php echo base_url('admin/categoria');?>">
                                                            <i class="fa fa-circle-o"></i> Categorias
                                                      </a>
                                                </li>
                                          </ul>
                                    </li>

                                    <li class="treeview">
                                          <a href="#">
                                                <i class="fa fa-area-chart"></i>

                                                <span>Arquivos</span>

                                                <i class="fa fa-angle-down pull-right"></i>
                                          </a>

                                          <ul class="treeview-menu">
                                                <li>
                                                      <a href="<?php echo base_url('admin/arquivo/novo');?>">
                                                            <i class="fa fa-circle-o"></i> Adicionar novo
                                                      </a>
                                                </li>

                                                <li>
                                                      <a href="<?php echo base_url('admin/arquivo');?>">
                                                            <i class="fa fa-circle-o"></i> Arquivos
                                                      </a>
                                                </li>
                                          </ul>
                                    </li>

                            <ul class="sidebar-menu">
                                <li class="header">USUÁRIOS</li>

                                <li>
                                    <a href="<?php echo base_url('admin/administrador/editar');?>/<?php echo $this->session->userdata('logged_ID');?>">
                                        <i class="fa fa-user"></i>

                                        <span>Editar meu perfil</span>
                                    </a>
                                </li>

                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-users"></i>

                                        <span>Administradores</span>

                                        <i class="fa fa-angle-down pull-right"></i>
                                    </a>

                                    <ul class="treeview-menu">
                                          <li>
                                                <a href="<?php echo base_url('admin/administrador/novo');?>">
                                                      <i class="fa fa-circle-o"></i> Adicionar novo
                                                </a>
                                          </li>

                                          <li>
                                                <a href="<?php echo base_url('admin/administrador');?>">
                                                      <i class="fa fa-circle-o"></i> Administradores
                                                </a>
                                          </li>
                                    </ul>
                                </li>
                            </ul>
                        </section>
                        <!-- /.sidebar -->
                  </aside>
