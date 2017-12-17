<?php 
require 'header.php';
require 'sidebar.php';
?>

<section id="content">
    <div class="page page-dashboard">
     <div class="page page-tables-footable">
        <div class="row">
            <div class="col-md-12">
                <section class="tile">
                    <div class="tile-header dvd dvd-btm nav-tabs tabs-dark">
                        <h1 class="custom-font"><strong>Configuracion </strong>General</h1>
                    </div>
                    <div class="tile-body">
                        <form name="form2" role="form" id="form2" data-parsley-validate>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label> ¿Cuantos Ciclos tendras? </label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label> ¿Cuantos modulos tendras? </label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label> ¿Cuantos Ciclos tendras? </label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                                </div>                                            
                            </div>
                            
                        </form>
                    </div>
                    <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                        <button type="button" class="btn btn-greensea mb-10">Guardar</button>
                    </div>
                </section>
            </div>
        </div>
    </div>

</div>


</section>
<?php 
require 'footer.php';
?>