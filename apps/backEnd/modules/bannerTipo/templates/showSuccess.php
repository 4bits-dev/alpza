<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<table class="table">
	<tbody>
		<tr>
			<th>Id alpza banner tipo:</th>
			<td><?php echo $AlpzaBannerTipo->getIdAlpzaBannerTipo() ?></td>
		</tr>
		<tr>
			<th>Nombre:</th>
			<td><?php echo $AlpzaBannerTipo->getNombre() ?></td>
		</tr>
	</tbody>
</table>

<hr />

<a class="btn"
	href="<?php echo url_for('bannerTipo/edit?id_alpza_banner_tipo=' . $AlpzaBannerTipo->getIdAlpzaBannerTipo()) ?>">Editar</a>
&nbsp; <a class="btn" href="<?php echo url_for('bannerTipo/index') ?>">Listar</a>
</div>
</div>
