<?

include("connect.php");
$login=$_POST['login'];
$senha=$_POST['senha'];

$dados=mysql_query("select * from admin where login = '$login' and senha = '$senha'");

$linha= mysql_fetch_array($dados);
$id = $linha["id"];




  if(mysql_num_rows($dados) == 1)
	{
   	 session_start();
    $_SESSION["acesso"] = 1; ?>
	
     <script> window.location.href ='?pg=area_restrita'; </script> <?
	}
	else
    {
	  echo "Senha inválida <P>";
	  echo "<CENTER><A HREF='?pg=empresa'> Voltar </A>";
	  	mysql_close($dbc);
	}

?>
 









