<?php
	
 $v=$_GET["v"];

 $id=$_GET["id"];



$dados=mysql_query("insert into interesse(id_vaga,id_curriculo)
                     values ('$v','$id')");




  if ($dados)
  {
   
    echo "Ok! Cadastro " ."Curriculo  : " .$id ." Vaga : " .$v ."pra vaga efetuado com Sucesso";
	echo "<br>";
	echo "Em breve entraremos em Contato";
	
  }
  else
    echo "Operação Não Realizada";




?>
