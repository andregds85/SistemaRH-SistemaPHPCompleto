<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>

<SCRIPT> 
<!--
function valida()
{
 if(document.regform.titulo.value=="" || document.regform.titulo.value.length < 4)
{
alert( "Preencha campo título corretamente!" );
regform.titulo.focus();
return false;
}

 if(document.regform.quantidade.value=="")
{
alert( "Preencha campo quantidade corretamente!" );
regform.quantidade.focus();
return false;
}

 if(document.regform.descricao.value=="" || document.regform.descricao.value.length < 4)
{
alert( "Preencha campo descricao corretamente!" );
regform.descricao.focus();
return false;
}
 
 if(document.regform.cargo.value=="" || document.regform.cargo.value.length < 3)
{
alert( "Preencha campo cargo corretamente!" );
regform.cargo.focus();
return false;
}

 if(document.regform.salario.value=="" || document.regform.salário.value.length < 3)
{
alert( "Preencha campo salário corretamente!" );
regform.salario.focus();
return false;
}

 if(document.regform.escolaridade.value=="" || document.regform.escolaridade.value.length < 4)
{
alert( "Preencha campo escolaridade corretamente!" );
regform.escolaridade.focus();
return false;
}

 if(document.regform.local_de_trabalho.value=="" || document.regform.local_de_trabalho.value.length < 4)
{
alert( "Preencha campo local de trabalho corretamente!" );
regform.local_de_trabalho.focus();
return false;
}







return true;
 
}
 

//-->
</SCRIPT>






<style type="text/css">
<!--
@import url("styleCurriculo.css");
-->
</style>

</head>
<?   $data = date(" d/m/y"); 

  

?>

<? //<form  name="regform" method="POST" action="?pg=valida_cadastro_empresa">?>
	
<FORM ACTION="?pg=valida_cadastro_vaga" METHOD="POST" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
	
	
	<fieldset>
	
<fieldset id="com">
		
			<label for="nome">id da Empresa : <?  echo $id=$_GET['id']; ?></label><BR />
			<input type="hidden" name="id_empresa" value="<? echo $id; ?> "  size="60"/>	<br />
			
			<label for="nome">Status : Não </label><BR />
			<input type="hidden" name="status" value="nao" size="60"/>	

</fieldset>
<legend> </legend>

	<fieldset id="dp1">
	
					
		<label for="titulo">Titulo : </label><BR />
		<input type="text" name="titulo"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
	
		<label for="quantidade">Quantidade :</label><BR />
		<input type="text" name="quantidade"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
		
		<label for="descricao">Descrição : </label><br />
		<textarea name="descricao" rows="6" cols="27"></textarea>
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		

		<? include("pesqareaprofissional2.php"); ?> 
								
			
        <label for="cargo">Cargo :</label><BR />
		<input type="text" name="cargo" size="60" />
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
				
</fieldset>	
<fieldset id="dpp1">
	
					
		<label for="salario">Salario :  </label><BR />
		<input type="text" name="salario"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
	
		<label for="nome">Escolaridade :</label><BR />
		<input type="text" name="escolaridade"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
				
		<label for="nome">Local de Trabalho : </label><BR />
		<input type="text" name="local_de_trabalho"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
				
		<label for="cargo">Forma de Contratação : </label><BR />
		<input type="text" name="forma_de_contratacao"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
				 
		
		
		<? include("data.php"); ?> 
			
</fieldset>			
</fieldset>


	<fieldset id="com">
			<p><INPUT TYPE="submit" VALUE="Enviar">

		   <input type="reset"  Value="Limpar" id="limpar" /></p>
</form>
			
	</fieldset>
	

<body>
</body>
</html>
