<?php

$nome=$_POST["nome"];
$datainsc=$_POST["datainsc"];
$datanasc=$_POST["data1"];
$cep=$_POST["cep"];
$endereco=$_POST["endereco"];
$bairro=$_POST["bairro"];
$cidade=$_POST["cidade"];
$uf=$_POST["uf"];
$rg=$_POST["rg"];
$cpf=$_POST["cpf"];
$fone=$_POST["fone"];
$celular=$_POST["celular"];
$email=$_POST["email"];
$estadocivil=$_POST["estadocivil"];
$sexo=$_POST["sexo"];
$cnh=$_POST["cnh"];
$conducao=$_POST["conducao"];
$login=$_POST["login"];
$senha=$_POST["senha"];
$area_profissional1=$_POST["area_profissional1"];
$area_profissional2=$_POST["area_profissional2"];
$area_profissional3=$_POST["area_profissional3"];
$fundamental=$_POST["fundamental"];
$serie_fundamental=$_POST["serie_fundamental"];
$medio=$_POST["medio"];
$serie_medio=$_POST["serie_medio"];
$tecnico=$_POST["tecnico"];
$curso_tecnico=$_POST["curso_tecnico"];
$serie_tecnico=$_POST["serie_tecnico"];
$superior=$_POST["superior"];
$curso_superior=$_POST["curso_superior"];
$serie_superior=$_POST["serie_superior"];
$empresa1=$_POST["empresa1"];
$cargo1=$_POST["cargo1"];
$atividade1=$_POST["atividade1"];
$empresa2=$_POST["empresa2"];
$cargo2=$_POST["cargo2"];
$atividade2=$_POST["atividade2"];
$empresa3=$_POST["empresa3"];
$cargo3=$_POST["cargo3"];
$atividade3=$_POST["atividade3"];
$cursos_profissionalizantes=$_POST["cursos_profissionalizantes"];
$conhecimentos_habilidades=$_POST["conhecimentos_habilidades"];
$foto=$_FILES["foto"];


$msg 	   = "Cadastro efetuado com sucesso";
$msg2 	   = "Operação Não Realizada";



include("connect.php");


 // if  ($verifica=mysql_query("select * from curriculo where login = '$login' and cpf = '$cpf'"))
	   
    
		
	 
	

	
	

		

	

$dados=mysql_query("insert into curriculo(nome,datainsc,datanasc,cep,endereco,bairro,cidade,uf,rg,cpf,fone,celular,email,
estadocivil,sexo,cnh,conducao,login,senha,area_profissional1,area_profissional2,area_profissional3,fundamental,serie_fundamental,
medio,serie_medio,tecnico,curso_tecnico,serie_tecnico,superior,curso_superior,serie_superior,empresa1,cargo1,atividade1,empresa2,
atividade2,cargo2,empresa3,cargo3,atividade3,cursos_profissionalizantes,conhecimentos_habilidades,foto)

values

('$nome','$datainsc','$datanasc','$cep','$endereco','$bairro','$cidade','$uf','$rg','$cpf','$fone','$celular','$email',
'$estadocivil','$sexo','$cnh','$conducao','$login','$senha','$area_profissional1','$area_profissional2','$area_profissional3',
'$fundamental','$serie_fundamental','$medio','$serie_medio','$tecnico','$curso_tecnico','$serie_tecnico','$superior','$curso_superior',
'$serie_superior','$empresa1','$cargo1','$atividade1','$empresa2','$atividade2','$cargo2','$empresa3','$cargo3','$atividade3',
'$cursos_profissionalizantes','$conhecimentos_habilidades','$foto')");



    // incluir a imagem

     if ($dados)
  {
  
   $id = mysql_insert_id($dbc);
   $destino ="imagens/". $id .".jpg";
   move_uploaded_file($foto["tmp_name"], $destino);

   ?>   <script language="JavaScript">
   alert("<?=$msg;?>");
   window.location = "javascript:history.go(-2);";
   </script>

         <?
         
           }




 // mysql_close($conecta);

?>
 

