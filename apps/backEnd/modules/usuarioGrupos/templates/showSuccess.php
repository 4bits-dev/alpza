<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<tr>
			<th>Id:</th>
			<td><?php echo $sfGuardGroup->getId() ?></td>
		</tr>
		<tr>
			<th>Name:</th>
			<td><?php echo $sfGuardGroup->getName() ?></td>
		</tr>
		<tr>
			<th>Description:</th>
			<td><?php echo $sfGuardGroup->getDescription() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('usuarioGrupos/edit?id=' . $sfGuardGroup->getId()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('usuarioGrupos/index') ?>">Listar</a></div>
</div>
