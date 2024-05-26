<!doctype html>
<html lang="es">
<head >
   <title>D&B</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   <!- LOGIN ->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!- STYLESHEET->
   <link rel="stylesheet" href="../style_login.css?v=<?php echo time(); ?>">

</head>

<body>

   <div class="section">
      <div class="container">
         <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
               <div class="card-3d-wrap-verif mx-auto">
                  <div class="card-front">
                     <div class="center-wrap">
                        <div class="section text-center">
                           <h4 class="mb-3  left">Verificación</h4>
                              <p class="left verif_text">Le enviamos un token de verificación a su correo eléctronico, por favor ingreselo asi podemos validar su usuario</p>

                                 
                              <form action="verificacion_usuario.php" method="GET">

                                 <div class="form-group">
                                    <input type="email" class="form-styles" placeholder="Token" name="token" required="" >
                                    <i class="input-icon uil uil-user"></i>
                                 </div>	

                                 
                                 <input class="btn mt-4 a_link" type="submit" value="Verificar" name="entrada">

                              </form>
                              <?php
                                 include "../conexion.php";
                                 
                                 require "../../PHPMailer/src/Exception.php";
                                 require "../../PHPMailer/src/PHPMailer.php";
                                 require "../../PHPMailer/src/SMTP.php";
                                 use PHPMailer\PHPMailer\PHPMailer;
                                 use PHPMailer\PHPMailer\Exception;
                                 
                                 
                                 // Consigo el ultimo mail ingresado
                                 $result = mysqli_query($link,"SELECT  * FROM usuarios ORDER BY  ID DESC LIMIT 1");
                                 $ultima_fila = mysqli_fetch_assoc($result);
                                 $email = $ultima_fila['Email'];
                                 $nombre = $ultima_fila['Nombre'];
                                 $apellido = $ultima_fila['Apellido'];

                                 $body = "Hola $nombre $apellido,\n\nEste es el cuerpo del mensaje.";
                                 $asunto = "Correo de prueba";

                                 $mailer = new PHPMailer(true);

                                 try {
                                    // Configuración del servidor SMTP
                                    $mailer->isSMTP();
                                    $mailer->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
                                    $mailer->SMTPAuth = true;
                                    $mailer->Username = 'genaro20038@gmail.com'; // Tu correo de Gmail
                                    $mailer->Password = 'zzpr srul nywp sbpd'; // Tu contraseña de Gmail
                                    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                    $mailer->Port = 587; // Puerto SMTP para TLS

                                    // Configuración del correo
                                    $mailer->setFrom('shoppingDB@gmail.com', 'Nombre de tu sitio web');
                                    $mailer->addAddress("genaro20038@gmail.com", "$nombre $apellido");
                                    $mailer->Subject = "$asunto";
                                    $mailer->Body = $body;

                                    // Enviar el correo
                                    if ($mailer->send()) {
                                          echo 'Correo enviado correctamente.';
                                    } else {
                                          echo 'Error al enviar el correo.';
                                    }
                                 } catch (Exception $e) {
                                    echo "Error al enviar el correo: {$mailer->ErrorInfo}";
                                 }
                                 
                                 //$sql = "UPDATE usuarios SET estado_logico='2' WHERE id=$ultima_id";
                                 /*
                                 0 = DADO DE BAJA LOGICA
                                 1 = ACTIVO
                                 2 = NO VERIFICADO
                                 */

                                 mysqli_close($link);

                              ?>
                              
                           <div  class=" tc">
                              <p class="mb-0 mt-4">¿No le llego el token? </p>
                              <a class="btn a_link btn-alt " href="reenviar.php">Reenviar</a>
                           </div>
                        </div>  
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


<!- Botones de redes sociales ->
   <ul class="wrapper">
      <li class="icon facebook">
         <span><i class="fab fa-facebook-f"><a src="https://www.instagram.com/alan_rod18/"></a></i></span>
      </li>
      <li class="icon youtube">
         <span><i class="fab fa-youtube"><a href="home.php"></a></i></span>
      </li>
      <li class="icon tiktok">
         <span><i class="fab fa-tiktok"><a href="https://www.instagram.com/alan_rod18/"></a></i></span>
      </li>
      <li class="icon instagram">
         <span><i class="fab fa-instagram"><a href="https://www.instagram.com/alan_rod18/"></a></i></span>
      </li>
   </ul>

</body>

</html>

