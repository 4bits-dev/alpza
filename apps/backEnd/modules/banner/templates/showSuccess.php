<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id alpza banner:</th>
          <td><?php echo $AlpzaBanner->getIdAlpzaBanner() ?></td>
        </tr>-->
		<tr>
			<th>Tipo de Banner:</th>
			<td><?php echo page::getBannerNombreTipo($AlpzaBanner->getIdAlpzaBannerTipo());?></td>
		</tr>
		<!--<tr>
          <th>Path contenido:</th>
          <td><?php echo $AlpzaBanner->getPathContenido() ?></td>
        </tr>-->
		<tr>
			<th>Nombre:</th>
			<td><?php echo $AlpzaBanner->getNombre() ?></td>
		</tr>
		<tr>
			<th>Fecha ingreso:</th>
			<td><?php echo $AlpzaBanner->getFechaIngreso() ?></td>
		</tr>
		<tr>
			<th>Fecha edicion:</th>
			<td><?php echo $AlpzaBanner->getFechaEdicion() ?></td>
		</tr>
		<tr>
			<th>Estado:</th>
			<td><?php if($AlpzaBanner->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
		</tr>
		<!--<tr>
          <th>Url tracking:</th>
          <td><?php echo $AlpzaBanner->getUrlTracking() ?></td>
        </tr>-->
		<tr>
			<th>Url destino:</th>
			<td><?php echo $AlpzaBanner->getUrlDestino() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('banner/edit?id_alpza_banner=' . $AlpzaBanner->getIdAlpzaBanner()) ?>">Editar</a>
&nbsp; <a class="btn" href="<?php echo url_for('banner/index') ?>">Listar</a>
</div>
</div>
