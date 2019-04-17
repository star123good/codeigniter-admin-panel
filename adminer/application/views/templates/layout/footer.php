<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="<?=base_url("template/app-assets/js/vendors.min.js")?>" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?=base_url("template/app-assets/js/plugins.js")?>" type="text/javascript"></script>
    <script src="<?=base_url("template/app-assets/js/custom/custom-script.js")?>" type="text/javascript"></script>
    <script src="<?=base_url("template/app-assets/js/scripts/screen-ajax.js")?>" type="text/javascript"></script>
    <!-- END THEME  JS-->
	<!-- BEGIN PAGE LEVEL JS-->

	<?php
		for($i = 0; $i < count($js_array); $i++){
			echo '<script src="'.base_url("template/app-assets/").$js_array[$i].'" type="text/javascript"></script>';
		}
	?>

    <!-- END PAGE LEVEL JS-->
  </body>
</html>