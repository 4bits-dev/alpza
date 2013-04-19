<?php use_helper('jQuery');?>
<div id="wrapper">
<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider"><?php

if(count($slide)>0){
	foreach($slide as $indes=>$data){
		if($data['url'] != NULL){
			echo link_to(image_tag("../uploads/banners/".$data['imagen'],array("alt"=>"","data-transition"=>"")), $data['url'],array('target' => '_blank'));
		}else{
			echo image_tag("../uploads/banners/".$data['imagen'],array("alt"=>"","data-transition"=>""));
		}
	}
}

?></div>
<div id="htmlcaption" class="nivo-html-caption"><strong></strong><em></em><a
	href="#">a link</a>.</div>
</div>
</div>
