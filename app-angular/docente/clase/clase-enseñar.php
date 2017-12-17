<?php 
require '../../header.php';
require '../../sidebar.php';
?>
<section id="content">

<div class="page page-dashboard">
<div class="page page-shop-single-product">


    <div class="add-nav">
        <div class="nav-heading">
            <h3 ><strong> Desarrollo Web</strong></h3>
            <span class="controls pull-right">
                <a href="clase-lista.php" class="btn btn-ef btn-ef-1 btn-ef-1-greensea btn-ef-1a btn-rounded-20 mr-5" data-toggle="tooltip">
                    <i class="fa fa-arrow-left"></i> Atras
                </a>
            </span>
        </div>
    </div>


    <div role="tabpanel">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#principal" aria-controls="principal" role="tab" data-toggle="tab">Concepto</a></li>
                <li role="presentation">
                    <a href="#Imagenes" aria-controls="Imagenes" role="tab" data-toggle="tab">Imagenes</a></li>
                    <li role="presentation">
                        <a href="#Videos" aria-controls="Videos" role="tab" data-toggle="tab">Videos</a></li>
                        <li role="presentation">
                            <a href="#diapositiva" aria-controls="diapositiva" role="tab" data-toggle="tab">Diapositivas</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="principal">
                            <div class="row">
                                <div class="col-md-12">
                                    <section class="tile time-simple">
                                        <div class="tile-body">
                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <p class="text-md text-default">
                                                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                   </p>
                                               </div>
                                           </div>
                                       </div>
                                   </section>
                               </div>
                           </div>
                       </div>

                       <div role="tabpanel" class="tab-pane" id="Imagenes">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="tile">
                                    <div class="tile-header dvd dvd-btm">
                                        <h1 class="custom-font"><strong>Imagenes</strong></h1>
                                    </div>
                                    <div id="portfolio" class="portfolio portfolio-full portfolio-nospace portfolio-notitle">
                                        <div class="row">
                                            <div class="portfolio-item col-md-3 col-sm-6">
                                                <div class="portfolio-image">
                                                    <a href="#">
                                                        <img src="" alt="" class="img-responsive">
                                                    </a>
                                                    <div class="portfolio-overlay">
                                                        <a href="" class="btn-left&quot;" data-lightbox="iframe"><i class="fa fa-play"></i></a>
                                                        <a href="#" class="btn-right"><i class="fa fa-ellipsis-v"></i></a>
                                                    </div>
                                                </div>
                                                <div class="portfolio-desc">
                                                    <h3><a href="#">Eagle</a></h3>
                                                    <span><a href="#">Nature</a>, <a href="#">Animals</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!-- tab in tabs -->
                    <div role="tabpanel" class="tab-pane" id="Videos">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="tile">
                                    <div class="tile-header dvd dvd-btm">
                                        <h1 class="custom-font"><strong>Videoss</strong></h1>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <!-- tab in tabs -->
                    <div role="tabpanel" class="tab-pane" id="diapositiva">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="tile">
                                    <div class="tile-header dvd dvd-btm">
                                        <h1 class="custom-font"><strong>diapositivas </strong> diapositiva</h1>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!--/ CONTENT -->
    <?php 
    require '../../footer.php';
    ?>