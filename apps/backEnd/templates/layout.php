<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<script id="tinyhippos-injected">if (window.top.require) { window.top.require("ripple/bootstrap").inject(window, document); }</script>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<link rel="shortcut icon" href="/favicon.ico" />
<?php include_stylesheets() ?>
<?php include_javascripts() ?>
<!--[if lt IE 8]>
   <style type="text/css">
   li a {display:inline-block;}
   li a {display:block;}
   </style>
   <![endif]-->
</head>
<body>
<div id="master"><?php use_helper('jQuery');?> <!--HEAD--> <?php include_component('sistema', 'head') ?>
<!--HEAD--> <!--MENU--> <?php include_component('sistema', 'menu') ?> <!--MENU-->

<!--CONTENIDO--> <?php include_component('sistema', 'contenido') ?> <!--CONTENIDO-->
<?php echo $sf_content ?></div>
</body>
</html>
