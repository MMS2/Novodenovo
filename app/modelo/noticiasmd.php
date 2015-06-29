<?php

/**
 * Notícias
 */
class Noticiasmd extends smodel {

    public function home() {

        return $this->verbd('noticias', 'ORDER BY id DESC', 'LIMIT 6');
    }

    public function depoimentos() {
        return $this->verbd('depoimento', 'ORDER BY id DESC', 'LIMIT 1');
    }
    
       public function dep() {
        return $this->verbd('depoimento', 'ORDER BY id DESC');
    }
    
    //DESCRIÇÃO NOTICIAS

    public function descricao($slug) {

        return $this->verbd('noticias', 'WHERE slug = "' . $slug . '"', 'LIMIT 1');
    }
    
      public function descricaodep($slug) {

        return $this->verbd('depoimento', 'WHERE slug = "' . $slug . '"', 'LIMIT 1');
    }

    /* ADMIN NOTICIA */

    public function ntsall() {

        return $this->verbd('noticias', 'ORDER BY id DESC');
    }

    public function cadastrar($data) {
        return $this->insertdb('noticias', $data);
    }

    public function delete($id) {
        $data = array('id' => $id);
        return $this->apaga('noticias', array('id' => $id));
    }

    public function edit($id) {
        $where = "WHERE id = " . $id;
        return $this->verbd('noticias', $where);
    }

    public function editando() {
        $id = $_POST['id'];
        $slug = Texto::limpar($_POST['nome']);
       $data = "titulo = '" . utf8_decode($_POST['nome']) . "' ,
	noticia = '" . mysql_real_escape_string(utf8_decode($_POST['noticia'])) . "' , 
	slug = '" . $slug . "' ,
        pag = '". $_POST['pag']."' ,
        edicao  = '".$_POST['edicao']."'";
        
        
        
        $where = "WHERE id = " . $id;
        return $this->updatedb('noticias', $data, $where);
    }
    
    
    
    
     /* ADMIN DEPO */

    public function depoall() {

        return $this->verbd('depoimento', 'ORDER BY id DESC');
    }

    public function cadastrardepo($data) {
        return $this->insertdb('depoimento', $data);
    }

    public function deletedepo($id) {
        $data = array('id' => $id);
        return $this->apaga('depoimento', array('id' => $id));
    }

    public function editdepo($id) {
        $where = "WHERE id = " . $id;
        return $this->verbd('depoimento', $where);
    }

    public function editandodepo() {
        $id = $_POST['id'];
        $slug = Texto::limpar($_POST['nome']);

        $data = "titulo = '" . utf8_decode($_POST['nome']) . "',
			dep = '" . mysql_real_escape_string(utf8_decode($_POST['noticia'])) . "', 
			slug = '" . $slug . "'";
      

        $where = " WHERE id = " . $id;
        return $this->updatedb('depoimento', $data, $where);
    }

}

?>