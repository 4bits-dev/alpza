<?php use_helper('jQuery') ?>
<?php use_helper('I18N') ?>
<div
	id="master">
	<!--HEAD-->
	<?php include_component('home', 'head') ?>
	<!--HEAD-->
	<!--MENU-->
	<?php include_component('home', 'menu') ?>
	<!--MENU-->
	<!--LOGIN-->
	<?php include_component('home', 'login') ?>
	<!--LOGIN-->
	<!--BANNER-->
	<?php include_component('home', 'banner') ?>
	<!--BANNER-->
	<!--FOOTER-->
	<?php include_component('home', 'footer') //prod?>
	<!--FOOTER-->
	<div id="contenedor">
	<?php include_component('page', 'contenido',array('contenido'=>$contenido))?>
		<ul>
			<a href="../uploads/archivos/CODIGO DE ETICA ALPZA.pdf" target="_blank">CÓDIGO DE ÉTICA ALPZA</a>
		</ul>
		<ul>
			<a href="../uploads/archivos/ESTATUTOS ALPZA.pdf" target="_blank">ESTATUTOS ALPZA</a>
		</ul>
	</div>

</div>
