<?
include ("config.php");
include ("connect.php");
include ("inc_funcoes.php");
?>
<html>
<head>
<title><? echo $pg_titulo; ?></title>
<meta http-equiv="Content-Type" content="text/html;">
<link rel="stylesheet" href="class.css" type="text/css">
</head>
<body bgcolor="<? echo $cor_site; ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="357" valign="top" background="<? echo $path_img.$img_fundo_cab; ?>">
		<a href="index.php">
		<img src="<? echo $path_img.$img_logo; ?>" border="0" alt="Home">
		</a> 
    </td>
    <td nowrap background="<? echo $path_img.$img_fundo_cab; ?>">

	<font class="texto_data"> 
          <? include("dataagora.php"); ?>
	</font>
<div align="right"> </div>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="174" valign="top" nowrap> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
          <?php
		  	if(file_exists("menu.php"))
				{
				include ("menu.php");
				}
			else
				{
				echo "menu.php não existe";
				}
		  ?>
          </td>
        </tr>
      </table>
      <br>
      <font color="#000000"> </font> </td>
    <td valign="top"> <br>
      <table width="98%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td><font class="texto">
		  <? require("include.php")?>
            </font></td>
        </tr>
      </table>
      <p><font face="verdana" size="2"></font></p>
    </td>
    <td width="130" valign="top">
     <?php
	 	if(file_exists("banners.php"))
			{
			include ("banners.php");
			}
		else
			{
			echo "banners.php não existe;";
			}
	 ?>
    </td>
  </tr>
  <tr>
    <td valign="top" nowrap height="16">
      <div align="center"><font size="2"> </font></div>
    </td>
    <td valign="top" nowrap height="16">
      <div align="center"><font size="2"></font></div>
    </td>
    <td valign="top" nowrap height="16">
      <div align="right"></div>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td height="16" valign="top" background="<? echo $path_img.$img_rodape; ?>"> 
      <div align="center"></div>
      <div align="right"></div>
    </td>
    <td background="<? echo $path_img.$img_rodape; ?>"> 
      <div align="center"><font class="texto_data"><font face="Verdana, Arial, Helvetica, sans-serif">ankweb@
        André gomes da Silva - 2009</font></font></div>
    </td>
    <td valign="top" height="16" background="<? echo $path_img.$img_rodape; ?>"><img src="<? echo $path_img.$img_rodape; ?>"></td>
  </tr>
</table>
</body>
</html>
