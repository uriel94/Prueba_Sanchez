<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form method="post" action="?">
<input type="text" name="nombre"/>
<input type="password" name="contra"/>
<input type="submit" name="Aceptar" value="Aceptar"/>
</form>
</body>
<?php
if(isset($_POST['Aceptar'])){
	echo'Bien hecho';
	}
?>
</html>