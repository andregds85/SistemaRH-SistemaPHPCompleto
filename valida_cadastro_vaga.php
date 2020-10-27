<? 
include("connect.php");

$id_empresa=$_POST['id_empresa'];
$status=$_POST['status'];
$titulo=$_POST['titulo'];
$quantidade=$_POST['quantidade'];
$descricao=$_POST['descricao'];
$area_profissional1=$_POST['area_profissional1'];
$cargo=$_POST['cargo'];
$salario=$_POST['salario'];
$escolaridade=$_POST['escolaridade'];
$local_de_trabalho=$_POST['local_de_trabalho'];
$forma_de_contratacao=$_POST['forma_de_contratacao'];
$data_inicio=$_POST['data1'];
$data_termino=$_POST['data2'];

	 
$dados=mysql_query("insert into vagas(id_empresa,status,titulo,quant,descricao,area_profissional,cargo,salario,escolaridade,
local_de_trabalho,contrato,data_inicio,data_termino)

values 
				   
('$id_empresa','$status','$titulo','$quantidade','$descricao','$area_profissional1','$cargo','$salario','$escolaridade',
'$local_de_trabalho','$forma_de_contratacao','$data_inicio','$data_termino')");
  
  if ($dados)
  {
   
    echo "Ok! Cadastro Efetuado Com Sucesso";
  }
  else
    echo "Erro... Cadastro Não Realizado";
    






?>
 

