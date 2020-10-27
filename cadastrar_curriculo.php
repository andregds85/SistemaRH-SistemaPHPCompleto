<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Formulario de Cadastro de Curriculo</title>
<style type="text/css">
<!--
@import url("styleCurriculo.css");
-->
</style>
<script>

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
<SCRIPT>
<!--
function valida()
{
 if(document.regform.nome.value=="" || document.regform.nome.value.length < 8)
{
alert( "Preencha campo Nome corretamente!" );
regform.nome.focus();
return false;
}
 if(document.regform.datainsc.value=="" || document.regform.datainsc.value.length < 5)
{
alert( "Preencha campo data de inscrição corretamente!" );
regform.datainsc.focus();
return false;
}


 if(document.regform.data1.value=="" || document.regform.data1.value.length < 5)
{
alert( "Preencha campo data de nascimento corretamente!" );
regform.data1.focus();
return false;
}
 if(document.regform.cep.value=="" || document.regform.cep.value.length < 5)
{
alert( "Preencha campo cep corretamente!" );
regform.cep.focus();
return false;
}

 if(document.regform.endereco.value=="" || document.regform.endereco.value.length < 6)
{
alert( "Preencha campo Endereço corretamente!" );
regform.endereco.focus();
return false;
}

 if(document.regform.bairro.value=="" || document.regform.bairro.value.length < 4)
{
alert( "Preencha campo bairro corretamente!" );
regform.bairro.focus();
return false;
}

 if(document.regform.cidade.value=="" || document.regform.cidade.value.length < 4)
{
alert( "Preencha campo cidade corretamente!" );
regform.cidade.focus();
return false;
}

 if(document.regform.rg.value=="" || document.regform.rg.value.length < 8)
{
alert( "Preencha campo rg corretamente!" );
regform.rg.focus();
return false;
}

 if(document.regform.cpf.value=="" || document.regform.cpf.value.length < 8)
{
alert( "Preencha campo cpf corretamente!" );
regform.cpf.focus();
return false;
}




 if(document.regform.senha.value!=document.regform.senha2.value)
{
alert( "Senhas não conferem" );
regform.senha.focus();
return false;
} 



return true;


}


//-->
</SCRIPT>


</head>
<?   $data = date(" d/m/20y"); ?>

<body>
<form method="POST" action="?pg=valida_cadastro_curriculo" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
	<fieldset>
		
	<fieldset id="dp1">
		
		<label for="nome">Nome Completo : </label>
		<input type="text" name="nome" /><br />

		<label for="datainsc">Data da Inscrição :</label><br />
		<input type="text" name="datainsc" value="<? echo $data; ?>">


		<? include("data2.php"); ?>
		
		
		<label for="cep">CEP : </label><br />
		<input type="text" name="cep" OnKeyPress="formatar('#####-###', this)"/><br />

		<label for="endereco">Endereço : </label><br />
	    	<input type="text" name="endereco" /><br />
	
		<label for="bairro">Bairro : </label><br />
		<input type="text" name="bairro" /><br />


		<label for="cidade">Cidade : </label><br />
		<input type="text" name="cidade" /><br />


		<label for="uf">UF : </label><br />
		<select name="uf">
	  <option>AC
	    <option>AL
	      <option>AM
          <option>AP
          <option>BA
          <option>CE
          <option>DF
          <option>ES
          <option>GO
          <option>MA
          <option>MG
          <option>MS
          <option>MT
          <option>PA
          <option>PE
          <option>PB
          <option>PI
          <option>PR
          <option>RJ
          <option>RN
          <option>RO
          <option>RR
          <option selected="selected">RS
          <option>SC
          <option>SE
          <option>SP
          <option>TO
        </select>
	
		
		
			
		
</fieldset>	
	
		
	<fieldset id="dpp1">
	
	
		<label for="rg">RG : </label>
		<input type="text" name="rg" /><br />

		<label for="cpf">CPF : </label><br />
		<input type="text" name="cpf" OnKeyPress="formatar('###.###.###-##', this)"  /><br />

		<label for="fone">Fone : </label><br />
		<input type="text" name="fone" /><br />

		<label for="celular">Celular : </label><br />
		<input type="text" name="celular" /><br />
		
		<label for="celular">Email : </label><br />
		<input type="text" name="email" /><br />


		<label for="estadocivil">Estado Civil  : </label><br />
	     <select name="estadocivil">
		<option>Casado</option>
		<option>Divorciado</option>
		<option>Outros</option>
		<option>Separado Judicial</option>
		<option>Solteiro</option>
		<option>Viúvo</option>
	     </select>
		

		<label for="sexo">Sexo : </label><br />
	     <select name="sexo">
		<option>Masculino</option>
		<option>Feminino</option>
	     </select>


	
		<label for="cnh">Carteira de Habilitação  : </label><br />
		<select name="cnh">
		
		<option>Não
		<option>A
		<option>B
		<option>C
		<option>D
		<option>E
		<option>AB
		<option>AC
		<option>AD
		<option>AE
		</select>
	
		<label for="conducao">Possui Condução Própria : </label><br />
		<select name="conducao">
		<option>Não
		<option>Carro
		<option>Moto
		<option>Carro e Moto
		</select>
	
</fieldset>
</fieldset>
	

		<fieldset id="com">
	<legend>Dados para Candidatar-se a uma vaga</legend>
	<ul>
 
	<label for="nome">Login</label><br />
	<input type="text" name="login" /><br />
	<label for="Série">senha : </label><br />
	<input type="password" name="senha"/><br />
	<label for="Série">Repita a senha : </label><br />
	<input type="password" name="senha2"/><br />
	</ul>
		
	
	</fieldset>
	
	
	
	
	
	
	<fieldset id="com">
	<legend>Área Profissional </legend>
	<? include("pesqareaprofissional.php"); ?>
	</fieldset>
	
			
	
	<fieldset id="com">
	<legend>Ensino Fundamental</legend>
	<ul>
    <li><input type="checkbox" name="fundamental" value="completo"/><label for="completo">Completo</label></li>
    <li><input type="checkbox" name="fundamental" value="incompleto"/><label for="incompleto">Incompleto</label></li>
	<br />
	<label for="Série">Série : </label>
	<input type="text" name="serie_fundamental"/><br />
	</ul>
		
	
	</fieldset>
	
	<fieldset id="com">
	<legend>Ensino Médio</legend>
	<ul> 
	     <li><input type="checkbox" name="medio" value="completo"/><label for="completo">Completo</label></li>
	     <li><input type="checkbox" name="medio" value="incompeto"/><label for="incompleto">Incompleto</label></li>
	<br />
	<label name="serie_medio">Série : </label>
	<input type="text" name="serie_medio"/><br />
	</ul>
	</fieldset>
	
		


	<fieldset id="com">
	<legend>Ensino Técnico</legend>
	<ul>
    <li><input type="checkbox" name="tecnico" value="completo" /><label for="fca">Completo</label></li>
    <li><input type="checkbox"  name="tecnico" value="incompleto"/><label for="fca">Incompleto</label></li>
	<br />
    <label for="curso">Curso : </label><br />
    <input type="text" name="curso_tecnico" /><br />
	<br />
	<label for="nome">Semestre/Módulo :</label><br />
	<input type="text" name="serie_tecnico" /><br />
 	</ul>
	</fieldset>




	<fieldset id="com">
	<legend>Ensino Superior</legend>
	<ul>
	<li><input type="checkbox"  name="superior" value="completo" /><label for="fca">Completo</label></li>
 	<li><input type="checkbox"  name="superior" value="incompleto"/><label for="fca">Incompleto</label></li>
	<br />
	<label for="curso_superior">Curso : </label><br />
	<input type="text" name="curso_superior"/><br />
	<br />
	<label for="serie_superior">Semestre/Módulo : </label><br />
    <input type="text" name="serie_superior"/><br />
	</ul>
	</fieldset>

	
	
   	<fieldset id="dp1">
	<legend>Experiência profissional </legend><br /><br />
	<label for="empresa1">Empresa : </label><br />
	<input type="text" name="empresa1" /><br />
	<label for="cargo1">Cargo : </label><br />
	<input type="text" name="cargo1" /><br />
	<label for="atividade1">Atividades exercidas : </label><br />
	<textarea name="atividade1" rows="6" cols="17"></textarea>
	</fieldset>


     <fieldset id="dpp1">
        <legend>Experiência profissional  </legend><br /><br />
	 	<label for="empresa2">Empresa : </label><br />
		<input type="text" name="empresa2" /><br />
		<label for="cargo2">Cargo : </label><br />
		<input type="text" name="cargo2" /><br />
		<label for="atividade2">Atividades exercidas :</label><br />
		<textarea name="atividade2" rows="6" cols="17"></textarea>
 	</fieldset>


    <fieldset id="dp1">
		<legend>Experiência profissional  </legend><br /><br />
		<label for="empresa3">Empresa : </label><br />
		<input type="text" name="empresa3" /><br />
		<label for="cargo3">Cargo : </label><br />
		<input type="text" name="cargo3" /><br />
		<label for="atividade3">Atividades exercidas : </label><br />
		<textarea name="atividade3" rows="6" cols="17"></textarea>
  	</fieldset>
	



	<fieldset id="dpp1">
      	<label for="cursos_profissionalizantes">Cursos Profissionalizantes : </label><br />
		<textarea name="cursos_profissionalizantes" rows="6" cols="30"></textarea><br />
		<label for="conhecimentos_habilidades">Conhecimentos e Habilidades : </label><br />
		<textarea name="conhecimentos_habilidades" rows="6" cols="30"></textarea><br />
 	</fieldset>
	
	
	
 	<fieldset id="dp1">
    	<legend>Foto</legend>
 		<p>
		<p><input type="file" name="foto" /><br /><br />
		<input type="submit"  Value="Cadastrar"/></p>
 	</fieldset>
	
</form>
</body>
</html>
