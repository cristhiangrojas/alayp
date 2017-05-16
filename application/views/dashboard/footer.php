<footer class="main-footer">
    <strong>All rights reserved Copyright &copy; 2017</strong>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <div class="tab-content">
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<script>
  $(function () 
  {
    $("#example1").DataTable();
    $('#example2').DataTable({
        "paging": true,
     "lengthChange": false,
      "searching": false,
        "ordering": true,
        "info": true,
          "autoWidth": false
      });
  });

  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?php echo base_url(); ?>external/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>external/js/raphael-min.js"></script>

<script src="<?php echo base_url(); ?>external/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/knob/jquery.knob.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>external/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/clockpicker/bootstrap-clockpicker.min.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/clockpicker/highlight.min.js"></script>

<script src="<?php echo base_url(); ?>external/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>external/plugins/fastclick/fastclick.js"></script>

<script src="<?php echo base_url(); ?>external/js/app.min.js"></script>
<script src="<?php echo base_url(); ?>external/js/pages/dashboard.js"></script>
<script src="<?php echo base_url(); ?>external/js/demo.js"></script>
</body>
</html>