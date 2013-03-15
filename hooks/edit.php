<?php
function HookJqzoom_rspEditReplaceeditpreviewimage() {
	global $baseurl,$plugins,$lang,$search,$offset,$archive,$order_by,$sort,$plugins,$download_multisize,$k,$access,$ref,$resource,$watermark;
	
	// watermark check
	$access=get_resource_access($ref);
	$use_watermark=check_use_watermark($ref);
	
	// paths
	#$imageurl=get_resource_path($ref,false,"pre",false,$resource["preview_extension"],-1,1,$use_watermark);
	$imageurl = get_resource_path($ref,false,"thm",false,$resource["preview_extension"],-1,1,checkperm("w"));
	
	$page_sizes = array("scr");
	foreach ($page_sizes as $page_size){
	  $largeurl=get_resource_path($ref,false,$page_size,false,"jpg",-1,1,$use_watermark);
	  $largeurl_path=get_resource_path($ref,true,$page_size,false,"jpg",-1,1,$use_watermark);
  
	  if (file_exists($largeurl_path)){break;}

	}
	
	if (!file_exists($largeurl_path)) {
		define("MTFAIL",true);
		return false; # Requires an original large JPEG file.
	} 
	
	#print "<pre>RES\n"; print_r($resource); print "</pre>";
?>
<div>
<a href="<?php echo $largeurl?>" class="jqzoom" title="IMAGE ZOOM">
	<img src="<?php echo $imageurl?>" onload="jQuery(document).ready(function() { jQuery('.jqzoom').jqzoom(); });">
</a>
</div>

<?php	
	return true;
}
?>
