<?
//Exibir tabela com Código Fonte do arquivo
function codigo_fonte($arquivo_var){
	if (file_exists($arquivo_var)){
	?>
	<table bgcolor="#CCCCCC" width="90%" cellspacing="0" cellpadding="15">
		<tr>
			<td bgcolor="#F9F9F9">
			Conteúdo do Arquivo - <b><? echo $arquivo_var; ?></b><br><br>
			<? $variavel = @ show_source("$arquivo_var"); ?>
			</td>
		</tr>
	</table>
	<?
	}
	else{
		echo "Nome de arquivo errado";
	}
}
?>