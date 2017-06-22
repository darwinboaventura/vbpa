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

                                    <li class="active">Administradores</li>
                              </ol>
                        </section>

                        <!-- Main content -->
                        <section class="content">
                              <div class="row">
                                    <div class="col-md-12">
                                          <div class="box">
                                                <div class="box-header">
                                                      <h3 class="box-title">Cadastrados</h3>
                                                </div>

                                                <div class="box-body">
                                                      <table id="example1" class="table table-bordered table-striped">
                                                            <thead>
                                                                  <tr>
                                                                        <th>Nome</th>
                                                                        <th>E-mail</th>
                                                                        <th>Editar</th>
                                                                        <th>Excluir</th>
                                                                  </tr>
                                                            </thead>

                                                            <tbody>
                                                                  <?php if ($administradores) : foreach ($administradores as $administrador) : ?>
                                                                        <tr>
                                                                              <td><?php echo $administrador['name'];?></td>
                                                                              <td><?php echo $administrador['email'];?></td>
                                                                              <td>
                                                                                    <a href="<?php echo base_url('admin/administrador/editar');?>/<?php echo $administrador['ID'];?>">Editar</a>
                                                                              </td>
                                                                              <td>
                                                                                     <a href="javascript:deletar(<?php echo $administrador['ID'];?>, '<?php echo base_url('admin/administrador/excluir');?>');">Excluir</a>
                                                                              </td>
                                                                        </tr>
                                                                  <?php endforeach; endif;?>
                                                           </tbody>
                                                     </table>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </section>
                        <!-- /.content -->
                  </div>
                  <!-- /.content-wrapper -->

<?php $this->load->view('admin/includes/footer.php');?>
