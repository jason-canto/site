Insert no banco:

<form action="index.php" method="post">
	Nome: <input type="text" name="nome"/>
	Sobrenome: <input type="text" name="sobrenome"/>
	Usuario: <input type="text" name="user"/>
	Senha: <input type="password" name="senha"/>
	Email: <input type="text" name="email"/>
	<input type="submit" value="salvar"/>
</form>

<?php
	include 'database.class.php';
	include 'usuario.class.php';
	
	
	echo  date('D M Y').'<br />';
	
	if(!trim($_POST['nome']) == ''){
	
		$db = new Database();
		
		$db->conexao("50.22.91.38","celap873","mjib53","celap873_app_bebe");
		
		$usuario = new Usuario($_POST['nome'],
							$_POST['sobrenome'],
							$_POST['user'],
							$_POST['pass'],
							$_POST['email']);
							
		$db->insert($usuario);
		
		$data = array("nome"=>$_POST['nome'],
					"sobrenome"=>$_POST['sobrenome'],
					"user"=>$_POST['user'],
					"pass"=>$_POST['senha'],
					"email"=>$_POST['email']);
	}
	
?>