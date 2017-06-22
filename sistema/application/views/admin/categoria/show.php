<?php $this->load->view('admin/includes/header.php');?>

                  <!-- Content Wrapper. Contains page content -->
                  <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                              <h1>
                                    Categorias
                              </h1>

                              <ol class="breadcrumb">
                                    <li>
                                          <a href="<?php echo base_url('admin');?>">
                                                <i class="fa fa-dashboard"></i> Home
                                          </a>
                                    </li>

                                    <li class="active">Categorias</li>
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
                                                                        <th>Seção</th>
                                                                        <th>Nome</th>
                                                                        <th>Editar</th>
                                                                        <th>Excluir</th>
                                                                  </tr>
                                                            </thead>

                                                            <tbody>
                                                                  <?php if ($categorias) : foreach ($categorias as $categoria) : ?>
                                                                        <tr>
                                                                              <td>
                                                                                    <?php
                                                                                          if ($categoria['section'] == 'societario') {
                                                                                                echo "Societário";
                                                                                          } elseif ($categoria['section'] == 'contabilidade') {
                                                                                                echo "Contabilidade";
                                                                                          } elseif ($categoria['section'] == 'fiscal') {
                                                                                                echo "Fiscal";
                                                                                          } elseif ($categoria['section'] == 'pessoal') {
                                                                                                echo "Pessoal";
                                                                                          } elseif ($categoria['section'] == 'financeiro') {
                                                                                                echo "Financeiro - VBPA";
                                                                                          } elseif ($categoria['section'] == 'boleto') {
                                                                                                echo "2ª via de boleto";
                                                                                          }
                                                                                    ?>
                                                                              </td>
                                                                              <td><?php echo $categoria['name'];?></td>
                                                                              <td>
                                                                                    <a href="<?php echo base_url('admin/categoria/editar');?>/<?php echo $categoria['ID'];?>">Editar</a>
                                                                              </td>
                                                                              <td>
                                                                                     <a href="javascript:deletar(<?php echo $categoria['ID'];?>, '<?php echo base_url('admin/categoria/excluir');?>');">Excluir</a>
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