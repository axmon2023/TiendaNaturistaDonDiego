<?php
require_once('../../TNDD/vistas/header.php')



?>

<div>

    <div class="form dark">
    <div class="mt-50"><h5 class="text-center" style="color: yellow; font-size:x-large;">Formulario de compras</h5></div>

        <form method="post" action="../enviar.php" class="row g-3" style="display: flex; justify-content:center; align-items:center; margin-top:100px;">
            <div class="col-md-4">

                <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Nombre y apellido" require>
            </div>
            <div class="col-md-4">

                <input type="email" name="correo" class="form-control" id="inputEmail4" placeholder="Correo electrónico" require>
            </div>
            <div class="col-md-4">

                <input type="tel" name="telefono" class="form-control" id="inputel" placeholder="Telefono 00-000-00000000" pattern="[0-9]{2}-[0-9]{3}-[0-9]{8}">
            </div>
            <div class="col-8">

                <input type="text" name="direccion" class="form-control" id="inputAddress" placeholder="Direccion completa" require>
            </div>
            <div class="col-4">
                <input type="date" name="fecha" class="form-control" id="inputDate" placeholder="dd/mm/yy">
            </div>
    </div>
    <div class="col-12 d-flex" style="text-align: center; justify-content:center; margin-top:2rem;">
        <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
    </div>
    </form>






</div>
</div>



</div>



<div style="bottom: 0; padding: 100px; text-align: center;">

    <?php

    require_once('../../TNDD/vistas/footer.php')
    ?>
</div>

</html>