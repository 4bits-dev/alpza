<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Becas</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<th>Nombre</th>
			<th>Estado</th>
			<th>Fecha edición</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaBecas as $AlpzaBeca): ?>
		<tr>
			<td><a
				href="<?php echo url_for('alpzaBeca/show?id_alpza_beca=' . $AlpzaBeca->getIdAlpzaBeca()) ?>">Editar</a></td>
			<td><?php echo $AlpzaBeca->getNombre() ?></td>
			<td><?php if ($AlpzaBeca->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
			<td><?php echo $AlpzaBeca->getFechaEdicion() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('alpzaBeca/new') ?>">Nueva</a></div>
</div>
