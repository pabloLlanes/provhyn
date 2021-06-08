<?php
/**

 

if (empty($_POST["elNombre"])) {
    exit("Falta el nombre");
}
*/

if (empty($_POST["elCorreo"])) {
    exit("Falta el correo");
}

if (empty($_POST["elMensaje"])) {
    exit("Falta el mensaje");
}
$nombre = $_POST["elNombre"];
$empresa = $_POST["laEmpresa"];
$correo = $_POST["elCorreo"];
$mensaje = $_POST["elMensaje"];
$telefono = $_POST["elTel"];

$motivo = $_POST["elMotivo"];

$correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
if (!$correo) {
    echo "Correo inválido. Intenta con otro correo.";
    exit;
}

$asunto = "Mensaje desde web provhyn.com.ar de: ";

$datos = "De: $nombre \nEmpresa: $empresa\nCorreo: $correo\nTelefono: $telefono\nMensaje: $mensaje";
$mensaje = "Contacto desde la web Provhyn :\n$datos";
$destinatario = "pablojllanes@gmail.com"; # aquí la persona que recibirá los mensajes
$encabezados = "Sender: pablojllanes@gmail.com\r\n"; # El remitente, debe ser un correo de tu dominio de servidor
$encabezados .= "From: $nombre <" . $correo . ">\r\n";
$encabezados .= "Reply-To: $nombre <$correo>\r\n";
$resultado = mail($destinatario, $asunto, $mensaje, $encabezados);
if ($resultado) {
    
header('Location:contacto.html');


} else {
    echo "Tu mensaje no se ha enviado. Intenta de nuevo.";
}
