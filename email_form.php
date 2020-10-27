Envia dados para o email informado em config.php ($mail_destino).Ultiliza a função mail.<br>

<form name="form1" method="post" action="?pg=email">
  <table width="100" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr> 
      <td valign="top" width="100" nowrap><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></td>
      <td> 
        <input class="form_campos" type="text" name="nome" size="34">
      </td>
    </tr>
    <tr> 
      <td valign="top" width="100" nowrap><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Cidade</font></td>
      <td> 
        <input class="form_campos" type="text" name="cidade" size="20">
      </td>
    </tr>
    <tr> 
      <td valign="top" width="100" nowrap><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Estado:</font></td>
      <td> 
        <input class="form_campos" type="text" name="estado" size="11">
      </td>
    </tr>
    <tr> 
      <td valign="top" width="100" nowrap><font size="2" face="Verdana, Arial, Helvetica, sans-serif">E-mail:</font></td>
      <td> 
        <input class="form_campos" type="text" name="email" size="34">
      </td>
    </tr>
    <tr> 
      <td valign="top" width="100" nowrap><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Assunto:</font></td>
      <td> 
        <select class="form_campos" name="assunto">
          <option class="form_campos" value="Opinião" selected>Opinião</option>
          <option class="form_campos" value="Sugestão">Sugestão</option>
          <option class="form_campos" value="Parceria">Parceria</option>
          <option class="form_campos" value="Reclamação">Reclamação</option>
          <option class="form_campos" value="Sem assunto">Outros</option>
        </select>
      </td>
    </tr>
    <tr> 
      <td valign="top" width="100" nowrap><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Mensagem:</font></td>
      <td> 
        <textarea class="form_campos" name="mensagem" cols="30" rows="4"></textarea>
      </td>
    </tr>
    <tr> 
      <td colspan="2"> 
        <div align="center"> 
          <input class="form_botao" type="submit" name="Enviar" value="Enviar Mensagem">
          <input class="form_botao" type="reset" name="Limpar" value="Limpar">
        </div>
      </td>
    </tr>
  </table>
</form>
<?
codigo_fonte('email.php');
?>
