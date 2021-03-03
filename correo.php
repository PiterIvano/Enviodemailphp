
<?php
#creado por piter
#donaciones https://paypal.me/piterivano?locale.x=es_XC

    $destino = $_POST["email2"];
    $asunto =  $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $headers = "From: $_POST[email1]";
    mail($destino, $asunto, $mensaje, $headers);
    header("Location: enviado.html");
?>
