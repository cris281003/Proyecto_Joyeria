<?php

$errores = [];

// Comprobar que el formulario se haya enviado mediante POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Obtener los datos del formulario
    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    // Validar el nombre
    if ($nombre === "") {
        $errores[] = "El nombre es obligatorio.";
    }

    // Validar el correo
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico no es válido.";
    }

    // Validar el mensaje
    if ($mensaje === "") {
        $errores[] = "El mensaje es obligatorio.";
    }

    // Si no existen errores, redirigir a gracias.php
    if (count($errores) === 0) {

        header("Location: gracias.php");
        exit;

    }

} else {

    // Si alguien intenta entrar directamente, regresar al formulario
    header("Location: contacto.php");
    exit;

}

?>

<?php include "header.php"; ?>

<main class="contacto">

    <h1>Verifica tus datos</h1>

    <p>No pudimos procesar tu formulario por los siguientes motivos:</p>

    <ul>
        <?php foreach ($errores as $error): ?>

            <li>
                <?php echo htmlspecialchars($error); ?>
            </li>

        <?php endforeach; ?>
    </ul>

    <a href="contacto.php">Volver al formulario</a>

</main>

<?php include "footer.php"; ?>