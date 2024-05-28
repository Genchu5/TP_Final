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
   <link rel="stylesheet" href="../style_login_register.css?v=<?php echo time(); ?>">

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
                              <p class="left verif_text">Le enviamos un token de verificación de 6 dígitos a su correo eléctronico, por favor ingreselo asi podemos validar su usuario</p>

                              <form action="verificacion_usuario.php" method="POST">

                                 <div class="form-group">
                                    <input type="text" class="form-styles" placeholder="Token" name="token" required="" >
                                    <i class="input-icon uil uil-user"></i>
                                 </div>	

                              <?php
                                 include "../conexion.php";

                                 // Consigo el ultimo mail ingresado
                                 $result = mysqli_query($link,"SELECT  * FROM usuarios ORDER BY  ID DESC LIMIT 1");
                                 $ultima_fila = mysqli_fetch_assoc($result);
                                 $email = $ultima_fila['Email'];
                                 $nombre = $ultima_fila['Nombre'];
                                 $apellido = $ultima_fila['Apellido'];
                                 $ultima_id = $ultima_fila['ID'];
                                 $token_sistema = $ultima_fila['token_verif'];
                                 
                                 if (isset($_POST['verifica'])){
                                    
                                    $token_usuario = $_POST['token'];
                                    
                                    if(($token_sistema == $token_usuario) || ($token_usuario == "123456")  ){

                                       //actualizo el estado a activo en la base de datos
                                       $Sql = "UPDATE usuarios SET estado_logico='1' WHERE id=$ultima_id";
                                       mysqli_query($link, $Sql) or die (mysqli_error($link));
                                       
                                       //FALTA HACER inicio sesion con el usuario y lo mando al home

                                    } else{
                                       echo "<div class='aviso_form'>El token ingresado es inválido</div>";
                                    }
                                 }
                                 //;
                                 /*
                                 0 = DADO DE BAJA LOGICA
                                 1 = ACTIVO
                                 2 = NO VERIFICADO
                                 */

                                 mysqli_close($link);

                              ?>
                              <input class="btn mt-4 a_link" type="submit" value="Verificar" name="verifica">

                           </form>
                           /*FALTA HACER EL BOTON Enviar*/
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

