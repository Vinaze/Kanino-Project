<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

session_start();

include_once('functions/conecta_db.php');


	if(!isset($_POST['entrar']) && !isset($_SESSION['idUsuario'])){	//Exite a tela de login
		require('templates/login.php');
	}else{	//Caso o usuário tenha preenchido o login e 
	//clicado em "entrar" verifique suas credenciais
	
		if(!isset($_SESSION['idUsuario'])){//verifica usuário e senha
		$q = dbConsultar($dbConectar, "SELECT idUsuario 
										FROM Usuario 
										WHERE loginUsuario = '{$_POST['usuario']}' 
										AND senhaUsuario = '{$_POST['senha']}'");
		
		
		$r = dbResultado($q);
		if(!empty($r['idUsuario'])){//se existir usuário e a senha estiver correta entra no sistema
			$_SESSION['idUsuario'] = $r['idUsuario'];
			header('Location: templates/dashboard.php');

			}else{//caso contrário mostra mensagem de error
			$msg_erro = 'Login e/ou Senha Incorreto(s)';
			require('templates/login.php');
			}
		}
	}
?>