<?
include("connect.php");

echo $v=$_GET["id_vaga"];
$login=$_POST['login'];
$senha=$_POST['senha'];



$dados=mysql_query("select * from curriculo where login = '$login' and senha = '$senha'");

$linha= mysql_fetch_array($dados);
$id = $linha["id"];



$extra='';
  if(mysql_num_rows($dados) == 1)
	{
	session_start();
    $_SESSION["acesso"] = 1; ?>

  ?> <script> window.location.href ="?pg=restrito_candidato&v=<? echo $v; ?> &id=<? echo $id; ?> "</script><?

   	}
	else
    {
	  echo "Senha inválida <P>";
	  echo "<CENTER><A HREF='?pg=login2'> Voltar </A>";
	  mysql_close($dbc);
	}

?>
 



