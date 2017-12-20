<?php 
require '../../header.php';
require '../../sidebar.php';
?>

<section id="content">
    <div class="page page-dashboard">
        <div class="page page-forms-validate">

            <div class="row">
                <div class="col-md-12">
                    <section class="tile" ng-controller="crearCarrera">
                        <div class="tile-header dvd dvd-btm nav-tabs tabs-dark">
                            <h1 class="custom-font"><strong>Registrar </strong>Especialidad</h1>
                        </div>
                        <div class="tile-body">
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nombre * </label>
                                        <input type="text" name="nameCarrera" ng-model="nameCarrera" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="image">Imagen del curso</label>
                                        <input type="file" name="imgCarrera" ng-model="imgCarrera" class="filestyle" data-buttonText="Foto" data-iconName="fa fa-picture-o" required>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group col-sm-6">
                                        <label for="cronogramaPdf">Cronograma Académico</label>
                                        <input type="file" ng-model="cronoPdf" name="cronoPdf" class="filestyle" data-buttonText="PDF" data-iconName="fa fa-file-pdf-o">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="mallaPdf">Malla Curricular</label>
                                        <input type="file" ng-model="mallaPdf" name="mallaPdf" class="filestyle" data-buttonText=" PDF" data-iconName="fa fa-file-pdf-o">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Descripción</label>
                                        <textarea name="description" ng-model="description" class="form-control" placeholder="Descripción de la carrera" rows="4"></textarea>

                                    </div>
    
                                </div>
                            </form>
                        </div>
                        <button ng-click="crearCarrera()" class="btn btn-greensea dvd dvd-top">Guardar</button>
                    </section>
                </div>
            </div>
        </div>    
    </div>
</section>

<?php 
require '../../footer.php';
?>