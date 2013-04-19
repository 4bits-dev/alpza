<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">

<h1>Listado de Banners</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<th>Tipo de Banner</th>
			<th>Nombre de Imagen</th>
			<th>Fecha ingreso</th>
			<th>Fecha edicion</th>
			<th>Estado</th>
			<!--<th>Url tracking</th>-->
			<th>Url destino</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaBanners as $AlpzaBanner): ?>
		<tr>
			<td><a
				href="<?php echo url_for('banner/show?id_alpza_banner=' . $AlpzaBanner->getIdAlpzaBanner()) ?>">Editar</a></td>
			<td><?php echo page::getBannerNombreTipo($AlpzaBanner->getIdAlpzaBannerTipo());?></td>
			<!--<td><?php echo $AlpzaBanner->getPathContenido() ?></td>-->
			<td><?php echo $AlpzaBanner->getNombre() ?></td>
			<td><?php echo $AlpzaBanner->getFechaIngreso() ?></td>
			<td><?php echo $AlpzaBanner->getFechaEdicion() ?></td>
			<td><?php if($AlpzaBanner->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
			<!--<td><?php echo $AlpzaBanner->getUrlTracking() ?></td>-->
			<td><?php echo $AlpzaBanner->getUrlDestino() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('banner/new') ?>">Nuevo</a></div>
</div>
