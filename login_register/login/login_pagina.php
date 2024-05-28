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
   
   <!- NAVBAR ->
   <?php 
      include "../navbar/navbar.php";
      
   ?>
   
   <!- STYLESHEET->
   <link rel="stylesheet" href="style_login.css?v=<?php echo time(); ?>">

</head>

<body>

   <div id="stars"></div>
   <div id="stars2"></div>
   <div id="stars3"></div>

   <div class="section">
      <div class="container">
         <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
               <div class="card-3d-wrap-login mx-auto">
                  <div class="card-front">
                     <div class="center-wrap">
                        <div class="section text-center">
                           <h4 class="mb-3 pb-3">Hola de nuevo!</h4>
                                 
                              <form action="inicio_sesion.php" method="GET">

                                 <div class="form-group">
                                    <input type="email" class="form-styles" placeholder="Email" name="email" >
                                    <i class="input-icon uil uil-at"></i>
                                 </div>	

                                 <div class="form-group mt-2">
                                    <input type="password" class="form-styles" placeholder="Contraseña" name="contraseña">
                                    <i class="input-icon uil uil-lock-alt"></i>
                                 </div>
                                 <p class="recupero_contra"><a href="main.php" class="link ">¿Olvidaste tu contraeña?</a></p>
                                 
                                 <input class="btn mt-4 a_link" type="submit" value="Iniciar sesión" name="entrada">

                              </form>
                              
                              
                           <div  class=" tc">
                              <p class="mb-0 mt-4">¿No tienes una cuenta? </p>
                              <a class="btn a_link btn-alt " href="../register/register.php">Registrate</a>
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

