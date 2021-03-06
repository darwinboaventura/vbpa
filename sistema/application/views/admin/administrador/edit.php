<?php $this->load->view('admin/includes/header.php');?>

                  <!-- Content Wrapper. Contains page content -->
                  <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                              <h1>
                                    Administradores
                              </h1>

                              <ol class="breadcrumb">
                                    <li>
                                          <a href="<?php echo base_url('admin');?>">
                                                <i class="fa fa-dashboard"></i> Home
                                          </a>
                                    </li>

                                    <li>
                                          <a href="<?php echo base_url('admin/administrador');?>">
                                                <i class="fa fa-users"></i> Administradores
                                          </a>
                                    </li>

                                    <li class="active">Editar</li>
                              </ol>
                        </section>

                        <!-- Main content -->
                        <section class="content">
                              <div class="row">
                                    <div class="col-md-12">
                                          <div class="box box-primary">
                                                <div class="box-header">
                                                      <h3 class="box-title">Editar</h3>
                                                </div>
                                                <!-- /.box-header -->

                                                <div class="box-body">
                                                      <form role="form" method="post" action="<?php echo base_url('admin/administrador/put');?>" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                  <label>Nome</label>

                                                                  <input type="text" name="name" class="form-control" value="<?php echo $administrador[0]['name'];?>" required />
                                                            </div>

                                                            <div class="form-group">
                                                                  <label>E-mail</label>

                                                                  <input type="email" name="email" class="form-control" value="<?php echo $administrador[0]['email'];?>" required />
                                                            </div>

                                                            <div class="form-group">
                                                                  <label>Login</label>

                                                                  <input type="text" name="login" class="form-control" value="<?php echo $administrador[0]['login'];?>" required />
                                                            </div>

                                                            <div class="form-group">
                                                                  <label>Senha</label>

                                                                  <input type="password" name="password" class="form-control" value="<?php echo $administrador[0]['password'];?>" required />
                                                            </div>

                                                            <div class="form-group">
                                                                  <label>Imagem</label>

                                                                  <div class="box-profile-picture-update">
                                                                      <p>
                                                                          <img src="<?php echo base_url('uploads');?>/<?php echo $administrador[0]['thumbnail'];?>" class="img-rounded" style="max-width: 150px" />
                                                                      </p>

                                                                      <p>
                                                                          <a href="#">Trocar imagem</a>
                                                                      </p>
                                                                  </div>
                                                            </div>

                                                            <div class="box-footer">
                                                                  <input type="hidden" name="ID" value="<?php echo $administrador[0]['ID'];?>">

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
