<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $to = "roigoivixucei-7683@yopmail.com"; // Cambia esto por tu correo
    $subject = "Nuevo formulario enviado";
    $message = "Nombre: $nombre\nEmail: $email";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método no permitido.";
}
?>
