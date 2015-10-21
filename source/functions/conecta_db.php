<?php

define('DB_HOST','i9yueekhr9.database.windows.net');
define('DB_NOME','kanino');
define('DB_USUARIO','TSI');
define('DB_SENHA','SistemasInternet123');
define('DB_DSN','Driver={SQL Server};Server='.DB_HOST.';Port=1433;Database='.DB_NOME.';');
               
$dbConectar = odbc_connect(DB_DSN,DB_USUARIO,DB_SENHA);

function dbConsultar($dbConectar, $consulta_sql){
	return odbc_exec($dbConectar, $consulta_sql);
}

function dbResultado($qResultado){
	return odbc_fetch_array($qResultado);
}

function dbErro($dbConectar){
	$erro = odbc_errormsg($dbConectar);
	if(!empty($erro)){
		echo 'ERRO: '.$erro;
	}
}
function fechaDb(){
	odbc_close_all();
}
?>
