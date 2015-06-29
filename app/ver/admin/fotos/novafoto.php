<?php Texto::h1($titulo); ?>
<form action="<?php echo BASEURL ?>ldash/cadastrarportifolio" method="POST" enctype="form-data/multipart">
    <input type="hidden" value="<?php echo texto::limpar(texto::uri(2))?>" name="cliente_nome">
    <select name="area">
        <option value="PP"> Pastilhas e Porcelanato 
        <option value="DW"> DrayWall
        <option value="IL"> Iluminação
        <option value="HE"> Hidráulica e Esgoto 
    </select>
    <br>
    <input type="file" id="file" name="foto[]" multiple="multiple" accept="image/*" />

      <input type="file" id="file" name="foto[]"  accept="image/*" />
        <input type="file" id="file" name="foto[]"accept="image/*" />
          <input type="file" id="file" name="foto[]"  accept="image/*" />
            <input type="file" id="file" name="foto[]"  accept="image/*" />
  <input type="submit" value="Upload!" />
</form>