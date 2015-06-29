<?php echo $titulo_ ?>
<div id="galeria">
    
    <aside >
            <?php
        texto::h3("Hidráulica");
     $classe = "class='opacidade'";
        $span = array(
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'),
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'),
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'),
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'),
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'),
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'));
    
    
    foreach ($span as $spimg){
  
    }
       
    ?>
    </aside>
    
        <aside>
            <?php
        texto::h3("Esgoto");
        $classe = "class='opacidade zoom'";
        $span2 = array(
             imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'),
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'),
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'),
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'),
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg'),
            imagem::imgfora('http://www.decoracaoplanejada.com/wp-content/gallery/reformas-em-geral/reformas-em-geral-4.jpg')
  );
    
    
    foreach ($span2 as $spimg2){
        echo $spimg2;
    }
       
    ?>
    </aside>
    
</div>