<?php 
require '../../header.php';
require '../../sidebar.php';
?>

<section id="content">

    <div class="page page-dashboard">
        <div class="page page-forms-validate">
            <div class="pageheader">
                <h2>Asignar Docente</h2>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.php"><i class="fa fa-home"></i> Asistant</a>
                        </li>
                        <li>
                            <a href="cursos.php">Cursos</a>
                        </li>
                    </ul>
                    <span class="controls pull-right">
                        <a href="cursos.php" class="btn btn-ef btn-ef-1 btn-ef-1-greensea btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip">
                            <i class="fa fa-arrow-left"></i> Atras
                        </a>
                    </span>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section class="tile">
                        <div class="tile-body">
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Docente * </label>
                                        <select name="curso" id="" class="form-control" required>
                                            <option value="1">Juan</option>
                                            <option value="2">Lucho</option>
                                            <option value="3">Pepe</option>
                                            <option value="4">Manuel</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="contactemail">Curso * </label>
                                        <input type="text" name="nombre" disabled="" id="nombre" class="form-control" required>
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
<!--/ CONTENT -->
<?php 
require '../../footer.php';
?>