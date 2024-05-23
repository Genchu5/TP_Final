


<?php
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $email = $_GET['email'];
    $contraseña = $_GET["contraseña"];
    
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/'; 
    
    include "conexion.php";

    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "SELECT Count(email) as canti FROM usuarios WHERE email='$email'"; //especificar los nombres de los campos que contienen los datos que quiere usar en una consulta.
    $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));//envía una única consulta a la base de datos actualmente activa en el servidor asociado con el identificador de enlace
    $vCantUsuarios = mysqli_fetch_assoc($vResultado);//Devuelve un array asociativo que corresponde a la fila recuperada y mueve el puntero de datos interno hacia adelante.

    //chequea que no se registren usuarios con el mismo mail;
    if ($vCantUsuarios ['canti']!=0){
        
        echo ("El Usuario ya Existe<br>");
        echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
    }
    else {
        $vSql = "INSERT INTO usuarios (ID,Nombre,Apellido,Email,Contraseña,Estado_logico)
        values ('','$nombre','$apellido','$email','$contraseña',1)";
        mysqli_query($link, $vSql) or die (mysqli_error($link));
        //HACER VERIFICACION POR MAIL
        header('location: verificacion_mail.php');

        // Liberar conjunto de resultados
        mysqli_free_result($vResultado);
    }
// Cerrar la conexion
mysqli_close($link);

?>
