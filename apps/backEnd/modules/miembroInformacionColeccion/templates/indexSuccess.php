<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Colección</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<!--<th>Id alpza miembro</th>-->
			<th>Número de especies</th>
			<th>Porcentaje de especies nativas</th>
			<th>Especies amenazadas IUCN</th>
			<th>Número de ejemplares</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaMiembroColeccions as $AlpzaMiembroColeccion): ?>
		<tr>
			<td><a
				href="<?php echo url_for('miembroInformacionColeccion/show?id_alpza_miembro_coleccion='.$AlpzaMiembroColeccion->getIdAlpzaMiembroColeccion()) ?>">Editar</a></td>
			<!--<td><?php echo $AlpzaMiembroColeccion->getIdAlpzaMiembro() ?></td>-->
			<td><?php echo $AlpzaMiembroColeccion->getNumeroEspecies() ?></td>
			<td><?php echo $AlpzaMiembroColeccion->getPorcentajeEspeciesNativas() ?></td>
			<td><?php echo $AlpzaMiembroColeccion->getEspeciesAmenazadasIucn() ?></td>
			<td><?php echo $AlpzaMiembroColeccion->getNumeroEjemplares() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn"
	href="<?php echo url_for('miembroInformacionColeccion/new') ?>">Nueva</a>

</div>
</div>
