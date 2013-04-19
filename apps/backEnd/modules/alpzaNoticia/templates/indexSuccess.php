<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Lista de Noticias</h1>
<br>

<table class="table">
	<thead>
		<tr>
			<th></th>
			<th>Nombre</th>
			<th>Estado</th>
			<th>Fecha edición</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($AlpzaNoticias as $AlpzaNoticia): ?>
		<tr>
			<td><a
				href="<?php echo url_for('alpzaNoticia/show?id_alpza_noticia=' . $AlpzaNoticia->getIdAlpzaNoticia()) ?>">Editar</a></td>

			<td><?php echo $AlpzaNoticia->getNombre() ?></td>
			<td><?php if ($AlpzaNoticia->getEstado() == 1) echo "Activo"; else echo "Inactivo"; ?></td>
			<td><?php echo $AlpzaNoticia->getFechaEdicion() ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<a class="btn" href="<?php echo url_for('alpzaNoticia/new') ?>">Nueva</a>

</div>
</div>
