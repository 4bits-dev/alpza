<div class="span3">
<div class="well sidebar-nav">
<ul class="nav nav-list">

<?php if($user->hasGroup('administrador-root') || $user->hasGroup('administrador')){?>
	<li class="nav-header">Gestión de Vista</li>
	<?php if($user->hasGroup('administrador-root')){?>
	<li onclick="selec(this)"><?php echo link_to("Tipo de Banner","@backend_banners_tipo");?></li>
	<?php } ?>
	<li onclick="selec(this)"><?php echo link_to("Banners","@backend_banners");?></li>
	<?php }?>

	<?php if($user->hasGroup('administrador-root') || $user->hasGroup('administrador')){?>
	<li class="nav-header">Gestión de Usuarios</li>
	<li><?php echo link_to("Usuarios","@backend_usuarios");?></li>
	<li><?php echo link_to("Perfíl de Usuarios","@backend_usuarios_perfil");?></li>
	<li><?php echo link_to("Grupos","@backend_usuarios_grupos");?></li>
	<li><?php echo link_to("Permisos","@backend_usuarios_permisos");?></li>
	<li><?php echo link_to("Asociar Usuario a Grupo","@backend_usuarios_asociado_grupo");?></li>
	<?php }?>

	<?php if($user->hasGroup('administrador-root') || $user->hasGroup('administrador') || $user->hasGroup('miembro')){?>
	<li class="nav-header">Gestión de Miembros</li>
	<li><?php echo link_to("Asociar Usuario a Miembro","@backend_miembro_asociado_usuario")?></li>
	<li><?php echo link_to("Miembros","@backend_miembro")?></li>
	<li><?php echo link_to("Instituciones y Asociados","@backend_miembro_asociados")?></li>
	<li><?php echo link_to("Profesionales","@backend_miembro_profesional")?></li>
	<li><?php echo link_to("Asociaciones Nacionales","@backend_miembro_nacionales")?></li>
	<li><?php echo link_to("Asociaciones Regionales y Globales","@backend_miembro_regionales")?></li>
	<li><?php echo link_to("Colecciónes","@backend_miembro_informacion_coleccion")?></li>
	<li><?php echo link_to("Información Financiera","@backend_miembro_informacion_financiera")?></li>
	<?php }?>

	<?php if($user->hasGroup('administrador-root') || $user->hasGroup('administrador')){?>
	<li class="nav-header">Gestión de Alpza</li>
	<li><?php echo link_to("Información de Alpza","@backend_alpza_informacion")?></li>
	<li><?php echo link_to("Congreso","@backend_alpza_congreso")?></li>
	<li><?php echo link_to("Junta de Alpza","@backend_alpza_junta")?></li>
	<li><?php echo link_to("Comités de Alpza","@backend_alpza_comite")?></li>
	<?php }?>

	<?php if($user->hasGroup('administrador-root') || $user->hasGroup('administrador') || $user->hasGroup('miembro') || $user->hasGroup('usuario')){?>
	<li class="nav-header">Gestión de Contenidos</li>
	<li><?php echo link_to("Noticias","@backend_alpza_noticia")?></li>
	<li><?php echo link_to("Eventos","@backend_alpza_evento")?></li>
	<li><?php echo link_to("Becas","@backend_alpza_beca")?></li>
	<li><?php echo link_to("Publicaciones","@backend_alpza_publicacion")?></li>
	<?php }?>

</ul>
</div>
<!--/.well --></div>
<!--/span-->
