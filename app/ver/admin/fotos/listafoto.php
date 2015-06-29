<?php

Texto::h1($titulo);
echo "<div id='lista'>";
foreach($fotos as $img){
    echo "<aside class='lista'>";
imagem::imgupload($img->img);
echo "</aside>";


}
echo "</div>";
 ?>
