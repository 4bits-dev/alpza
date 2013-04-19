<?php use_helper('jQuery') ?>
<?php use_helper('I18N') ?>
<div
	id="master"><!--HEAD--> <?php include_component('home', 'head') ?> <!--HEAD-->
<!--MENU--> <?php include_component('home', 'menu') ?> <!--MENU--> <!--LOGIN-->
<?php include_component('home', 'login') ?> <!--LOGIN--> <!--BANNER--> <?php include_component('home', 'banner') ?>
<!--BANNER--> <!--FOOTER--> <?php include_component('home', 'footer') ?>
<!--FOOTER--> <iframe style="border: 0px; z-index: -200;" id="img"
	src="slider/central"></iframe></div>
