<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<tr>
			<th>Id:</th>
			<td><?php echo $sfGuardPermission->getId() ?></td>
		</tr>
		<tr>
			<th>Name:</th>
			<td><?php echo $sfGuardPermission->getName() ?></td>
		</tr>
		<tr>
			<th>Description:</th>
			<td><?php echo $sfGuardPermission->getDescription() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('usuarioPermisos/edit?id=' . $sfGuardPermission->getId()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('usuarioPermisos/index') ?>">Listar</a></div>
</div>
