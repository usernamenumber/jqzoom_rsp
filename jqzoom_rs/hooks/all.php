<?php 
function HookJQZoomAllAdditionalheaderjs(){
  	global $baseurl;
?>
	<script 
		type="text/javascript" 
		src="<?php echo $baseurl?>/plugins/jqzoom/lib/jqzoom/js/jquery.jqzoom-core.js">
	</script>
	<link 
		rel="stylesheet" 
		type="text/css" 
		href="<?php echo $baseurl?>/plugins/jqzoom/lib/jqzoom/css/jquery.jqzoom.css"
	/> 
	<script type="text/javascript">
		jQuery(document).ready(function() { jQuery('.jqzoom').jqzoom(); });
	</script>
<?php 
} 
