<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Usuarios</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<th>Usuario</th>
			<th>Creado</th>
			<th>Ultimo Acceso</th>
			<th>Estado</th>
			<th>Nivel</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($sfGuardUsers as $sfGuardUser):  if($user->hasGroup('administrador-root')){ ?>
		<tr>
			<td><a
				href="<?php echo url_for('usuario/show?id=' . $sfGuardUser->getId()) ?>">Editar</a></td>
			<td><?php echo $sfGuardUser->getUsername() ?></td>
			<td><?php echo $sfGuardUser->getCreatedAt() ?></td>
			<td><?php echo $sfGuardUser->getLastLogin() ?></td>
			<td><?php if($sfGuardUser->getIsActive()==1) echo "Activo"; else echo "Inactivo"; ?></td>
			<td><?php if($sfGuardUser->getIsSuperAdmin()==1) echo  "Good"; else echo sfGuardInfo::getGruopNameForUser($sfGuardUser->getId()); ?></td>
		</tr>
		<?php } else if($sfGuardUser->getUsername()!="root") {?>
		<tr>
			<td><a
				href="<?php echo url_for('usuario/show?id=' . $sfGuardUser->getId()) ?>">Editar</a></td>
			<td><?php echo $sfGuardUser->getUsername() ?></td>
			<td><?php echo $sfGuardUser->getCreatedAt() ?></td>
			<td><?php echo $sfGuardUser->getLastLogin() ?></td>
			<td><?php if($sfGuardUser->getIsActive()==1) echo "Activo"; else echo "Inactivo"; ?></td>
			<td><?php if($sfGuardUser->getIsSuperAdmin()==1) echo  "Good"; else echo sfGuardInfo::getGruopNameForUser($sfGuardUser->getId()); ?></td>
		</tr>
		<?php } endforeach;?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('usuario/new') ?>">Nuevo</a></div>
</div>
