<?php 

if(!empty($_POST['email'] && !empty($_POST['title']) && !empty($_POST['message']))) {
    $alert = "";
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Gracias por ponerte en contacto con nosotros, el soporte le contactará lo más rapido posible.')</script>";
    } else {
        $alert = "Se requiere de un email válido.";
    }
} else {
    $alert = "Se requiere que los campos no esten vacios.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="/style.css">    
    <title>Contacto</title>
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
                <li><a href="/alerta-moto">ALERTA MOTO</a></li>
                <li><a href="/">IR ATRÁS</a></li>
            </ul>
        </nav>
    </div>
    </header>

<div class="contact">
    <p style="color: red; font-weight: bold; font-size: 20px;">
        <?php echo $alert;?>
    </p>
    <form action="" method="POST">
        <h2>Correo electrónico</h2>
        <input style="width: 250px;" type="text" name="email">
        <h2>Título</h2>
        <input style="width: 250px;" type="text" name="title">
        <h2>Mensaje</h2>
        <input style="width: 500px; height: 240px;" type="text" name="message">
        <button role="button">Enviar</button>
    </form>
</div>    



</body>
</html>