<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Comités de Alpza</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<!--<th>Id alpza miembro</th>-->
			<th>Nombre</th>
			<th>Fecha edición</th>
			<!--<th>Fecha publicacion</th>-->
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaComites as $AlpzaComite): ?>
		<tr>
			<td><a
				href="<?php echo url_for('alpzaComite/show?id_alpza_comite='.$AlpzaComite->getIdAlpzaComite()) ?>">Editar</a></td>
			<!--<td><?php echo $AlpzaComite->getIdAlpzaMiembro() ?></td>-->
			<td><?php echo $AlpzaComite->getNombre() ?></td>
			<td><?php echo $AlpzaComite->getFechaEdicion() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('alpzaComite/new') ?>">Nuevo</a>
</div>
</div>
