<?php $this->load->view('admin/includes/header.php');?>

                  <!-- Content Wrapper. Contains page content -->
                  <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                              <h1>
                                    Arquivos
                              </h1>

                              <ol class="breadcrumb">
                                    <li>
                                          <a href="<?php echo base_url('admin');?>">
                                                <i class="fa fa-dashboard"></i> Home
                                          </a>
                                    </li>

                                    <li class="active">Arquivos</li>
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
                                                                        <th>Arquivo</th>
                                                                        <th>Cliente</th>
                                                                        <th>Seção</th>
                                                                        <th>Categoria</th>
                                                                        <th>Data</th>
                                                                        <th>Editar</th>
                                                                        <th>Excluir</th>
                                                                  </tr>
                                                            </thead>

                                                            <tbody>
                                                                  <?php if (!empty($arquivos)) : foreach ($arquivos as $arquivo) : ?>
                                                                        <tr>
                                                                              <td><?php echo $arquivo['name'];?></td>
                                                                              <td><?php $cliente = $this->Cliente_Model->get(NULL, NULL, $arquivo['client']); echo $cliente[0]['name'];?></td>
                                                                              <td>
                                                                                    <?php
                                                                                          if ($arquivo['section'] == 'societario') {
                                                                                                echo "Societário";
                                                                                          } elseif ($arquivo['section'] == 'contabilidade') {
                                                                                                echo "Contabilidade";
                                                                                          } elseif ($arquivo['section'] == 'fiscal') {
                                                                                                echo "Fiscal";
                                                                                          } elseif ($arquivo['section'] == 'pessoal') {
                                                                                                echo "Pessoal";
                                                                                          } elseif ($arquivo['section'] == 'financeiro') {
                                                                                                echo "Financeiro - VBPA";
                                                                                          } elseif ($arquivo['section'] == 'boleto') {
                                                                                                echo "2ª via de boleto";
                                                                                          }
                                                                                    ?>
                                                                              </td>
                                                                              <td><?php $categoria = $this->Categoria_Model->get($arquivo['category']); echo $categoria[0]['name'];?></td>
                                                                              <td>
                                                                                  <?php
                                                                                    $date = new DateTime($arquivo['date']);
                                                                                    echo $date->format('d-m-Y');
                                                                                  ?>
                                                                              </td>
                                                                              <td>
                                                                                    <a href="<?php echo base_url('admin/arquivo/editar');?>/<?php echo $arquivo['ID'];?>">Editar</a>
                                                                              </td>
                                                                              <td>
                                                                                     <a href="javascript:deletar(<?php echo $arquivo['ID'];?>, '<?php echo base_url('admin/arquivo/excluir');?>');">Excluir</a>
                                                                              </td>
                                                                        </tr>
                                                                  <?php endforeach; endif; ?>
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
