<? //session_start();
  //$acesso = $_SESSION["acesso"];
//  echo "--- $acesso ---";
//  echo "=== $nome ===";
 // if (! $acesso)
  //{
  // <script> window.location.href = '?pg=empresa'; </script>  } ?> 


<? $id=$_GET['id']; ?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Untitled Document</title></head>

<body>


<div align="center"><a href="#" class="lbAction" style="text-decoration:none; color:#000000; " rel="deactivate"><strong>&Aacute;REA RESTRITA DA EMPRESA </strong></a></div>


<br><br>
	
	


<div align="center"> <img src="extra/empresa.jpg" width="300" height="200" /> </div>
    <br><br>
<div align="center"><a href="?pg=cadastrar_vaga&id=<? echo $id; ?>" style="text-decoration:none; color:#FF0000; " rel="deactivate"><strong>CADASTRAR VAGA </strong></a></div>
<br><br>

<div align="center"><a href="?pg=cadastrar_vaga" style="text-decoration:none; color:#FF0000; " rel="deactivate"><strong>LISTAR VAGA </strong></a></div>
<br><br>
<div align="center"><a href="?pg=cadastrar_vaga" style="text-decoration:none; color:#FF0000; " rel="deactivate"></a></div>
<br><br>
</body>
</html>
