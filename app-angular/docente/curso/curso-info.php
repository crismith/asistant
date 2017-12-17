<?php 
require '../../header.php';
require '../../sidebar.php';
?>

<section id="content">

    <div class="page page-dashboard">
        <div class="pageheader">
            <h2>Curso</h2>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.php"><i class="fa fa-home"></i> Asistant</a>
                    </li>
                    <li>
                        <a href="curso.php">Desarrollo GO</a>
                    </li>
                </ul>
                <span class="controls pull-right">
                    <a href="curso.php" class="btn btn-ef btn-ef-1 btn-ef-1-greensea btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip">
                        <i class="fa fa-arrow-left"></i> Atras
                    </a>
                </span>

            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="thumbnail">
                    <img src="https://ed.team/sites/default/files/styles/large/public/courses/images/go-poster-720_1.jpg?itok=fuVpgRze" class="img-responsive img-rounded" alt="">
                </div>
            </div>

            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="">Introduccion a Go</h2>
                    </div>
                    <div class="col-md-12">
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, facilis sapiente, asperiores commodi nostrum nemo ullam. Rerum vitae laudantium accusantium maxime praesentium, beatae blanditiis, accusamus cum laborum pariatur, harum perspiciatis?
                        </p>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, facilis sapiente, asperiores commodi nostrum nemo ullam. Rerum vitae laudantium accusantium maxime praesentium, beatae blanditiis, accusamus cum laborum pariatur, harum perspiciatis?
                        </p>
                    </div>
                    <div class="col-md-12">
                        <span class="controls pull-left">
                            <a href="../clase/clase-crear.php" class="btn btn-ef btn-ef-1 btn-ef-1-greensea btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip">
                                <i class="fa fa-book"></i> Crear Clases
                            </a>
                        </span>
                        <hr>
                        <span class="controls pull-left">
                            <a href="../clase/clase-lista.php"  class="btn btn-primary btn-border mb-10" data-toggle="tooltip">
                                <i class="fa fa-book"></i> Clases creadas
                            </a>
                        </span>

                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<?php 
require '../../footer.php';
?>