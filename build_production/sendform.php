<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y limpiar los datos del formulario
    $name = clean_input($_POST["name"]);
    $phone = clean_input($_POST["phone"]);
    $email = clean_input($_POST["email"]);
    $service = clean_input($_POST["service"]);

    // Aquí puedes realizar cualquier validación adicional necesaria

    // Enviar el correo electrónico o guardar en la base de datos, etc.
    // Por ejemplo, si quieres enviar un correo electrónico con los datos:
    $to = "tu@example.com";
    $subject = "Nuevo formulario de contacto";
    $message = "Nombre: $name\n";
    $message .= "Teléfono: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Servicio: $service\n";
    // Aquí puedes personalizar el mensaje según tus necesidades

    // Envía el correo electrónico
    mail($to, $subject, $message);

    // Redirecciona o muestra un mensaje de éxito
    header("Location: /thank-you");
    exit;
}

// Función para limpiar los datos del formulario
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
