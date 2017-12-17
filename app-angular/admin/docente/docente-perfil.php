<?php 
require '../../header.php';
require '../../sidebar.php';
?>

<section id="content">

    <div class="page page-dashboard">
        <div class="pageheader">
            <h2>Docentes</h2>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.php"><i class="fa fa-home"></i> Asistant</a>
                    </li>
                </ul>
                <span class="controls pull-right">
                    <a href="docentes.php" class="btn btn-ef btn-ef-1 btn-ef-1-greensea btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip">
                        <i class="fa fa-arrow-left"></i> Atras
                    </a>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="search" id="main-search">
                            <input type="text" class="form-control" placeholder="Buscar...">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div role="tabpanel">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="feed-all">
                                    <div class="wrap-reset" style="max-height: 416px;overflow:auto;">
                                        <div class="media ">
                                            <div class="pull-left thumb">
                                                <img class="media-object img-circle" src="../../assets/images/random-avatar8.jpg" alt="">
                                            </div>
                                            <div class="pull-right mt-10">
                                                <button type="button" class="btn btn-rounded-20 btn-default btn-sm" style="width:30px;"><i class="fa fa-eye" style="margin-left: -2px;"></i></button>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading mb-0 mt-10">Anna <strong>Opichia</strong></p>
                                                <small class="text-lightred">lead designer</small>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <section class="tile">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#datosDocente" aria-controls="datosDocente" role="tab" data-toggle="tab">Datos</a></li>
                                <li role="presentation">
                                    <a href="#cursos" aria-controls="cursos" role="tab" data-toggle="tab">Cursos</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane active" id="datosDocente">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <br>
                                            <div class_="row"> 
                                                <div class="col-sm-6 icon-perfilP">
                                                    <div class="icon-perfilD">
                                                        <a href="">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                    </div>
                                                    <div class="icon-perfilD">
                                                        <a href="">
                                                            <i class="fa fa-trash-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="boton-agrega">
                                                        <a href="docente-editar.php" class="btn btn-primary">Editar</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <br>
                                            <img src="../../assets/images/random-avatar8.jpg" alt="" class="img-responsive img-rounded">
                                        </div>
                                        <div class="col-sm-9">
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-4 ">
                                                    <h4 class="text-left"> Nombre  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h4>
                                                </div>
                                                <div class="col-sm-8">
                                                    <h5 class="text-left">Cristhian Smith Zeña Mas</h5>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-4 ">
                                                    <h4 class="text-left"> Especialidad  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h4>
                                                </div>
                                                <div class="col-sm-8">
                                                    <h5 class="text-left">Computacion Informatica</h5>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-4 ">
                                                    <h4 class="text-left"> Usuario &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h4>
                                                </div>
                                                <div class="col-sm-8">
                                                    <h5 class="text-left">cristian@ismen1.com</h5>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-4 ">
                                                    <h4 class="text-left"> Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h4>
                                                </div>
                                                <div class="col-sm-8">
                                                    <h5 class="text-left">cristian@gmail.com</h5>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-4 ">
                                                    <h4 class="text-left"> Celular &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h4>
                                                </div>
                                                <div class="col-sm-8">
                                                    <h5 class="text-left">980042279</h5>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-4 ">
                                                    <h4 class="text-left"> DNI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h4>
                                                </div>
                                                <div class="col-sm-8">
                                                    <h5 class="text-left">74395961</h5>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-4 ">
                                                    <h4 class="text-left"> Distrito &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h4>
                                                </div>
                                                <div class="col-sm-8">
                                                    <h5 class="text-left">Villa el Salvador</h5>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-4 ">
                                                    <h4 class="text-left"> Ubicacion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</h4>
                                                </div>
                                                <div class="col-sm-8">
                                                    <h5 class="text-left">Sector 3 Grupo 26 Manzana O Lt. 06</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div role="tabpanel" class="tab-pane" id="cursos">
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="thumbnail">
                                                    <img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4I_PFTRl6mQrJ-zox19Wq3bnUjeR1Jo5Z11KhWSFRcHPK5yuw">
                                                    <div class="caption">
                                                        <h3 class="text-center">Computacion Informatica</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="thumbnail">
                                                    <img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDJ6BVVNO1EoFLbbsvCzLhWrlb7D7GI-7xXQiCmpmkF5PIY5Y4">
                                                    <div class="caption">
                                                        <h3 class="text-center">Computacion Informatica</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="thumbnail">
                                                    <img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4I_PFTRl6mQrJ-zox19Wq3bnUjeR1Jo5Z11KhWSFRcHPK5yuw">
                                                    <div class="caption">
                                                        <h3 class="text-center">Computacion Informatica</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <?php 
        require '../../footer.php';
        ?>