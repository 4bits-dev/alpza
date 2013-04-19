<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">

<h1>Lista de Tipos de Banners</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th>Id alpza banner tipo</th>
			<th>Nombre</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaBannerTipos as $AlpzaBannerTipo): ?>
		<tr>
			<td><a
				href="<?php echo url_for('bannerTipo/show?id_alpza_banner_tipo='.$AlpzaBannerTipo->getIdAlpzaBannerTipo()) ?>"><?php echo $AlpzaBannerTipo->getIdAlpzaBannerTipo() ?></a></td>
			<td><?php echo $AlpzaBannerTipo->getNombre() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('bannerTipo/new') ?>">Nuevo</a>

</div>
</div>
