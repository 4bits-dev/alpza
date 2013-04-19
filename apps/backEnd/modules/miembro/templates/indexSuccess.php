<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Miembros</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<!--<th>Id alpza miembro tipo</th>-->
			<th>Nombre</th>
			<th>Estado</th>
			<!--<th>Fecha ingreso</th>-->
			<th>Fecha edición</th>
			<th>Fecha publicación</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaMiembros as $AlpzaMiembro): ?>
		<tr>
			<td><a
				href="<?php echo url_for('miembro/show?id_alpza_miembro=' . $AlpzaMiembro->getIdAlpzaMiembro()) ?>">Editar</a></td>
			<!--<td><?php echo $AlpzaMiembro->getIdAlpzaMiembroTipo() ?></td>-->
			<td><?php echo $AlpzaMiembro->getNombre() ?></td>
			<td><?php if ($AlpzaMiembro->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
			<!--<td><?php echo $AlpzaMiembro->getFechaIngreso() ?></td>-->
			<td><?php echo $AlpzaMiembro->getFechaEdicion() ?></td>
			<td><?php echo $AlpzaMiembro->getFechaPublicacion() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('miembro/new') ?>">Nuevo</a></div>
</div>
