<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro Área Profissional</title>
<SCRIPT> 
<!--
function valida()
{
 if(document.regform.area_profissional.value=="" || document.regform.area_profissional.value.length < 4)
{
alert( "Preencha o campo Área Profissional corretamente!" );
regform.area_profissional.focus();
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

	
<FORM ACTION="?pg=valida_area_profissional" METHOD="POST" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
	
	<legend>Cadastrar Área Profissional </legend>
		<fieldset>
		
	<fieldset id="dp1">
	
					
		<label for="area_profissional">Área Profissional : </label><BR />
		<input type="text" name="area_profissional"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
	
							
				
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
