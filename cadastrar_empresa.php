<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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


 if(document.regform.cnpj.value=="" || document.regform.cnpj.value.length < 8)
{
alert( "Preencha campo cnpj corretamente!" );
regform.cnpj.focus();
return false;
}
 if(document.regform.endereco.value=="" || document.regform.endereco.value.length < 4)
{
alert( "Preencha campo Endereço corretamente!" );
regform.endereco.focus();
return false;
}

 if(document.regform.telefone.value=="" || document.regform.telefone.value.length < 6)
{
alert( "Preencha campo Telefone corretamente!" );
regform.telefone.focus();
return false;
}
 
if( document.regform.email.value=="" || document.regform.email.value.indexOf('@')==-1 || document.regform.email.value.indexOf('.')==-1 )
{
alert( "Preencha campo E-MAIL corretamente!" );
document.regform.email.focus();
return false;
} 
 
 
 if(document.regform.login.value=="" || document.regform.login.value.length < 4)
{
alert( "Preencha campo Login corretamente!" );
regform.login.focus();
return false;
}

 if(document.regform.senha1.value=="" || document.regform.senha1.value.length < 5)
{
alert( "Preencha campo senha corretamente! mínimo 5  Caracteres" );
regform.senha1.focus();
return false;
}

 if(document.regform.senha2.value=="" || document.regform.senha2.value.length < 5)
{
alert( "Preencha campo Senha corretamente! mínimo 5  Caracteres" );
regform.senha2.focus();
return false;
}

 if(document.regform.senha1.value!=document.regform.senha2.value)
{
alert( "Senhas não conferem" );
regform.senha1.focus();
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
<?   $data = date(" d-y-m"); ?>


<? //<form  name="regform" method="POST" action="?pg=valida_cadastro_empresa">?>
	
<FORM ACTION="?pg=valida_cadastro_empresa" METHOD="POST" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
	
	
	<fieldset>
		<legend> </legend>
	<fieldset id="dp1">
	
					
		<label for="nome">Nome : </label><BR />
		<input type="text" name="nome"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
	
			<label for="nome">CNPJ : </label><BR />
		</span><input type="text" name="cnpj"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
		
		
			<label for="nome">Endereço : </label><BR />
		</span><input type="text" name="endereco" size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
		
		
			<label for="nome">Telefone : </label><BR />
		</span><input type="text" name="telefone"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
				
				
				
				
</fieldset>	

		
	<fieldset id="dpp1">
	
					
		<label for="nome">Email :  </label><BR />
		<input type="text" name="email"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
	
			<label for="nome">Login :</label><BR />
		</span><input type="text" name="login"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
		
		
			<label for="nome">Senha : </label><BR />
		</span><input type="password" name="senha1"  size="60"/>	
		<span class="campoObrigatorio">*&nbsp;</span><br /><br />
		
		
		
			<label for="nome">Confirmar Senha :</label><BR />
		</span><input type="password" name="senha2"  size="60"/>	
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
