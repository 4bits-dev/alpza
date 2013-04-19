<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Grupos</h1>
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
	<?php foreach ($sfGuardGroups as $sfGuardGroup): ?>
		<tr>
			<td><a
				href="<?php echo url_for('usuarioGrupos/show?id='.$sfGuardGroup->getId()) ?>"><?php echo $sfGuardGroup->getId() ?></a></td>
			<td><?php echo $sfGuardGroup->getName() ?></td>
			<td><?php echo $sfGuardGroup->getDescription() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('usuarioGrupos/new') ?>">Nuevo</a>
</div>
</div>
