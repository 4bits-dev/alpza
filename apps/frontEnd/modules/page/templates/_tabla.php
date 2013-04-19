<table class="table table-hover">
<?php
if(count($contenido)>0){
	foreach($contenido as $index=>$data){
		if($index=='head' && count($data)>0){?>
	<thead>
		<tr>
		<?php
		foreach($data as $indexHead => $dataHead){?>
			<th><?php echo __($dataHead)?></th>
			<?php }?>
		</tr>
	</thead>
	<?php }?>
	<?php }?>

	<?php if($index=='body' && count($data)>0){?>
	<tbody>

	<?php
	foreach($data as $indexBody => $dataBody){?>
	<?php	foreach($data as $indexBodyArray=>$dataBodyArray){ ?>
		<tr>
		<?php foreach($dataBodyArray as $indexBodyArray1=>$dataBodyArray1){?>
			<td><?php if(count($dataBodyArray1)>0){
				switch($dataBodyArray1['tipo']){
					case 'link':
						echo link_to(__($dataBodyArray1['nombre']),$dataBodyArray1['url']);
						break;
					default: echo $dataBodyArray1;
				}
			}
			?></td>
			<?php }?>
		</tr>
		<?php }?>
		<?php }?>
	</tbody>
	<?php }?>
	<?php }?>
</table>
