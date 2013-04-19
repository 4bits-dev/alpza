<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Permisos</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($sfGuardPermissions as $sfGuardPermission): ?>
		<tr>
			<td><a
				href="<?php echo url_for('usuarioPermisos/show?id=' . $sfGuardPermission->getId()) ?>"><?php echo $sfGuardPermission->getId() ?></a></td>
			<td><?php echo $sfGuardPermission->getName() ?></td>
			<td><?php echo $sfGuardPermission->getDescription() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('usuarioPermisos/new') ?>">Nuevo</a>

</div>
</div>
