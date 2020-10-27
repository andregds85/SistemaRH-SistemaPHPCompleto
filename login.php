<html>
<head>
<style type="text/css">
<!--
form.login { background-color: #FFFFCC;
width:400px;
height:150px;
font: 15px Verdana, sans-serif;
color: #003399;
border: 2px solid #0000FF;
padding-left:10px;
}
-->
</style>
<SCRIPT>
<!--
function valida()
{
 if(document.regform.login.value=="" || document.regform.login.value.length < 4)
{
alert( "Preencha campo login corretamente!" );
regform.login.focus();
return false;
}
if( document.regform.senha.value=="" ||  document.regform.senha.value.length < 4)

{
alert( "Preencha campo senha corretamente!" );
document.regform.senha.focus();
return false;
}


return true;

}


//-->
</SCRIPT>

</head>
<body>



<form method="POST"  action="?pg=valida_usuario_empresa" class="login"  NAME="regform"
    onsubmit="return valida()">
  <br>
<label>Login</label><br>
<input name="login" type="text"
tabindex="1" size="15"><br>

<label>Senha:</label><br>
<input name="senha" type="password"
tabindex="2" size="15"><br><br>
<input type="submit" name="Submit"
value="Acessar" tabindex="3">

</form>
</body>
</html>















