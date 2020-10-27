<HTML>
<style type="text/css">
<!--
@import url("cssvagas.css");
-->
</style>
<BODY>
<div align="center">
<?php

include("connect.php");


  $dados = mysql_query("select * from vagas where status='sim'");
  
  if (mysql_num_rows($dados)==0)
    echo "Opa... Não há vagas com esta palavra";
  else
  {
  
  	
  
    ?>
	<table width="100%" align="center" border="0">
	<tbody><tr>
	<td class='item2' width='30%' bgcolor='004a8c'>Titulo</TD>
	<td class='item2' width='25%' bgcolor='004a8c'>Local de trabalho</TD>
	<td class='item2' width='5%' bgcolor='004a8c'>QTDE</TD>
	<td class='item2' width='30%' bgcolor='004a8c'>Área profissional</TD>
	<td class='item2' width='10%' bgcolor='004a8c'>Data inicio</TD>

	
	<? 
	 
		echo "<tr>";
	
	
	
    while ($linha = mysql_fetch_array($dados))
    {
      
      $id_vagas=$linha['id'];
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
      $forma_de_contratacao=$linha['forma_de_contratacao'];
      $data_inicio=$linha['data_inicio'];
      $data_termino=$linha['data_termino'];
     
    
    
      
	
		
echo "<td class='item2' width='30%' bgcolor='#ffcc66'><a href='?pg=pesquisa_vagas2&id=$id_vagas'>$titulo</a></TD>
		  	 <td class='item2' width='25%' bgcolor='#ffcc66'>$local_de_trabalho</TD>
		  	 <td class='item2' width='5%' bgcolor='#ffcc66'>$quantidade</TD> 
			 <td class='item2' width='30%' bgcolor='#ffcc66'>$area_profissional1</TD>
		     <td class='item2' width='10%' bgcolor='#ffcc66'>$data_inicio</TD>";
			
	
	  echo "<tr>";
	  

     
    }
    echo "</TABLE>";
  }

?>
	
	
	
	
</BODY>
</HTML>
