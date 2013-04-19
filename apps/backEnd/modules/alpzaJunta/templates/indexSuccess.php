<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Junta de Alpza</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<!--<th>Id alpza miembro</th>
      <th>Nombre</th>-->
			<th>Presidente</th>
			<th>Vicepresidente</th>
			<th>Secretario</th>
			<th>Tesorero</th>
			<th>Fiscal</th>
			<th>Director ejecutivo</th>
			<!--<th>Estado</th>
      <th>Fecha ingreso</th>-->
			<th>Fecha edición</th>
			<!--<th>Fecha publicacion</th>-->
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaJuntas as $AlpzaJunta): ?>
		<tr>
			<td><a
				href="<?php echo url_for('alpzaJunta/show?id_alpza_junta='.$AlpzaJunta->getIdAlpzaJunta()) ?>">Editar</a></td>
			<!--<td><?php echo $AlpzaJunta->getIdAlpzaMiembro() ?></td>-->
			<!--<td><?php echo $AlpzaJunta->getNombre() ?></td>-->
			<td><?php echo $AlpzaJunta->getPresidente() ?></td>
			<td><?php echo $AlpzaJunta->getVicepresidente() ?></td>
			<td><?php echo $AlpzaJunta->getSecretario() ?></td>
			<td><?php echo $AlpzaJunta->getTesorero() ?></td>
			<td><?php echo $AlpzaJunta->getFiscal() ?></td>
			<td><?php echo $AlpzaJunta->getDirectorEjecutivo() ?></td>
			<!--<td><?php echo $AlpzaJunta->getEstado() ?></td>
      <td><?php echo $AlpzaJunta->getFechaIngreso() ?></td>-->
			<td><?php echo $AlpzaJunta->getFechaEdicion() ?></td>
			<!--<td><?php echo $AlpzaJunta->getFechaPublicacion() ?></td>-->
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('alpzaJunta/new') ?>">Nueva</a>

</div>
</div>
