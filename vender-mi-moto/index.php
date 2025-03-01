<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $global_variables = [$_POST['mark'], $_POST['model'], $_POST['year'], $_POST['km']]; 
    $message = "";

foreach($global_variables as $variable) {
    if (!empty(htmlspecialchars($variable))) {
        $message = "La información se envió con exito, se le contactará por Gmail en un plazo de 2 a 7 días. Gracias por confiar en Moto-Pasión.";
    } else {
        $message = "Se requiere información.";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="/style.css">
    <title>¿VENDES TU MOTO?</title>
</head>
<body>
<div class="header-container">
        <header> 
            <p style="color: white;">
                <a style="color: white;" href="moto-pasion.dl">👉TU MOTO A BUEN PRECIO AQUI👈</a>
            </p>
        </header>
    </div>
    <header>
    <div class="navbar-container">
        <nav>
            <ul class="nav-links">
                <li><a href="/inventory">MOTOS DE OCASIÓN</a></li>
                <li><a href="/">IR ATRÁS</a></li>
                <li><a href="/alerta-moto">ALERTA MOTO</a></li>
                <li><a href="/contacto">CONTACTO</a></li>
            </ul>
        </nav>
    </div>
    </header>

<div class="tasa-moto">
    <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Tasa tu moto en 3 pasos</h1>
    <h1 style="font-size: 24px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <?php
    echo $message;
    ?>
    </h1>

<h2>

</h2>

    <div class="form-group">
        <p>Marca:</p>
        <form action="" method="POST">
            <input type="text" placeholder="" name="mark">
        </form>
    </div>

    <div class="form-group">
        <p>Modelo:</p>
        <form action="" method="POST">
            <input type="text" placeholder="" name="model">
        </form>
    </div>
    <div class="form-group">
        <p>Año:</p>
        <form action="" method="POST">
            <input type="number" placeholder="" name="year">
        </form>
    </div>
    <div class="form-group">
        <p>Kilómetros:</p>
        <form action="" method="POST">
            <input type="number" placeholder="" name="km">
            <button class="button" role="button" style="font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Send</button>
        </form>
    </div>
</div>

</div>

<footer>
    <div class="copyright">
    <p class="copyright" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><i class="bi bi-c-circle"></i> Copyright <a style="text-decoration: none; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;" href="http://moto-pasion.dl">Moto-Pasion</a></p>
    </div>
</footer>

</body>
</html>
