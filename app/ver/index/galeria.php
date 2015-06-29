<?php echo $id;?>
<div id="galeria">
     <aside>
            <?php

     if(isset($galeria)){
            
             foreach($galeria as $pp){
       imagem::imgupload("../".$pp->img); 
   }
        }else{
            
           echo  "Vazio";
        }
        
  
    ?>
    </aside>   
</div>
