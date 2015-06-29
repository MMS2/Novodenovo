<?php

 Texto::h1($titulo);
 
?>

<form action="<?php echo BASEURL ?>ldash/cadastrarobra" method="post" enctype="multipart/form-data">
    <label> Área </label>
        <select name="area">
        <option value="PP"> Pastilhas e Porcelanato 
        <option value="DW"> DrayWall
        <option value="IL"> Iluminação
        <option value="HE"> Hidráulica e Esgoto 
    </select>
    <div class="clearfix"></div>
        
    <label> Cliente </label> 
    <input type="text" name="cliente_nome">
      <div class="clearfix"></div>
      
        <label> Descrição </label> 
        <textarea class="textarea" name="descricao_obra"></textarea>
      <div class="clearfix"></div>
      
      
      
      <label> Cliente </label> 
        <div class="clearfix"></div>
    <input type="submit">
</form>