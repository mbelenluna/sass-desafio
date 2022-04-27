<?php

$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$telefono = $_POST ['telefono'];
$idiomafuente = $_POST ['source-language'];
$idiomaobjetivo = $_POST ['target-language'];
$mensaje = $_POST ['message'];

$para = 'rolltranslations@gmail.com';
$asunto = 'New Submission from Contact Us';

mail($para, $asunto, utf8_decode($mensaje));

header('Location:exito.html')

?>