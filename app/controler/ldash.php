<?php

/**
 * LOGIN DASH
 */
class Ldash extends scontroler {

    function __construct() {
        $sessao = Sessao::mostra('nome');
        if ($sessao) {
            
        } else {
            Texto::redireciona('admin');
        }
    }

    public function index() {
        $data = array('conteudo' => 'admin/dash',);
        $this->ver('admin/admintemplate', $data);
    }

    public function sair() {
        Sessao::apagasessao();
        Texto::redireciona('admin');
    }

public function portifolio(){
    
     $data = array('conteudo' => 'admin/fotos/novafoto','titulo'=>'Nova Foto');
        $this->ver('admin/admintemplate', $data); 
    
    
}

public function cadastrarportifolio(){
    
  
        $insert = $this->modelo('enviando');
        $insert = new Enviando();
       
        $area = $_POST['area'];
        $pasta = "publico/uploads/";
        $cliente = $_POST['cliente_nome'];
        $adicional = date('d_m_Y_S_m')."_".$cliente."_";
        $imagem = $_FILES['foto'];
        
        if(file_exists($pasta)){

            echo "existe"; 
          }else{               
               echo "nao existe";
               mkdir($pasta, 0777);
      }

    
foreach ($imagem["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $imagem["tmp_name"][$key];
        $name = $imagem["name"][$key];
         $img = $pasta .$adicional.md5($name) . '.jpg';
        move_uploaded_file($tmp_name, $img);
        
         $data = array(
            'img' => $img,
            'area'=> $area,
           'cliente_nome'=> $cliente);
         
           if ($data) {
            
        $insert->cadastroFoto($data);
           print_r($data);
    Texto::redireciona('ldash/listarobra');
        } else {

            echo "EEEEEPAAAAA ERRO NAO";
        } 
    }
    
        
    
    
    
    
}
    
    
}
    
  
    
    
  
public function listarportifolio(){
    $insert = $this->modelo('enviando');
        $insert = new Enviando();
        $fotos = $insert->pegaFoto();
       $data = array('conteudo' => 'admin/fotos/listafoto','titulo'=>'Lista','fotos'=>$fotos);
        $this->ver('admin/admintemplate', $data); 
    
}


// OBRA GALERIA

public function novaObra(){
       $data = array('conteudo' => 'admin/obra/novaobra','titulo'=>'Nova Obra');
        $this->ver('admin/admintemplate', $data);   
    
}
public function cadastrarobra(){
    
        $insert = $this->modelo('enviando');
        $insert = new Enviando();
        $dia = date('d/m/y');
        $area = $_POST['area'];
        $cliente = $_POST['cliente_nome'];
        $slug = Texto::limpar($cliente);
        $descricao = utf8_decode($_POST['descricao_obra']);
  
        $data = array(
            'cliente_nome'=>$cliente,
            'slug'=>$slug,
            'data'=> $dia,
            'descricao_obra'=>$descricao,
            'area'=> $area );

        if ($data) {
            
            $insert->cadastroObra($data);
    
        Texto::redireciona('ldash/portifolio/'.$cliente);
        } else {

            echo "EEEEEPAAAAA ERRO NAO";
        }
}



  
public function listarobra(){
    $insert = $this->modelo('enviando');
        $insert = new Enviando();
        $fotos = $insert->pegaObra();
       $data = array('conteudo' => 'admin/obra/listaobra','titulo'=>'Lista Obra','fotos'=>$fotos);
        $this->ver('admin/admintemplate', $data); 
    
}

public function obra(){
    
    $descricao = $this->modelo('enviando');
    $descricao = new Enviando();
    $id = Texto::uri(2);
 
    $busca = $descricao->pegaObraDesc($id);
    $busca2 = $descricao->pegaObraDesc2($id);
    
    foreach ($busca2 as $b){
        
        $cliente_id = $b->cliente_nome;
        $area = $b->area;
    }
    
    
    
      $data = array('conteudo' => 'admin/obra/obras','titulo'=>'Obras de  '. $cliente_id, 'desc'=>$busca, 'area'=>$area);
        $this->ver('admin/admintemplate', $data);   
    
    
}



}



?>	