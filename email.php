<?php
//Testa campos obrigat�rios
if ($nome!="" and $mensagem!="" and $email!=""){
	$msg.="Nome: $nome\n";
	$msg.="Cidade: $cidade\n";
	$msg.="Estado: $estado\n";
	$msg.="E-mail: $email\n";
	$msg.="Assunto: $assunto\n";
	$msg.="$mensagem\n";
	
	if (@ mail ($mail_destino, $assunto, $msg, $mail_header)){
		//Imprimindo confirma��o de envio
		?>
			<meta http-equiv=refresh content=5;URL=index.php>
			<? echo $nome; ?>, sua mensagem foi enviada com sucesso!
			Obrigado!<br><br>
		<?
		//Enviando mensagem de confirma��o para o email do internauta
		@ mail ($email, $assunto, $msg_reply, $mail_header);
	}
	else{
		?>
			<meta http-equiv=refresh content=5;URL=index.php>
			<center><br><br><font color="red"><b>Erro ao enviar e-mail!</b></font></center>
		<?
	}
}
else{
	//Alerta sobre os campos obrigat�rios
	?>
		<br><br><center>
		<? echo $msg_erro; ?> <br><br>
		<a href="javascript:window.history.go(-1)" class="links">Por favor, volte e preencha corretamente.</a>
		</center>
	<?
}
?>