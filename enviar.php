<?php

require ("conexion.php");

if(isset($_POST['enviar'])) {
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['fecha']) >= 1
    ){
        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);
        $direccion = trim($_POST['direccion']);
        $fecha = trim($_POST['fecha']);
        $consulta = "INSERT INTO clientes(nombre, correo, telefono, direccion, fecha)
        VALUES ('$nombre', '$correo', '$telefono', '$direccion', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            ?>
            <body style="background-image: url(./Imagenes/Fondo1.webp);">
            <h3 class="d-flex justyfy-content-center align-items-center"  style="text-align:center; background-color: blue; color:white; font-size:larger;">¡Agregado!</h3>
            </body>
        
            <?php
        }else {
            ?>
            <h3 class="text-center" style="background-color: red; color:white; font-size:larger;">¡Error!</h3>
            <?php
        }  
    }
}

?>