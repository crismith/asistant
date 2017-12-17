<?php 
require '../../header.php';
require '../../sidebar.php';
?>

<section id="content">
    <div class="page page-dashboard">
        <div class="page page-forms-validate">
            <div class="pageheader">
                <h2>Editar Especialidad</h2>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i> Asistant</a>
                        </li>
                        <li>
                            <a href="index.html">especialidad</a>
                        </li>
                    </ul>
                    <span class="controls pull-right">
                        <a href="carrera.html" class="btn btn-ef btn-ef-1 btn-ef-1-greensea btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip">
                            <i class="fa fa-arrow-left"></i> Atras
                        </a>
                    </span>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section class="tile">
                        <div class="tile-body">
                            <form name="form2" role="form" id="form2" data-parsley-validate>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nombre * </label>
                                        <input type="text" name="nameEspecialidad" id="nameEspecialidad" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="image">Imagen del curso</label>
                                        <input type="file" id="avatarCurso" class="filestyle" data-buttonText="Foto" data-iconName="fa fa-picture-o">
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="form-group col-sm-6">
                                        <label for="cronogramaPdf">Cronograma Académico</label>
                                        <input type="file" id="cronogramaPdf" class="filestyle" data-buttonText="PDF" data-iconName="fa fa-file-pdf-o">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="mallaPdf">Malla Curricular</label>
                                        <input type="file" id="mallaPdf" class="filestyle" data-buttonText=" PDF" data-iconName="fa fa-file-pdf-o">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Descripción</label>
                                        <textarea name="descriptionEspecialidad" id="" class="form-control" placeholder="description de la Especialidad" rows="4"></textarea>
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
require '../../footer.php';
?>