<?
/*
* Connect.php 
* Este arquivo será usado para implementarmos
* as variáveis, funções e classes de conexão com o Banco de Dados.
* 
* 
*/
// Define uma conexão.
// Requer o host , usuário e senha do banco de dados
$conexao = @ mysql_pconnect($bd_host,$bd_user,$bd_senha);

// Seleciona o Banco de Dados
// Requer bd e conexão
$bd = @ mysql_select_db($bd,$conexao);

 $conecta =mysql_connect("localhost","rh","");
    mysql_select_db("rh", $conecta);
	
 $dbc =mysql_connect("localhost","rh","");
    mysql_select_db("sulpel_rh", $conecta);

?>
