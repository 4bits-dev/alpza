<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<tr>
			<th>Usuario:</th>
			<td><?php echo sfGuardinfo::getUserName($sfGuardUserGroup->getUserId()) ?></td>
		</tr>
		<tr>
			<th>Grupo:</th>
			<td><?php echo sfGuardinfo::getGruopName($sfGuardUserGroup->getGroupId()) ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('usuarioAsociadoGrupo/edit?user_id=' . $sfGuardUserGroup->getUserId() . '&group_id=' . $sfGuardUserGroup->getGroupId()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('usuarioAsociadoGrupo/index') ?>">Listar</a></div>
</div>
