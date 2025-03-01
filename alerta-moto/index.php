<?php 

$status_alert = false;
$message = "";
$alert_type = "";

if (!empty($_POST['mark']) &&
    !empty($_POST['model']) &&
    !empty($_POST['phonenumber']) &&
    !empty($_POST['email']) &&
    !filter($_POST['mark']) &&
    !filter($_POST['model']) &&
    !filter($_POST['phonenumber']) &&
    !filter($_POST['email'])) {

    if (!in_array($_POST['mark'], ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Ducati', 'KTM', 'BMW', 'Harley-Davidson', 'Aprilia', 'Triumph'])) {
        $status_alert = true;
        $message = "AVISO: Pon una marca válida.";
        $alert_type = "warning";
    } 
    else {
        $status_alert = true;
        $message = "Enviado con éxito.";
        $alert_type = "success";
        $email = $_POST['email'];
        $cmd = "echo 'Nuevo usuario interesado: ' $email | mail -s 'USUARIO - ALERTA MOTO' admin";
        exec($cmd);
    }
} 
else {
    $status_alert = true;
    $message = "ALERTA: Entrada maliciosa detectada o campos incompletos.";
    $alert_type = "danger";
}

function filter($str)
{
    $operators = ['|', ';', "\n", '"', "(", ")","$"];
    foreach ($operators as $operator) {
        if (strpos($str, $operator) !== false) {
            return true;
        }
    }

    $words = ['whoami', 'echo', 'cat', 'rm', 'cp', 'ls', 'curl','id', 'wget', 'cd', 'sudo', 'mkdir', 'man', 'history', 'ln', 'grep', 'pwd', 'file', 'find', 'kill', 'ps', 'uname', 'hostname', 'date', 'uptime', 'lsof', 'ifconfig', 'ipconfig', 'ip', 'tail', 'netstat', 'tar', 'apt', 'ssh', 'scp', 'less', 'more', 'awk', 'head', 'sed', 'nc', 'netcat', 'printf', 'ping', 'sh', 'sleep', 'base64'];
    foreach ($words as $word) { 
        if (strpos($str, $word) !== false) {
            return true;
        }
    }
    return false; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="icon" href="/images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Alerta Moto</title>
</head>
<body>
<div class="header-container">
        <header> 
            <p style="color: white;">
                <a style="color: white; font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" href="moto-pasion.dl">👉TU MOTO A BUEN PRECIO AQUI👈</a>
            </p>
        </header>
    </div>
    <header>
    <div class="navbar-container">
        <nav>
            <ul class="nav-links">
                <li><a href="/inventory">MOTOS DE OCASIÓN</a></li>
                <li><a href="/vender-mi-moto">¿VENDES TU MOTO?</a></li>
                <li><a href="/">IR ATRÁS</a></li>
                <li><a href="/contacto">CONTACTO</a></li>
            </ul>
        </nav>
    </div>
    </header>

<div class="tasa-moto">
    <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">¿No encuentras la moto que buscas?</h1>
    <p style="color: black; font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Adelantaté y registrate para recibir un correo electrónico cada vez que se publiqué una nueva moto</p>
    <p style="color: black; font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <p style="color: black; font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Si necesita ayuda ve <a href="/alerta-moto/ayuda.php" style="font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">AQUÍ</a></p>
    <div class="form-group">
        <form action="" method="POST">
        <p>Marca:</p>
            <input type="text" placeholder="" name="mark">

        <p>Modelo:</p>
            <input type="text" placeholder="" name="model">

        <p>Teléfono:</p>
            <input type="text" placeholder="" name="phonenumber">

        <p>Email:</p>
            <input type="text" placeholder="" name="email">
        <button class="button" role="button" style="font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">¡AVISAME!</button>
        </form>
    </div>
</div>

<div id="notification-area">
    <?php if ($status_alert): ?>
        <div id="alert-box" class="alert alert-<?php echo $alert_type; ?> alert-dismissible fade show" role="alert">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>
</div>


<footer>
    <div class="copyright">
    <p class="copyright" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><i class="bi bi-c-circle"></i> Copyright <a style="text-decoration: none; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;" href="http://moto-pasion.dl">Moto-Pasion</a></p>
    </div>
</footer>

<script src="/script.js"></script>

</body>
</html>