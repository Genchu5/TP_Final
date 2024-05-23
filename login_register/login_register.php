<!doctype html>
<html lang="es">
<head >
   <title>D&B</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   <!- BOOTSTRAP ->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
   <!- LOGIN ->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   
   <!- NAVBAR ->
   <?php 
      include "../navbar/navbar.php"
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
               <div class="section pb-5 pt-5 pt-sm-2 text-center">
                  <h6 class="mb-0 pb-3"><span>Iniciar sesión</span><span>Registrarse</span></h6>
                  <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                  <label for="reg-log"></label>
                  <div class="card-3d-wrap mx-auto">
                     <div class="card-3d-wrapper">
                        <div class="card-front">
                           <div class="center-wrap">
                              <div class="section text-center">
                                 <h4 class="mb-4 pb-3">Iniciar sesión</h4>
                                 
                                 <form action="inicio_sesion.php" method="post">

                                    <div class="form-group">
                                       <input type="email" class="form-styles" placeholder="Email" name="email" >
                                       <i class="input-icon uil uil-at"></i>
                                    </div>	

                                    <div class="form-group mt-2">
                                       <input type="password" class="form-styles" placeholder="Contraseña" name="contraseña">
                                       <i class="input-icon uil uil-lock-alt"></i>
                                    </div>

                                    <input class="btn mt-4 a_link" type="submit" value="Iniciar sesión">

                                 </form>
                           
                                 <p class="mb-0 mt-4 text-center"><a href="main.php" class="link">¿Olvidaste tu contraeña?</a></p>

                              </div>
                           </div>
                        </div>
                        <div class="card-back">
                           <div class="center-wrap">
                              <div class="section text-center">
                                 <h4 class="mb-3 pb-3">Registrarse</h4>

                                 <form action="registro.php" method="post"></form>
                                    <div class="form-group">
                                       <input type="text" class="form-styles" placeholder="Nombre" name="nombre">
                                       <i class="input-icon uil uil-user"></i>
                                    </div>	

                                    <div class="form-group mt-2">
                                       <input type="text" class="form-styles" placeholder="Apellido" name="apellido">
                                       <i class="input-icon uil uil-at"></i>
                                    </div>
                                 
                                    <div class="form-group mt-2">
                                    <input type="email" class="form-styles" placeholder="Email" name="email" autocomplete="off">
                                       <i class="input-icon uil uil-at"></i>
                                    </div>
                                    
                                    <div class="form-group mt-2">
                                       <input type="password" class="form-styles" placeholder="Contraseña" name="contraseña">
                                       <i class="input-icon uil uil-lock-alt"></i>
                                    </div>

                                    <input class="btn mt-4 a_link" type="submit" value="Registrarse">
                                 </form>

                              </div>
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

