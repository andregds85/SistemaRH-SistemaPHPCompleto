<?
/*
* Connect.php 
* Este arquivo ser� usado para implementarmos
* as vari�veis, fun��es e classes de conex�o com o Banco de Dados.
* 
* 
*/
// Define uma conex�o.
// Requer o host , usu�rio e senha do banco de dados
$conexao = @ mysql_pconnect($bd_host,$bd_user,$bd_senha);

// Seleciona o Banco de Dados
// Requer bd e conex�o
$bd = @ mysql_select_db($bd,$conexao);

 $conecta =mysql_connect("localhost","rh","");
    mysql_select_db("rh", $conecta);
	
 $dbc =mysql_connect("localhost","rh","");
    mysql_select_db("sulpel_rh", $conecta);

?>
