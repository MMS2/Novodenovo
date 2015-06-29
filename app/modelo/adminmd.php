<?php
/**
 * ADMIN MODEL
 */
class Adminmd extends Smodel {

function login($login, $senha){
	
	echo $login;
	echo "<br>";
	echo $senha;
	echo "<br>";
	
	$loga = $this->verbd('adm' , 'WHERE nome = "'.$login.'" AND senha = "'. $senha.'"', 'LIMIT 1');
	
	if($loga){
		echo "existe";
		Sessao::salva('nome', 	$login);
		Texto::redireciona('ldash');
		
	}else {
		
		echo "nao existe";
	}
	
}	

}

?>