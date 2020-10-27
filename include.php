<?php
//verifica se ha algum valor para $pg. Se nao houver, inclui padrao
$pg=$_GET["pg"];

if(!isset($pg) || $pg == ""){
	if(file_exists("$pg_inicial")){
		include("$pg_inicial");
	}
	else{
		echo "$pg_inicial.php não existe.";
	}
}
else{
	// verificacao de seguranca
	// se $pg possuir / nega o acesso e envia um e-mail para seguranca
	$pg_check = strstr($pg, '/');
	if($pg_check){
		$data = date("D M j, H:i:s"); 
		?>
		<br>
		<center><font size="3" face="Verdana"><br>
		<p><b>Acesso negado - violação de segurança</b><br>
		<p><b>IP de origem: <font color=red><? echo $REMOTE_ADDR; ?></font></b><br>
		<p><b>Data: <? echo $data; ?>
		<p>Seus dados foram remetidos via e-mail para a segurança.<br></b>
		<p><b>Administrador: <font color=red> <? $nome_admin; ?></font></p><br>
		</b></font></center>
		<?
		//Mensagem do Email
		$msg = "VIOLAÇÃO DE SEGURANÇA \n\n\nAlguém com IP $REMOTE_ADDR tentou acessar o arquivo $pg
			     através do arquivo $PHP_SELF em http://$app_host.$PHP_SELF .\n\n Data: $data ";

		//Envia email para o Administrador do Sistema
		@ mail($email_admin,"Violação de segurança",$msg);
	}
	else{
		// se $pg passou na verificacao , inclui normalmente
		if(file_exists("$pg.php")){
			include("$pg.php");
		}
		else{
			echo "Arquivo <b>$pg</b> não existe!";
		}
	}
}
?>
