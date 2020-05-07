<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CREACION DE ARCHIVO DE TEXTO</title>
</head>

<body>
	  <?php
  $ar = fopen("datos.txt", "a") or 
die("Problemas en la creacion"); 
  fputs($ar, $_REQUEST['nombre']);
  fputs($ar, "\n");
  fputs($ar, $_REQUEST['comentarios']);
  fputs($ar, "\n");
  fputs($ar, "--------------------------------------------------------");
  fputs($ar, "\n");
  fclose($ar);
  echo "Los datos se guardaron correctamente.";
  ?>


</body>
</html>