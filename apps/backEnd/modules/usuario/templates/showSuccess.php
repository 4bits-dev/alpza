<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<tr>
			<th>Usuario:</th>
			<td><?php echo $sfGuardUser->getUsername() ?></td>
		</tr>
		<tr>
			<th>Creado:</th>
			<td><?php echo $sfGuardUser->getCreatedAt() ?></td>
		</tr>
		<tr>
			<th>Ultimo Acceso:</th>
			<td><?php echo $sfGuardUser->getLastLogin() ?></td>
		</tr>
		<tr>
			<th>Estado :</th>
			<td><?php if($sfGuardUser->getIsActive()==1) echo "Activo"; else echo "Inactivo"; ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('usuario/edit?id=' . $sfGuardUser->getId()) ?>">Editar</a>
&nbsp; <a class="btn" href="<?php echo url_for('usuario/index') ?>">Listar</a>

</div>
</div>
