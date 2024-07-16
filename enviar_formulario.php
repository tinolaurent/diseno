<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Configurar el correo electrónico
    $destinatario = "l_saaved@hotmail.com"; // Reemplaza con tu dirección de correo electrónico
    $asunto = "Mensaje desde mi pagina";

    // Construir el cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n\n";
    $cuerpoMensaje .= "Mensaje:\n $mensaje\n";

    // Encabezados del correo
    $headers = "From: $nombre <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar el correo electrónico
    if (mail($destinatario, $asunto, $cuerpoMensaje, $headers)) {
        // Mensaje si se envía correctamente
        echo "Mensaje enviado satisfactoriamente.";
    } else {
        // Mensaje si hay un error
        echo "No se pudo enviar el mensaje. Por favor, confirma tus datos.";
    }
}
?>
