<? 
 include("connect.php");
   
	echo "<label for='curso1'>Área Profissional :</label>";

    $comando = mysql_query("select area_profissional from area_profissional");
    echo "<br>";
    echo "<select name='area_profissional1'>";
    while ($linha = mysql_fetch_array($comando))
     
  {

     $area_profissional1=$linha["area_profissional"];
     
    echo "<option>$area_profissional1</option>";
       }
 		echo "<br>";
 		echo "</select>";
		 echo "<br><br>";

           mysql_close($conecta);

?>







