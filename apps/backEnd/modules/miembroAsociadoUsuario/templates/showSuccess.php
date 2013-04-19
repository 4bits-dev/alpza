<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<tr>
			<th>Usuario:</th>
			<td><?php echo $AlpzaMiembroAsignado->getIdSfGuardUser() ?></td>
		</tr>
		<tr>
			<th>Membrecía:</th>
			<td><?php echo $AlpzaMiembroAsignado->getIdAlpzaMiembro() ?></td>
		</tr>
		<!--<tr>
          <th>Id:</th>
          <td><?php echo $AlpzaMiembroAsignado->getId() ?></td>
        </tr>-->
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('miembroAsociadoUsuario/edit?id=' . $AlpzaMiembroAsignado->getId()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('miembroAsociadoUsuario/index') ?>">Listar</a>

</div>
</div>
