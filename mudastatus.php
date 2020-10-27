<?php 


$msg 	   = "Atualizado com sucesso";
$msg2 	   = "Não foi Possivel atualizar";

 $id=$_GET["id"]; 
 $status=$_GET["status"];

include("connect.php");


 $dados=mysql_query("update vagas set status = 'sim' where id='$id'");
 
 
 
  if ($dados)
  {
  
	
   ?>   <script language="JavaScript">
   alert("<?=$msg;?>");
   window.location = "javascript:history.go(-3);";
   </script>

         <?
         
           }
  else
   {     ?>
            <script language="JavaScript">
   alert("<?=$msg2;?>");
   window.location = "javascript:history.go(-3);";
   </script> <?
   
   }


              
 
?>