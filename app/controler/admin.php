<?php
/**
 * ADMIN
 */
class Admin extends Scontroler {
	

	public function validalogin(){
		
		$adml = $this->modelo('adminmd');
		$adml = new Adminmd();
		
		
		
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		if(empty($login)){
			echo "Erro no Login \n";			
		}
			elseif(empty($senha)){
			echo "Erro na Senha \n";			
		}
			else{
				
		
		$adml->login($login, $senha);
			//	
			}
	}
	

function index(){
		
                $db = $this->modelo('noticiasmd');
		$db = new Noticiasmd();
		$home = $db->home();
		$depoimentos = $db->depoimentos();
		
	$data = array('conteudo'=>'admin/index','home'=>$home, 'depoimentos'=>$depoimentos);
	$this->ver('index_template',$data);
	
}



}

?>