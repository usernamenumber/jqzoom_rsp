<?php 
function HookJqzoom_rspAllAdditionalheaderjs(){
  	global $baseurl;
?>
	<script 
		type="text/javascript" 
		src="<?php echo $baseurl?>/plugins/jqzoom_rsp/lib/jqzoom/js/jquery.jqzoom-core.js">
	</script>
	<link 
		rel="stylesheet" 
		type="text/css" 
		href="<?php echo $baseurl?>/plugins/jqzoom_rsp/lib/jqzoom/css/jquery.jqzoom.css"
	/>  
<?php 
} 
