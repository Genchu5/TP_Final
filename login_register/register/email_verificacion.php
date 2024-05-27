<?php
    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/SMTP.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Cuerpo del mail
    $token_sistema = rand(100000,999999);
    $body ='
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de email</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: whitesmoke;
        }

        .contenedor {
            display: table;
            width: 100%;
            height: 100%;
        }

        .contenedor-adentro {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }

        .contenido {
            font-size: 40px;
            font-weight: bold;
            border-radius: 10px;
            background-color: whitesmoke;
            width: 250px;
            height: 100px;
            line-height: 100px;
            margin: auto;
            letter-spacing:6px;
        }

        .email-body {
            border-top: 30px;
            border-left: 200px;
            border-right: 200px;
            border-bottom: none;
            border-style: solid;
            border-color: whitesmoke;
            background-color: white;
        }

        .email-contenido {
            padding-left: 50px;
        }

        .email-titulo {
            font-size: 40px;
        }

        .email-msj {
            font-size: 20px;
            font-weight: lighter;
            margin-bottom: 100px;
        }
        .lineas{
            margin: 10px;
        }
    </style>
    </head>
    <body>
    <div class="email-body">
        <img src="http://localhost/TP_Final/img/logo1_fondo_white.png">
        <hr class="lineas">
        <div class="email-contenido">
            <h2 class="email-titulo">Verifica tu nueva cuenta de Shopping DB</h2>
            <h5 class="email-msj">Hola ' . $nombre . ', aquí te dejamos el token para poder verificar tu cuenta.</h5>

            <div class="contenedor">
            <div class="contenedor-adentro">
            <div class="contenido">
            ' . $token_sistema . '
            </div>
            </div>
            </div>

            <h5 class="email-msj" style="text-align: center;">Ingrésalo para poder verificar tu cuenta.</h5>
        </div>
        <hr class="lineas">
</div>
    </body>
    </html>
    ';

    $asunto = "Verifica tu nueva cuenta de Shopping DB";
    $mail = new PHPMailer(true);

    try {
    // Configuración del servidor SMTP

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
    $mail->SMTPAuth = true;
    $mail->Username = 'shopping.db.2024@gmail.com'; // Tu correo de Gmail
    $mail->Password = 'hrzt dymf xxnh dmne'; // Tu contraseña de Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // Puerto SMTP para TLS

    // Configuración del correo
    $mail->isHTML(true);
    $mail->setFrom('shoppingDB@gmail.com','ShoppingDB');
    $mail->addAddress("genaro20038@gmail.com", "$nombre $apellido");
    $mail->Subject = "$asunto";
    $mail->Body = $body;

    // Enviar el correo
    $enviado = ($mail->send());
    if (!$enviado) {
            echo 'Error al enviar el correo.';
    }
    } catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }

?>