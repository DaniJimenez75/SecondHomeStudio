<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['asunto'];

echo $nombre. " ha dicho:<br/>".$mensaje."<br/>";

if(mail('secondhomestudio@secondhomestudio.cat', $asunto, $mensaje)){
	echo "mail enviado";
}else{
	echo "no se ha enviado";
}

?>