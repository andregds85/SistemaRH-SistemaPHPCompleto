<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<? 
 include("connect.php");
   
	echo "<label for='curso1'>Área profissional 1 :</label>";

    $comando = mysql_query("select area_profissional from area_profissional");
    echo "<br>";
    echo "<select name='area_profissional1'>";
    while ($linha = mysql_fetch_array($comando))
     
  {

     $area_profissional1 = $linha["area_profissional"];
     
    echo "<option>$area_profissional1</option>";
       }
 		echo "<br>";
 		echo "</select>";	
 	    


	
 	echo"<br>";
	echo "<label for='curso1'>Área profissional 2 :</label><br>";
    $comando1 = mysql_query("select area_profissional from area_profissional");
	echo "<select name='area_profissional2'>";
    while ($linha = mysql_fetch_array($comando1))
     
  {

     $area_profissional2 = $linha["area_profissional"];
     
    echo "<option>$area_profissional2</option></br>";
       }
 
 
 		echo "</select>";	
 	    
	
	
	echo"<br>";
	echo "<label for='curso1'>Área profissional 3 :</label><br>";
    $comando2 = mysql_query("select area_profissional from area_profissional");
	echo "<select name='area_profissional3'>";
    while ($linha = mysql_fetch_array($comando2))

  {

     $area_profissional3 = $linha["area_profissional"];

    echo "<option>$area_profissional3</option></br>";
       }


 		echo "</select>";
	
	
	

   
   mysql_close($conecta);
?>






</html>
