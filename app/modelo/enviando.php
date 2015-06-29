<?php

class Enviando extends Smodel{
	function cadastroFoto($data){
			return $this->insertdb('fotos',$data);
	}
		
	function pegaFoto(){
		
		return $this->verbd('fotos');
		
	}

	function delFoto($link){
	$a = $link;
	$data = array("id"=>$a);
	echo "APAGADO ID -  ".$a." ";
	return $this->apaga('noticias',$data);

	}
	
        function editFoto(){
            
            
        }
        
        
        
        //OBRA
        
        function cadastroObra($array){
			return $this->insertdb('obra',$array);
	}
        
        
        function pegaObra(){
		
		return $this->verbd('obra');
		
	}
        
        
           function pegaObraDesc($id){
		
		return $this->verbd('fotos', "where cliente_nome = '$id' ");
                return $this->verbd('obra', "where slug = '$id' ");
		
	}
              function pegaObraDesc2($id){
		
		
                return $this->verbd('obra', "where slug = '$id' ");
		
	}
        
        
}


?>