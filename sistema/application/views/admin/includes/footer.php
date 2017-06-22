7                  <footer class="main-footer">
                        <div class="pull-right hidden-xs">
                              <b>Versão</b> 1.0
                        </div>

                        <strong>Desenvolvido por <a href="http://www.grupoa2.com.br" target="_blank">Grupo A2</a>.</strong>
                  </footer>

                  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
                  <div class='control-sidebar-bg'></div>
            </div>
            <!-- ./wrapper -->

            <!-- jQuery 2.1.4 -->
            <script src="<?php echo base_url('assets/admin');?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>

            <!-- jQuery UI 1.11.2 -->
            <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>

            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                  $.widget.bridge('uibutton', $.ui.button);
            </script>

            <!-- Bootstrap 3.3.2 JS -->
            <script src="<?php echo base_url('assets/admin');?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

            <!-- data tables -->
            <script src="<?php echo base_url('assets/admin');?>/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url('assets/admin');?>/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

            <!-- Morris.js charts -->
            <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
            <script src="<?php echo base_url('assets/admin');?>/plugins/morris/morris.min.js" type="text/javascript"></script>

            <!-- Sparkline -->
            <script src="<?php echo base_url('assets/admin');?>/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>

            <!-- jvectormap -->
            <script src="<?php echo base_url('assets/admin');?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url('assets/admin');?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>

            <!-- jQuery Knob Chart -->
            <script src="<?php echo base_url('assets/admin');?>/plugins/knob/jquery.knob.js" type="text/javascript"></script>

            <!-- daterangepicker -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url('assets/admin');?>/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

            <!-- datepicker -->
            <script src="<?php echo base_url('assets/admin');?>/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>

            <!-- Bootstrap WYSIHTML5 -->
            <script src="<?php echo base_url('assets/admin');?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

            <!-- Slimscroll -->
            <script src="<?php echo base_url('assets/admin');?>/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>

            <!-- FastClick -->
            <script src='<?php echo base_url('assets/admin');?>/plugins/fastclick/fastclick.min.js'></script>

            <!-- AdminLTE App -->
            <script src="<?php echo base_url('assets/admin');?>/dist/js/app.min.js" type="text/javascript"></script>

            <!-- AdminLTE for demo purposes -->
            <script src="<?php echo base_url('assets/admin');?>/dist/js/demo.js" type="text/javascript"></script>

            <!-- page scripts -->
            <script>
                  function deletar(ID, url) {
                        if (confirm("Tem certeza que deseja excluir?")) {
                              location.href = url + "/" + ID;
                        }
                  }

                  $(document).ready(function(){
                        $('.select-first').change(function(){
                              var selected = $(this).val();

                              $('.show-after').load("<?php echo base_url('admin/categoria/section');?>", {selected: selected});

                              $('.show-after').removeClass('hidden');
                        });

                        // data table
                        $("#example1").dataTable();

                        // change image feature
                        $('.box-profile-picture-update a').click(function(){
                            $(this).parents('.box-profile-picture-update').html('<input type="file" name="userfile" class="form-control" />');

                            return false;
                        });

                        // datapicker
                        $('#datepicker').datepicker({
                              autoclose: true,
                              format: 'dd/mm/yyyy'
                        });
                  });
            </script>
      </body>
</html>
