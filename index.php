<?php
session_start();

$default_email = "rhenriquez@jx-nmm.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? $default_email; 
    $remember = isset($_POST["remember"]);

    // Validación del correo
    if ($email === "rhenriquez@jx-nmm.com") {
        $_SESSION["logged_in"] = true;
        $_SESSION["email"] = $email;

        // Acuérdate de mí
        if ($remember) {
            setcookie("email", $email, time() + (86400 * 30), "/"); 
        }
        
        // Redirige a dashboard
        header("Location: inicio.php");
        exit();
    } else {
        $error_message = "El correo electrónico no es válido.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">
    <div class="logo">
        <span>JX</span>
    </div>
    <h1>Por favor, inicia sesión</h1>

    <?php if (isset($error_message)): ?>
        <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="email">Dirección de correo electrónico</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                value="<?php echo htmlspecialchars($_POST['email'] ?? $_COOKIE['email'] ?? $default_email); ?>" 
                required
            >
        </div>
        <div class="form-group remember-me">
            <input type="checkbox" id="remember" name="remember" <?php echo isset($_COOKIE['email']) ? 'checked' : ''; ?>>
            <label for="remember">Acuérdate de mí</label>
        </div>
        <button type="submit" class="btn">Iniciar sesión</button>
    </form>

    <footer>
        <p>&copy; 2025</p>
    </footer>
</div>

</body>
</html>