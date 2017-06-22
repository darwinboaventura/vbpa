<?php $this->load->view('admin/includes/header.php');?>

                  <!-- Content Wrapper. Contains page content -->
                  <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                              <h1>
                                    Clientes
                              </h1>

                              <ol class="breadcrumb">
                                    <li>
                                          <a href="<?php echo base_url('admin');?>">
                                                <i class="fa fa-dashboard"></i> Home
                                          </a>
                                    </li>

                                    <li>
                                          <a href="<?php echo base_url('admin/cliente');?>">
                                                <i class="fa fa-files-o"></i> Clientes
                                          </a>
                                    </li>

                                    <li class="active">Novo</li>
                              </ol>
                        </section>

                        <!-- Main content -->
                        <section class="content">
                              <div class="row">
                                    <div class="col-md-12">
                                          <div class="box box-primary">
                                                <div class="box-header">
                                                      <h3 class="box-title">Novo</h3>
                                                </div>
                                                <!-- /.box-header -->

                                                <div class="box-body">
                                                      <form role="form" method="post" action="<?php echo base_url('admin/cliente/post');?>">
                                                            <div class="form-group">
                                                                  <label>Nome da empresa / Nome completo</label>

                                                                  <input type="text" name="name" class="form-control" required />
                                                            </div>

                                                            <div class="form-group">
                                                                  <label>E-mail</label>

                                                                  <input type="email" name="email" class="form-control" required />
                                                            </div>

                                                            <div class="form-group">
                                                                  <label>CNPJ / CPF / CEI</label>

                                                                  <input type="text" name="cnpj" class="form-control" required />
                                                            </div>

                                                            <div class="form-group">
                                                                  <label>Senha</label>

                                                                  <input type="password" name="password" class="form-control" required />
                                                            </div>

                                                            <div class="box-footer">
                                                                  <button type="submit" class="btn btn-primary pull-right">Enviar</button>
                                                            </div>
                                                      </form>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                              <!-- após submeter o formulário, se ocorrer algum erro ou tiver campos vázios -->
                              <?php if ($this->session->flashdata('error')) : ?>
                                    <div class="row">
                                          <div class="col-md-12">
                                                <div class="alert alert-danger alert-dismissable">
                                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                      <h4>
                                                            <i class="icon fa fa-ban"></i> Erro!
                                                      </h4>

                                                      <?php echo $this->session->flashdata('error');?>
                                                </div>
                                          </div>
                                    </div>
                              <?php endif;?>
                              <!-- após submeter o formulário, se ocorrer algum erro ou tiver campos vázios -->
                        </section>
                        <!-- /.content -->
                  </div>
                  <!-- /.content-wrapper -->

<?php $this->load->view('admin/includes/footer.php');?>
