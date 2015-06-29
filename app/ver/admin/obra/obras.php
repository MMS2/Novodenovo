<?php

echo $titulo;

echo "<br>";
?>

<form action="<?php echo BASEURL ?>index/cadastraFotoD"  method="post" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo texto::limpar(texto::uri(2))?>" name="cliente_nome">
  
       <input type="hidden" name="area" value="<?php echo $area ?>" >
       <input name="img[]" type="file" multiple  />

  <input type="submit" name="upload" value="Upload">
</form>