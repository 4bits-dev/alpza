<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Publicaciones</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<!--<th>Alpza miembro id alpza miembro</th>-->
			<th>Tipo de Publicación</th>
			<th>Nombre</th>
			<th>Estado</th>
			<th>Fecha edición</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaPublicacions as $AlpzaPublicacion): ?>
		<tr>
			<td><a
				href="<?php echo url_for('alpzaPublicacion/show?id_alpza_publicacion=' . $AlpzaPublicacion->getIdAlpzaPublicacion()) ?>">Editar</a></td>
			<!--<td><?php echo $AlpzaPublicacion->getAlpzaMiembroIdAlpzaMiembro() ?></td>-->
			<td><?php echo $AlpzaPublicacion->getIdAlpzaPublicacionTipo() ?></td>
			<td><?php echo $AlpzaPublicacion->getNombre() ?></td>
			<td><?php if ($AlpzaPublicacion->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
			<td><?php echo $AlpzaPublicacion->getFechaEdicion() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('alpzaPublicacion/new') ?>">Nueva</a>
</div>
</div>
