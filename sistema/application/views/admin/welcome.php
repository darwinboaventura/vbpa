<?php $this->load->view('admin/includes/header.php');?>

                  <!-- Content Wrapper. Contains page content -->
                  <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <!--
                        <section class="content-header">
                              <h1>
                                    Dashboard
                                    <small>Painel de Controle</small>
                              </h1>

                              <ol class="breadcrumb">
                                    <li>
                                          <a href="<?php echo base_url('admin');?>">
                                                <i class="fa fa-dashboard"></i> Home
                                          </a>
                                    </li>

                                    <li class="active">Dashboard</li>
                              </ol>
                        </section>
                        -->

                        <!-- Main content -->
                        <section class="content">
                              <div class="row">
                                    <div class="col-xs-12">
                                          <h3>Olá <?php echo $this->session->userdata('logged_name');?>, seja bem-vindo!</h3>

                                          <p>Você está no painel gerenciador do sistema VBPA, escolha uma das opções ao lado para continuar.</p>
                                    </div>
                              </div>
                              <!-- /.row -->
                        </section>    
                        <!-- /.content -->
                  </div>
                  <!-- /.content-wrapper -->

<?php $this->load->view('admin/includes/footer.php');?>