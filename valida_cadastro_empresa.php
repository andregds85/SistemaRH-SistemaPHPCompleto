<? /*php
  session_start();
  $acesso = $_SESSION["acesso"];
  if (! $acesso)
    header("Location: index.htm"); */

include("connect.php");

 $nome=$_POST['nome'];
 $cnpj=$_POST['cnpj'];
 $endereco=$_POST['endereco'];
 $telefone=$_POST['telefone'];
 $email=$_POST['email'];
 $login=$_POST['login'];
 $senha1=$_POST['senha1'];
 $senha2=$_POST['senha2'];



	if ($senha1==$senha2) 
	{	$senha=$senha1;
		//echo 'senha correta duas iguais'.$senha;
	}
		
	else
	{ 
		  //echo "senhas não Conferem";
	}
		
	 
  $dados=mysql_query("insert into empresa(nome, cnpj, endereco,telefone,email,login,senha)
                      values ('$nome', '$cnpj', '$endereco','$telefone','$email','$login','$senha')");
  if ($dados)
  {
   
    echo "Ok! Cadastro Efetuado Com Sucesso";
  }
  else
    echo "Erro... Cadastro Não Realizado";
    






?>
 

