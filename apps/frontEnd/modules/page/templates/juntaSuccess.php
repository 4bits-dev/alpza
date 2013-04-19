<?php use_helper('jQuery') ?>
<?php use_helper('I18N') ?>
<div
	id="master"><!--HEAD--> <?php include_component('home', 'head') ?> <!--HEAD-->
<!--MENU--> <?php include_component('home', 'menu') ?> <!--MENU--> <!--LOGIN-->
<?php include_component('home', 'login') ?> <!--LOGIN--> <!--BANNER--> <?php include_component('home', 'banner') ?>
<!--BANNER--> <!--FOOTER--> <?php include_component('home', 'footer') ?>
<!--FOOTER-->
<div id="contenedor">
<div id="title"><?php echo __('Junta Directiva')?></div>
<div id="texto"><?php include_component('page', 'tabla',array('contenido'=>$contenido))?>
</div>
</div>
</div>
