<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Congresos</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<!--<th>Id alpza miembro</th>-->
			<th>Nombre</th>
			<th>Extracto</th>
			<th>Congreso</th>
			<th>Estado</th>
			<!--<th>Fecha ingreso</th>-->
			<th>Fecha de edición</th>
			<th>Fecha de publicación</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaCongresos as $AlpzaCongreso): ?>
		<tr>
			<td><a
				href="<?php echo url_for('alpzaCongreso/show?id_alpza_congreso=' . $AlpzaCongreso->getIdAlpzaCongreso()) ?>">Editar</a></td>
			<!--<td><?php echo $AlpzaCongreso->getIdAlpzaMiembro() ?></td>-->
			<td><?php echo $AlpzaCongreso->getNombre() ?></td>
			<td><?php echo $AlpzaCongreso->getExtracto() ?></td>
			<td><?php echo html_entity_decode($AlpzaCongreso->getCongreso()) ?></td>
			<td><?php if($AlpzaCongreso->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
			<!--<td><?php echo $AlpzaCongreso->getFechaIngreso() ?></td>-->
			<td><?php echo $AlpzaCongreso->getFechaEdicion() ?></td>
			<td><?php echo $AlpzaCongreso->getFechaPublicacion() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('alpzaCongreso/new') ?>">Nuevo</a>
</div>
</div>
