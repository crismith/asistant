<?php 
require 'header.php';
require 'sidebar.php';
?>

<div id="wrap" class="animsition">

    <div class="page page-core page-login">

        <div class="text-center"><h3 class="text-light text-white"><span class="text-lightred">A</span>SISTANT</h3></div>

        <div class="container w-420 p-15 bg-white mt-40 text-center">

            <h2 class="text-light text-greensea">Recuperar Contraseña</h2>
            <form name="form" class="form-validation mt-20">

                <p class="help-block text-left">
                    Ingresa tu usuario:
                </p>

                <div class="form-group">
                    <input type="email" class="form-control underline-input" placeholder="Email">
                </div>

            </form>

            <div class="bg-slategray lt wrap-reset mt-20 text-left">
                <button class="btn btn-greensea text-center">Enviar</button>
            </div>

        </div>

    </div>
</div>

<?php 
require 'footer.php';
?>