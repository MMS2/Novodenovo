<?php

/**
 * Notícias
 */
class Imagensmd extends smodel {

    
    function galerialista($id){
     
      return $this->verbd('fotos', 'WHERE cliente_nome ="'.$id.'" order by id DESC ');  
        
    }
function pastilhas(){
    
    
return $this->verbd('obra', 'where area ="PP" order by id DESC ');
    
    
}

function porcelanatos(){
    
    
return $this->verbd('fotos');
    
    
}


}

?>