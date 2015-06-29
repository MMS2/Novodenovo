  
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
    //Texto::redireciona('ldash/listarportifolio');
        } else {

            echo "EEEEEPAAAAA ERRO NAO";
        } else{
        
        echo $error;
        }
    }