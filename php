<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $empresa = htmlspecialchars($_POST['empresa']);
    $correo = htmlspecialchars($_POST['correo']);
    $servicio = htmlspecialchars($_POST['servicio']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $destinatario = "rodrigosaez3530@gmail.com";
    $asunto = "Nuevo mensaje desde la web";
    $contenido = "Nombre: $nombre\nEmpresa: $empresa\nCorreo: $correo\nServicio: $servicio\nMensaje:\n$mensaje";
    $headers = "From: noreply@tusitio.com\r\nReply-To: $correo";

    if(mail($destinatario, $asunto, $contenido, $headers)) {
        echo "<h2>✅ Mensaje enviado correctamente.</h2><a href='index.html'>Volver</a>";
    } else {
        echo "<h2>❌ Error al enviar el mensaje.</h2>";
    }
}
?>