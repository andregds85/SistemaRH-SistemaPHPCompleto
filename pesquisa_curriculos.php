<HTML>
<BODY>
<div align="center">
<?php

include("connect.php");

 
			 
	 $dados=mysql_query("select * from curriculo");		 
  if (mysql_num_rows($dados)==0)
    echo "Opa... Não há Curriculos com esta palavra";
  else
  {
    ?>
	<table border=1 width=100% bordercolor="FFFFFF" cellspacing=0 CLASS="tab">
	<tr bgcolor="004a8c"> <td colspan=9 align=center>
	<font face="arial" size=5 color="ffffff"> <b>

	Curriculos Cadastrados
	
	<? 
	
		 	echo  "<TR BGCOLOR=5abdef ALIGN='CENTER'>";
		echo  "<TD WIDTH=40%><FONT FACE='ARIAL' SIZE=2 color='ffffff'><B>Nomes</TD>"; 
		echo "<TD WIDTH=20%><FONT FACE='ARIAL' SIZE=1 color='ffffff'><B>Área Profissional 1</TD>"; 
			echo "<TD WIDTH=20%><FONT FACE='ARIAL' SIZE=1 color='ffffff'><B>Área Profissional 2</TD>";
				echo "<TD WIDTH=20%><FONT FACE='ARIAL' SIZE=1 color='ffffff'><B>$Área Profissional 3</TD>";  
	
	
	
    while ($linha = mysql_fetch_array($dados))
    {
    
	  $id = $linha["id"];
      $nome = $linha["nome"];
      $area_profissional1 = $linha["area_profissional1"];
	  $area_profissional2 = $linha["area_profissional2"];
	  $area_profissional3 = $linha["area_profissional3"];
     
   
      
	 	echo  "<TR BGCOLOR=5abdef ALIGN='CENTER'>";
		echo  "<TD WIDTH=40%><FONT FACE='ARIAL' SIZE=2><B><a href='?pg=pesquisa_curriculos2&id=$id'>$nome</a></TD>"; 
		echo "<TD WIDTH=20%><FONT FACE='ARIAL' SIZE=1><B>$area_profissional1</TD>"; 
		echo "<TD WIDTH=20%><FONT FACE='ARIAL' SIZE=1><B>$area_profissional2</TD>";
		echo "<TD WIDTH=20%><FONT FACE='ARIAL' SIZE=1><B>$area_profissional3</TD>";  

	  

     
    }
    echo "</TABLE>";
  }

?>
	
	</BODY>
</HTML>
