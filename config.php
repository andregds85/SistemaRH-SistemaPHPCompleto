<?
//Configura�oes do Site
/*******************************/
$app_nome	= "PHP Site Basic";//Nome do projeto
$app_vrs	= " 1.0.2";					//Ver��o do Projeto				
$pg_titulo		= "SISTEMA PARA EMPRESAS DE CONSULTORIA EM RECRUTAMENTO E SELE��O";	//Titulo que aparece no Browser
$cor_site	= "#339999";		// Cor do Site
$app_host	= "localhost";		//Hosd em que o sute esta hospedado
$nome_admin	= "Andr� Gomes da Silva";	//Administrador do Site
$email_admin= "php@apoena.cjb.net";	//Email do Administrador oo site
$pg_inicial = 'inicial.php'; //P�gina Inicial do Site

//Imagens
$img_logo	= "logo.png";				//Logo do Site
$img_fundo_cab= "fundo_cabecalho.gif";	//Imagem de Fundo do cabe�alho
$img_rodape = "fundo_rodape.gif";		//Imagem do Rodap�
$img_icone_menu = "setinha.gif";		//Imagem do Rodap�

//PATHS
/*******************************/
$path_img 	= "img/";			//path de Imagens

//BANCO DE DADOS
/*******************************/
$bd_host	= 'localhost';		//Host
$bd_user  	= 'root';			//Usu�rio do Banco de Dados
$bd_senha 	= '';				//Senha do Banco de Dados
$bd 	= 'PhpSiteTemplate';	//Banco de Dados

//UPLOAD
/*******************************/
$upload_max_file	= "900000";
$upload_dir_default	= "uploads";	//Diret�rio Padr�o


//Algumas Sugest�es de cores
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

//Configura�oes do formul�rio de Contato
/*******************************/

//Seu email, para onde irao as informa��es do formul�rio
$mail_destino	= "seuemail@seuhost.com.br";
//Mensagem de cabe�alho do email
$mail_header	= "Mensagem enviada pelo formulario do Site Basic Template.";
//Mensagem de Erro
$msg_reply		= " $nome, recebemos o seu email. Obrigado por entrar em contato.";
$msg_erro		= "Aten��o!! Os campos <font color=$cor_site><b>Nome, Mensagem e E-mail</b></font> n�o podem estar em branco.";
?>
