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
                                                      <form role="form" method="post" action="<?php echo base_url('admin/arquivo/post');?>" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                  <label>Cliente</label>

                                                                  <select name="client" class="form-control" required>
                                                                        <option value="">Selecione</option>
                                                                        <?php if (!empty($clientes)) : foreach ($clientes as $cliente) : ?>
                                                                              <option value="<?php echo $cliente['ID'];?>"><?php echo $cliente['name'];?></option>
                                                                        <?php endforeach; endif; ?>
                                                                  </select>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                  <label>Seção</label>

                                                                  <select name="section" class="form-control select-first" required>
                                                                        <option value="">Selecione</option>
                                                                        <option value="societario">Societário</option>
                                                                        <option value="contabilidade">Contabilidade</option>
                                                                        <option value="fiscal">Fiscal</option>
                                                                        <option value="pessoal">Pessoal</option>
                                                                        <option value="financeiro">Financeiro - VBPA</option>
                                                                        <option value="boleto">2ª via de boleto</option>
                                                                  </select>
                                                            </div>
                                                            
                                                            <div class="form-group hidden show-after">
                                                                  
                                                            </div>
                                                      
                                                            <div class="form-group">
                                                                  <label>Nome</label>

                                                                  <input type="text" name="name" class="form-control" required />
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                  <label for="exampleInputFile">Arquivo</label>

                                                                  <input id="exampleInputFile" name="userfile" type="file">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                  <label>Data</label>

                                                                  <input type="text" name="date" class="form-control" id="datepicker" required style="max-width: 190px;" />
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