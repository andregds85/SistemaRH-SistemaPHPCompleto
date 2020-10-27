<HTML>
<BODY>
<?php
$id=$_GET['id'];
include("connect.php");
$dados=mysql_query("select * from curriculo where id ='$id'");
	 ?>
	<table width="610" align="center" border="0" cellpadding="3" cellspacing="2">
	<tbody><tr>
		
	<td class='item2' width='10%' bgcolor='004a8c'>Dados do Candidadato id : <? echo $id; ?>  </TD>
	
	<? 
		 echo "<table width='610' align='center' border='0'>";
	  
 while ($linha = mysql_fetch_array($dados))
 
    {

	$nome=$linha["nome"];
	$datainsc=$linha["datainsc"];
	$datanasc=$linha["data1"];
	$cep=$linha["cep"];
	$endereco=$linha["endereco"];
	$bairro=$linha["bairro"];
	$cidade=$linha["cidade"];
	$uf=$linha["uf"];
	$rg=$linha["rg"];
	$cpf=$linha["cpf"];
	$fone=$linha["fone"];
	$celular=$linha["celular"];
	$email=$linha["email"];
	$estadocivil=$linha["estadocivil"];
	$sexo=$linha["sexo"];
	$cnh=$linha["cnh"];
	$conducao=$linha["conducao"];
	$area_profissional1=$linha["area_profissional1"];
	$area_profissional2=$linha["area_profissional2"];
	$area_profissional3=$linha["area_profissional3"];
	$fundamental=$linha["fundamental"];
	$serie_fundamental=$linha["serie_fundamental"];
	$medio=$linha["medio"];
	$serie_medio=$linha["serie_medio"];
	$tecnico=$linha["tecnico"];
	$curso_tecnico=$linha["curso_tecnico"];
	$serie_tecnico=$linha["serie_tecnico"];
	$superior=$linha["superior"];
	$curso_superior=$linha["curso_superior"];
	$serie_superior=$linha["serie_superior"];
	$empresa1=$linha["empresa1"];
	$cargo1=$linha["cargo1"];
	$atividade1=$linha["atividade1"];
	$empresa2=$linha["empresa2"];
	$cargo2=$linha["cargo2"];
	$atividade2=$linha["atividade2"];
	$empresa3=$linha["empresa3"];
	$cargo3=$linha["cargo3"];
	$atividade3=$linha["atividade3"];
	$cursos_profissionalizantes=$linha["cursos_profissionalizantes"];
	$conhecimentos_habilidades=$linha["conhecimentos_habilidades"];
	$foto=$linha["foto"];

 		
	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Nome : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$nome</TD><tr>"; 	
	
	 
	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Data de Inscrição : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$datainsc</TD><tr>"; 	

    ?>
      <td class='item2' width='30%'   bgcolor='004a8c'>CEP : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$cep</TD><tr>";  	


	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Endereço : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$endereco</TD><tr>";  	


	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Bairro : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$bairro</TD><tr>";


	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Cidade : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$cidade</TD><tr>";
	
	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Estado : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$uf</TD><tr>";


	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Rg : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$rg</TD><tr>";

	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>CPF : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$cpf</TD><tr>";
	
	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Fone : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$fone</TD><tr>";

	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Celular : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$celular</TD><tr>";
	
	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Email : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$email</TD><tr>";
	
	
	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Estado Civil : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$estadocivil</TD><tr>";

	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Sexo : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$sexo</TD><tr>";

	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Carteira de habilitação : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$cnh</TD><tr>";

	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Condução própria : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$conducao</TD><tr>";

	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Área Profissional 1  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$area_profissional1</TD><tr>";

	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Área Profissional 2  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$area_profissional2</TD><tr>";

	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Área Profissional 3  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$area_profissional3</TD><tr>";

        ?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Ensino Fundamental  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$fundamental</TD><tr>";
	 ?>
     

	<td class='item2' width='30%'   bgcolor='004a8c'>Série Fundamental  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$serie_fundamental</TD><tr>";

	 ?>
        <td class='item2' width='30%' bgcolor='004a8c'>Ensino Médio  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$medio</TD><tr>";

	
	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Série Médio  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$serie_medio</TD><tr>";


	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Ensino Técnico  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$tecnico</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Nome do Curso Técnico  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$curso_tecnico</TD><tr>";

		?>
        <td class='item2' width='30%' bgcolor='004a8c'>Série e/ou módulo do curso Técnico  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$serie_tecnico</TD><tr>";


		?>
        <td class='item2' width='30%' bgcolor='004a8c'>Curso Superior  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$superior</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Nome do Curso Superior  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$curso_superior</TD><tr>";


	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Nome do Curso Superior  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$curso_superior</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Série e/ou módulo do curso Superior  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$serie_superior</TD><tr>"; ?>
 
	
	<td class='item2' bgcolor='004a8c'>Experiência Profissional : </TD><tr> <?


	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Empresa 1  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$empresa1</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Cargo 1  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$cargo1</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Atividade 1  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$atividade1</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Empresa 2  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$empresa2</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Cargo 2  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$cargo2</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Atividade 2  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$atividade2</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Empresa 3  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$empresa3</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Cargo 3  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$cargo3</TD><tr>";

	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Cargo 3  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$atividade3</TD><tr>";

	
	?> <td class='item2'  bgcolor='004a8c'>Conhecimentos e habilidades / Cursos  : </TD><tr> <?

		
	?>
        <td class='item2' width='30%' bgcolor='004a8c'>Cursos  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$cursos_profissionalizantes</TD><tr>";


	?>
        <td class='item2' width="30%" bgcolor='004a8c'>Conhecimentos e/ou Habidades  : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$conhecimentos_habilidades</TD><tr>";
	
	?>
      <td class='item2' width='30%'   bgcolor='004a8c'>Foto : </TD>
	<?  echo  "<td class='item2'  bgcolor='#ffcc66' height='20'>$foto</TD><tr>";

 
 }
?> 