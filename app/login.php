<?php 
require 'header.php';
require 'sidebar.php';
?>

<div id="wrap" class="animsition">


    <div class="page page-core page-login">

        <div class="text-center">
            <h3 class="text-light text-white">
                <span class="text-lightred">A</span>SISTANT
            </h3>
        </div>

        <div class="container w-420 p-15 bg-white mt-40 text-center">
            <h2 class="text-light text-greensea">Login</h2>
            <form name="form" class="form-validation mt-20" novalidate="">
                <div class="form-group">
                    <input type="email" class="form-control " placeholder="Usuario">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Contraseña" class="form-control ">
                </div>
                <div class="form-group text-left mt-20">
                    <a href="index.html" class="btn btn-greensea b-0 br-2 mr-5">Ingresar</a>

                    <a href="" class="pull-right mt-10">Recuperar Contraseña ?</a>
                </div>
            </form>
        </div>
    </div>
</div>

</div>


<?php 
require 'footer.php';
?>