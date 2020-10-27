<?
//Configuraçoes do Site
/*******************************/
$app_nome	= "PHP Site Basic";//Nome do projeto
$app_vrs	= " 1.0.2";					//Verção do Projeto				
$pg_titulo		= "SISTEMA PARA EMPRESAS DE CONSULTORIA EM RECRUTAMENTO E SELEÇÃO";	//Titulo que aparece no Browser
$cor_site	= "#339999";		// Cor do Site
$app_host	= "localhost";		//Hosd em que o sute esta hospedado
$nome_admin	= "André Gomes da Silva";	//Administrador do Site
$email_admin= "php@apoena.cjb.net";	//Email do Administrador oo site
$pg_inicial = 'inicial.php'; //Página Inicial do Site

//Imagens
$img_logo	= "logo.png";				//Logo do Site
$img_fundo_cab= "fundo_cabecalho.gif";	//Imagem de Fundo do cabeçalho
$img_rodape = "fundo_rodape.gif";		//Imagem do Rodapé
$img_icone_menu = "setinha.gif";		//Imagem do Rodapé

//PATHS
/*******************************/
$path_img 	= "img/";			//path de Imagens

//BANCO DE DADOS
/*******************************/
$bd_host	= 'localhost';		//Host
$bd_user  	= 'root';			//Usuário do Banco de Dados
$bd_senha 	= '';				//Senha do Banco de Dados
$bd 	= 'PhpSiteTemplate';	//Banco de Dados

//UPLOAD
/*******************************/
$upload_max_file	= "900000";
$upload_dir_default	= "uploads";	//Diretório Padrão


//Algumas Sugestões de cores
/*******************************
* Verde1    	#339999
* Verde2    	#006666
* Verde3     	#009966
* Azul      	#33669
* Azulesc    	#003366
* Roxo       	#666699
* Laranja    	#FF9900
* Laranjaesc 	#E88B00
* Cinza	    	#666666
* Cinzaclaro   	#E1E1E1
* Vermelho  	#993333
********************************/

//Configuraçoes do formulário de Contato
/*******************************/

//Seu email, para onde irao as informações do formulário
$mail_destino	= "seuemail@seuhost.com.br";
//Mensagem de cabeçalho do email
$mail_header	= "Mensagem enviada pelo formulario do Site Basic Template.";
//Mensagem de Erro
$msg_reply		= " $nome, recebemos o seu email. Obrigado por entrar em contato.";
$msg_erro		= "Atenção!! Os campos <font color=$cor_site><b>Nome, Mensagem e E-mail</b></font> não podem estar em branco.";
?>
