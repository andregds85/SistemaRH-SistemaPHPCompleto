<HTML>
<style type="text/css">
<!--
@import url("cssvagas.css");
-->
</style>
<BODY>
<div align="center">
<?php

$id=$_GET['id'];
include("connect.php");


  $dados=mysql_query("select * from vagas where id = '$id'");

  
  if (mysql_num_rows($dados)==0)
    echo "Opa... Não há vagas com esta palavra";
  else
  {
    ?>
	<table width="610" align="center" border="0" cellpadding="3" cellspacing="2">
	<tbody><tr>

	
	
	<td class='item2' width='10%' bgcolor='004a8c'>Dados da Vaga </TD>

	
	<? 
	
		 echo "<table width='610' align='center' border='0'>";
		  

	
	
    while ($linha = mysql_fetch_array($dados))
    {
      
      $id=$linha['id'];
      $id_empresa=$linha['id_empresa'];
	  $status=$linha['status'];
	  $titulo=$linha['titulo'];
	  $quantidade=$linha['quant'];
      $descricao=$linha['descricao'];
      $area_profissional1=$linha['area_profissional'];
      $cargo=$linha['cargo'];
      $salario=$linha['salario'];
      $escolaridade=$linha['escolaridade'];
      $local_de_trabalho=$linha['local_de_trabalho'];
      $forma_de_contratacao=$linha['contrato'];
      $data_inicio=$linha['data_inicio'];
      $data_termino=$linha['data_termino'];
     
    
    ?>
      <td class='item2' width='30%' bgcolor='004a8c'>Titulo : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$titulo</TD><tr>"; 	
	
	
	 ?>
      <td class='item2' width='30%' bgcolor='004a8c'>Quantidade : </TD>
	 <? echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$quantidade</TD><tr>";
	 
	
	?>
      <td class='item2' width='30%' bgcolor='004a8c'>Publicação : </TD>
	 <? echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$data_inicio</TD><tr>";
	
	 	  ?>
      <td class='item2' width='30%' bgcolor='004a8c'>Área(s) Profissional(is) : </TD>
	 <? echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$area_profissional1</TD><tr>";	
	 
	 
	 
	 ?>
      <td class='item2' width='30%' bgcolor='004a8c'>Cargo : </TD>
	 <? echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$cargo</TD><tr>";
	 
	 
	 	?>
      <td class='item2' width='30%' bgcolor='004a8c'>Salário: : </TD>
	 <? echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$salario</TD><tr>";	
	
	 
	 	 ?>
      <td class='item2' width='30%' bgcolor='004a8c'>Forma de Contratação : </TD>
	 <? echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$forma_de_contratacao</TD><tr>";
	
	
		 ?>
      <td class='item2' width='30%' bgcolor='004a8c'>Escolaridade : </TD>
	 <? echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$escolaridade</TD><tr>";
		
	   ?>
      <td class='item2' width='30%' bgcolor='004a8c'>Descrição : </TD>
	 <? echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$descricao</TD><tr>";

     
	 ?>
      <td class='item2' width='30%' bgcolor='004a8c'>Local de Trabalho : </TD>
	 <? echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$local_de_trabalho</TD><tr>";
	 
	 
	  ?>
      <td class='item2' width='30%' bgcolor='004a8c'>Disponivel : </TD>
	 <? echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>"; echo $status ?>
	 
	 	
 
	  
	  
	  </TD><tr>
	 
	 <? 
	
	 
    }
    echo "</TABLE>";
  }

?>
	
	
	
	<? 
	
		if($status=='nao') 
		{			
		?> <a href="?pg=mudastatus&id=<? echo $id;?>&status=<? echo $status;?>">Liberar Vaga</a><?
		}
		
	 
		if($status=='sim') 
		{			
		?> <a href="?pg=mudastatus2&id=<? echo $id;?>&status=<? echo $status;?>">Desabilitar Vaga</a><?
		}
		
		?>
	
	
	
	
</BODY>
</HTML>
