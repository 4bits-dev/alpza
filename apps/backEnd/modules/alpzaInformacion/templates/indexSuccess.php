<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Información de Alpza</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th>Editar</th>
			<th>Fecha edición</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaInformacions as $AlpzaInformacion): ?>
		<tr>
			<td><a
				href="<?php echo url_for('alpzaInformacion/show?id_alpza_informacion=' . $AlpzaInformacion->getIdAlpzaInformacion()) ?>">Editar</a></td>
			<td><?php echo $AlpzaInformacion->getFechaEdicion() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('alpzaInformacion/new') ?>">Nueva</a>

</div>
</div>
