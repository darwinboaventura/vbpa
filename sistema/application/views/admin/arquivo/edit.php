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

                                    <li>
                                          <a href="<?php echo base_url('admin/arquivo');?>">
                                                <i class="fa fa-area-chart"></i> Arquivos
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
                                                      <form role="form" method="post" action="<?php echo base_url('admin/arquivo/put');?>" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                  <label>Cliente</label>

                                                                  <select name="client" class="form-control" required>
                                                                        <option value="">Selecione</option>
                                                                        <?php if (!empty($clientes)) : foreach ($clientes as $cliente) : ?>
                                                                              <option value="<?php echo $cliente['ID'];?>" <?php if ($cliente['ID'] == $arquivo[0]['client']): echo "selected"; endif;?>><?php echo $cliente['name'];?></option>
                                                                        <?php endforeach; endif; ?>
                                                                  </select>
                                                            </div>

                                                            <div class="form-group">
                                                                  <label>Seção</label>

                                                                  <select name="section" class="form-control select-first" required>
                                                                        <option value="">Selecione</option>
                                                                        <option value="societario" <?php if ($arquivo[0]['section'] == 'societario') : echo "selected"; endif;?>>Societário</option>
                                                                        <option value="contabilidade" <?php if ($arquivo[0]['section'] == 'contabilidade') : echo "selected"; endif;?>>Contabilidade</option>
                                                                        <option value="fiscal" <?php if ($arquivo[0]['section'] == 'fiscal') : echo "selected"; endif;?>>Fiscal</option>
                                                                        <option value="pessoal" <?php if ($arquivo[0]['section'] == 'pessoal') : echo "selected"; endif;?>>Pessoal</option>
                                                                        <option value="financeiro" <?php if ($arquivo[0]['section'] == 'financeiro') : echo "selected"; endif;?>>Financeiro - VBPA</option>
                                                                        <option value="boleto" <?php if ($arquivo[0]['section'] == 'boleto') : echo "selected"; endif;?>>2ª via de boleto</option>
                                                                  </select>
                                                            </div>

                                                            <div class="form-group show-after">
                                                                  <label>Categoria</label>

                                                                  <select name="category" class="form-control" required>
                                                                        <option value="">Selecione</option>
                                                                        <?php if (!empty($categorias)) : foreach ($categorias as $categoria) :?>
                                                                              <option value="<?php echo $categoria['ID'];?>" <?php if ($arquivo[0]['category'] == $arquivo[0]['category']) : echo "selected"; endif;?>><?php echo $categoria['name'];?></option>
                                                                        <?php endforeach; endif;?>
                                                                  </select>
                                                            </div>

                                                            <div class="form-group">
                                                                  <label>Nome</label>

                                                                  <input type="text" name="name" value="<?php echo $arquivo[0]['name'];?>" class="form-control" required />
                                                            </div>

                                                            <div class="form-group">
                                                                  <label for="exampleInputFile">Arquivo</label>

                                                                  <input id="exampleInputFile" name="userfile" type="file">
                                                            </div>

                                                            <div class="form-group">
                                                                  <label>Data</label>

                                                                  <input type="text" name="date" class="form-control" id="datepicker" value="<?php $data = explode('-', $arquivo[0]['date']); echo $data[2] . "/" . $data[1] . "/" . $data[0]; ?>" required style="max-width: 190px;" />
                                                            </div>

                                                            <div class="box-footer">
                                                                  <input type="hidden" name="ID" value="<?php echo $arquivo[0]['ID'];?>">

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
