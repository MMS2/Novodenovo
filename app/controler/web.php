<?php

class Web extends Scontroler {

    function index() {
      
        $data = array('conteudo' => 'index/index' );
        $this->ver('index_template', $data);
    }

  
    
   function galeria() {
        $galeria = $this->modelo('imagensmd');
        $galeria = new Imagensmd();
        $id = Texto::uri(2);
        
        $g = $galeria->galerialista($id);
   
                
        $data = array('conteudo' => 'index/galeria', 'id'=>$id, 'galeria'=>$g );
        $this->ver('index_template', $data);
    }



	//hidraulica_e_esgoto
     	function hidraulica_e_esgoto() {
      
       	$data = array('conteudo' => 'index/hidraulica', 'titulo_'=> 'Hidráulica e Esgoto' );
       	$this->ver('index_template', $data);
    }
    
  	//pastilhas_e_porcelanato
 	function pastilhas_e_porcelanato() {
       $dbImg = $this->modelo('imagensmd');
       $dbImg = new Imagensmd();
       $pastilhas = $dbImg->pastilhas();
              
      	$data = array('conteudo' => 'index/pastilhas', 'titulo_'=> 'Pastilhas e Porcelanato', 'pastilhas'=>$pastilhas,);
       	$this->ver('index_template', $data);
    }

        //iluminacao
  function iluminacao() {
      
        $data = array('conteudo' => 'index/iluminacao', 'titulo_'=> 'Iluminação' );
        $this->ver('index_template', $data);
    }

        //drywall
  function drywall() {
      
        $data = array('conteudo' => 'index/drywall', 'titulo_'=> 'Drywall' );
        $this->ver('index_template', $data);
    }

}

?>
