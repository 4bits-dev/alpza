<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Asignaciones</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<th>Usuario</th>
			<th>Membrecía</th>

		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaMiembroAsignados as $AlpzaMiembroAsignado): ?>
		<tr>
			<td><a
				href="<?php echo url_for('miembroAsociadoUsuario/show?id=' . $AlpzaMiembroAsignado->getId()) ?>">Editar</a></td>
			<td><?php echo sfGuardInfo::getUserName($AlpzaMiembroAsignado->getIdSfGuardUser()) ?></td>
			<td><?php echo alpzaMiembroInfo::getMiembroName($AlpzaMiembroAsignado->getIdAlpzaMiembro()) ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn"
	href="<?php echo url_for('miembroAsociadoUsuario/new') ?>">Nueva</a></div>
</div>
