<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Asignaciones</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th>Usuario</th>
			<th>Grupo</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($sfGuardUserGroups as $sfGuardUserGroup): ?>
		<tr>
			<td><a
				href="<?php echo url_for('usuarioAsociadoGrupo/show?user_id=' . $sfGuardUserGroup->getUserId() . '&group_id=' . $sfGuardUserGroup->getGroupId()) ?>"><?php echo sfGuardInfo::getUserName($sfGuardUserGroup->getUserId()) ?></a></td>
			<td><a
				href="<?php echo url_for('usuarioAsociadoGrupo/show?user_id=' . $sfGuardUserGroup->getUserId() . '&group_id=' . $sfGuardUserGroup->getGroupId()) ?>"><?php echo sfGuardInfo::getGruopName($sfGuardUserGroup->getGroupId()) ?></a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('usuarioAsociadoGrupo/new') ?>">Nuevo</a>
</div>
</div>
