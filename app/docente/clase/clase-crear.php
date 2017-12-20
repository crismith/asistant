<?php 
require '../../header.php';
require '../../sidebar.php';
?>

<section id="content">

    <div class="page page-dashboard">
        <div class="page page-forms-validate">
            <div class="row">
                <div class="col-md-12">
                    <section class="tile" ng-controller="creaClase">
                        <div class="tile-header dvd dvd-btm nav-tabs tabs-dark">
                            <h1 class="custom-font"><strong>Registrar </strong> Clase </h1>
                        </div>
                        <div class="tile-body">
                            <form >
                                <div class="row">
                                    <span class="controls pull-right">
                                        <a href="../curso/curso-info.php" class="btn btn-ef btn-ef-1 btn-ef-1-greensea btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip">
                                            <i class="fa fa-arrow-left"></i> Atras
                                        </a>
                                    </span>
                                    <div class="form-group col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="name">Titulo : </label>
                                                <input type="text" ng-model="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="name">descripción</label>
                                                <textarea class="form-control" ng-model="description" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="name">Modulo</label>
                                                <select ng-model="modulo" class="form-control">
                                                    <option>Modulo I</option>
                                                    <option>Modulo II</option>
                                                    <option>Modulo III</option>
                                                    <option>Modulo IV</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <h2 class="custom-font">
                                            <strong>AGREGAR </strong>Multimedia
                                        </h2>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="name">Imagenes</label>
                                                <br>
                                                <span class="btn btn-greensea fileinput-button">
                                                    <i class="fa fa-file-image-o"></i>
                                                    <span>Imagenes</span>
                                                    <input type="file" ng-model="imagen">
                                                </span>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="name">Videos</label>
                                                <br>
                                                <span class="btn btn-greensea fileinput-button">
                                                    <i class="fa fa-file-video-o"></i>
                                                    <span>Videos</span>
                                                    <input type="file" ng-model="video">
                                                </span>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="name">Diapositivas</label>
                                                <br>
                                                <span class="btn btn-greensea fileinput-button">
                                                    <i class="fa fa-file-powerpoint-o"></i>
                                                    <span>Power Point</span>
                                                    <input type="file" ng-model="diapositiva">
                                                </span>
                                            </div>
                                        </div>
                                        <hr>
                                        <hr>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="name">Fecha a dictar</label>
                                                <div class="input-group datepicker w-400" data-format="L">
                                                    <input type='text' ng-model="fecha" class="form-control" />
                                                    <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <button ng-click="creaClase()" class="btn btn-greensea mb-10">Guardar</button>
                        </section>
                    </div>
                </div>
            </div>    
        </div>
    </section>

    <?php 
    require '../../footer.php';
    ?>