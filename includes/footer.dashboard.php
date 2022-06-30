<!-- Jquery Core Js -->
<script src="<?=base_url('assets/plugins/jquery/jquery.min.js');?>"></script>

<!-- Bootstrap Core Js -->
<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.js');?>"></script>

<!-- Moment Plugin Js -->
<script src="<?=base_url('assets/plugins/momentjs/moment.js');?>"></script>

<!-- Select Plugin Js -->
<script src="<?=base_url('assets/plugins/bootstrap-select/js/bootstrap-select.js');?>"></script>

<!-- Slimscroll Plugin Js -->
<script src="<?=base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js');?>"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?=base_url('assets/plugins/node-waves/waves.js');?>"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?=base_url('assets/plugins/jquery-countto/jquery.countTo.js');?>"></script>

<!-- Morris Plugin Js -->
<script src="<?=base_url('assets/plugins/raphael/raphael.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/morrisjs/morris.js');?>"></script>

<!-- ChartJs -->
<script src="<?=base_url('assets/plugins/chartjs/Chart.bundle.js');?>"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="<?=base_url('assets/plugins/jquery-datatable/jquery.dataTables.js');?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js');?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/jszip.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js');?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js');?>"></script>
<script src="<?=base_url('assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js');?>"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="<?=base_url('assets/plugins/jquery-sparkline/jquery.sparkline.js');?>"></script>

<!-- Select Plugin Js -->
<script src="<?=base_url('assets/plugins/bootstrap-select/js/bootstrap-select.js');?>"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="<?=base_url('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js');?>"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="<?=base_url('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js');?>"></script>

<!-- SweetAlert Plugin Js -->
<script src="<?=base_url('assets/plugins/sweetalert/sweetalert.min.js');?>"></script>

<!-- Custom Js -->
<script src="<?=base_url('assets/js/admin.js');?>"></script>
<?php if(!empty(@$custom_js)){ ?>
    <script src="<?=base_url('assets').'/'.$custom_js;?>"></script>
<?php } ?>

<!-- Demo Js -->
<script src="<?=base_url('assets/js/demo.js');?>"></script>
</body>

</html>