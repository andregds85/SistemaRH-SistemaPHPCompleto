<? /*php
  session_start();
  $acesso = $_SESSION["acesso"];
  if (! $acesso)
    header("Location: index.htm"); */

include("connect.php");

$area_profissional=$_POST['area_profissional'];

$dados=mysql_query("insert into area_profissional(area_profissional)values ('$area_profissional')");


  if ($dados)
  {
   
    echo "Ok! Cadastro Efetuado Com Sucesso";
  }
  else
    echo "Erro... Cadastro Não Realizado";
    






?>
 

