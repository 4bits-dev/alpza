<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<!--<tr>
          <th>Id alpza miembro coleccion:</th>
          <td><?php echo $AlpzaMiembroColeccion->getIdAlpzaMiembroColeccion() ?></td>
        </tr>
        <tr>
          <th>Id alpza miembro:</th>
          <td><?php echo $AlpzaMiembroColeccion->getIdAlpzaMiembro() ?></td>
        </tr>-->
		<tr>
			<th>Número de especies:</th>
			<td><?php echo $AlpzaMiembroColeccion->getNumeroEspecies() ?></td>
		</tr>
		<tr>
			<th>Porcentaje de especies nativas:</th>
			<td><?php echo $AlpzaMiembroColeccion->getPorcentajeEspeciesNativas() ?></td>
		</tr>
		<tr>
			<th>Especies amenazadas IUCN:</th>
			<td><?php echo $AlpzaMiembroColeccion->getEspeciesAmenazadasIucn() ?></td>
		</tr>
		<tr>
			<th>Número de ejemplares:</th>
			<td><?php echo $AlpzaMiembroColeccion->getNumeroEjemplares() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('miembroInformacionColeccion/edit?id_alpza_miembro_coleccion=' . $AlpzaMiembroColeccion->getIdAlpzaMiembroColeccion()) ?>">Editar</a>
&nbsp; <a class="btn"
	href="<?php echo url_for('miembroInformacionColeccion/index') ?>">Listar</a>
</div>
</div>
