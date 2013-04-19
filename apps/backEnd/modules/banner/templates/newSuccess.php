<?php use_helper('jQuery'); ?>
<div class="span9">
<div class="hero-unit">
<h1>Ingresar Nuevo Banner</h1>
<br>
<?php include_partial('form', array('form' => $form)) ?></div>
</div>
<script>
$(document).ready(function() {
      validar_sliders_activos();
});

function validar_sliders_activos()
{
  <?php if($errorFoto == true)
    echo "var error=true;";
    else
      echo "var error=false;";
   ?> 
        if(error)
        alert("Ya hay 7 sliders activos!");
  
}
</script>
