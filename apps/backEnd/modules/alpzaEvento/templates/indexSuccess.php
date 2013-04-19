<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Eventos</h1>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<!--<th>Alpza miembro id alpza miembro</th>-->
			<th>Nombre</th>
			<th>Estado</th>
			<th>Fecha edición</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaEventos as $AlpzaEvento): ?>
		<tr>
			<td><a
				href="<?php echo url_for('alpzaEvento/show?id_alpza_evento=' . $AlpzaEvento->getIdAlpzaEvento()) ?>">Editar</a></td>
			<!--<td><?php echo $AlpzaEvento->getAlpzaMiembroIdAlpzaMiembro() ?></td>-->
			<td><?php echo $AlpzaEvento->getNombre() ?></td>
			<td><?php if($AlpzaEvento->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
			<td><?php echo $AlpzaEvento->getFechaEdicion() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('alpzaEvento/new') ?>">Nuevo</a>
</div>
</div>
