<?php if(count($contenido)>0){?>

<?php foreach($contenido as $index=>$data){?>

<?php if(trim($data['titulo'])!=""){?>
<div id="title"><?php echo $data['titulo']; ?></div>
<?php }?>

<?php if(trim($data['subtitulo'])!=""){?>
<div id="subtittle"><?php echo $data['subtitulo'];?></div>
<?php }?>

<?php if(trim($data['texto'])!=""){?>
<div id="texto"><?php  echo html_entity_decode($data['texto']);?></div>
<?php }?>
<?php }?>
<?php } //prod?>
