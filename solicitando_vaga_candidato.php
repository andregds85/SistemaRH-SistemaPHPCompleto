<?php
	


    include("connect.php");

       $dados = mysql_query("select i.id, v.id, v.titulo, c.id, c.nome from interesse i, vagas v, curriculo c where i.id_vaga = v.id and i.id_curriculo = c.id");






   echo "<TABLE BORDER=1>";

   while ($linha = mysql_fetch_array($dados))
   {
     $cod     = $linha["codigo"];
     $data    = $linha["data"];
     $data    = sqltodate($data);
     $total   = $linha["total"];
     $total   = number_format($total, 2, ",", ".");
     $formapg = $linha["formapg"];
     $status  = $linha["descricao"];
     $nome    = $linha["nome"];
     echo "<TR><TD> $cod";
     echo "<TD> $nome";
     echo "<TD> $data";
     echo "<TD> $formapg";
     echo "<TD> $total";
     echo "<TD> $status";
     echo "<TD> <A HREF='mudastatus.php?cod=$cod'>
           Status </A>";
   }
   echo "</TABLE>";



?>
