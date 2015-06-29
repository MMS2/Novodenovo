<?php

Texto::h1($titulo);
echo "<div id='lista'>";
foreach($fotos as $obr){
    echo "<aside class='lista'>";
texto::link("ldash/obra/".$obr->slug, $obr->cliente_nome);
echo "</aside><br>";


}
echo "</div>";
 ?>
<Style>
    
    .lista {float:left;}
</style>