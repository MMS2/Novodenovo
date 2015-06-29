   <?php echo $titulo_ ?>
<div id="galeriaObra">
     <aside>
            <?php
if(isset($pastilhas)){
    
    
   foreach($pastilhas as $pp){
       $img = "https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg";
       //imagem::imgcaptionup($a, $titulo, $img, $conteudo, $class);
       imagem::imgcaptionup("web/galeria/".$pp->slug, $pp->cliente_nome, $img, " ","listObras");  
   }
   
}else{
    
    echo "vazio";
    
}
    ?>
    </aside>   
</div>
