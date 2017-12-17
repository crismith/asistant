<?php 
require 'header.php';
require 'sidebar.php';
?>

<section id="content">
    <div class="page page-dashboard">
     <div class="page page-tables-footable">
        <div class="row">
            <div class="col-md-8">
                <section class="tile">

                    <!-- tile header -->
                    <div class="tile-header dvd dvd-btm">
                        <h1 class="custom-font"><strong>Cursos</strong></h1>
                    </div>
                    <!-- /tile header -->

                    <!-- tile body -->
                    <div class="tile-body p-0">

                        <div class="table-responsive">
                            <table class="table mb-0" id="usersList">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre</th>
                                        <th>Especialidad</th>
                                        <th>Ciclo</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0">
                                                <input type="checkbox" id="select-all"><i></i>
                                            </label>
                                        </td>
                                        <td>MarkMarkMarkMark</td>
                                        <td>OttoOttoOtto</td>
                                        <td>@mdomdomdo</td>
                                        <td>
                                            <a class="btn btn-rounded-50p btn-ef btn-ef-2 btn-ef-2-green btn-ef-2a mb-10 ml-10 wh50">
                                                <i class="fa fa-trash-o"></i>
                                            </a>

                                            <a class="btn btn-rounded-50p btn-ef btn-ef-2 btn-ef-2-green btn-ef-2a mb-10 ml-10 wh50">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0">
                                                <input type="checkbox" id="select-all"><i></i>
                                            </label>
                                        </td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <a class="btn btn-rounded-50p btn-ef btn-ef-2 btn-ef-2-green btn-ef-2a mb-10 ml-10 wh50">
                                                <i class="fa fa-trash-o"></i>
                                            </a>

                                            <a class="btn btn-rounded-50p btn-ef btn-ef-2 btn-ef-2-green btn-ef-2a mb-10 ml-10 wh50">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- tile footer -->
                    <div class="tile-footer dvd dvd-top">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <ul class="pagination pagination-sm m-0">
                                    <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li><a href="">5</a></li>
                                    <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <div class="tile-body p-0">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs tabs-dark" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#feed-all" aria-controls="all" role="tab" data-toggle="tab" aria-expanded="true">Docentes</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="feed-all">
                                <div class="wrap-reset" style="max-height: 216px;overflow:auto;">
                                    <div class="media ">
                                        <div class="pull-left thumb">
                                            <img class="media-object img-circle" src="assets/images/random-avatar8.jpg" alt="">
                                        </div>
                                        <div class="pull-right mt-10">
                                            <button type="button" class="btn btn-rounded-20 btn-default btn-sm mr-5" style="width:30px;"><i class="fa fa-pencil"></i></button>
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
        <!--/ final row -->
        <div class="row">

            <div  class="col-md-12">
                <section class="tile">
                    <!-- tile header -->
                    <div class="tile-header dvd dvd-btm">
                        <h1 class="custom-font"><strong>Carreras</strong></h1>
                    </div>
                    <div class="tile-body p-0">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="card">
                                    <img class="img-thumbnail" src="https://atasavvynewcomer.files.wordpress.com/2017/03/computerized-ata-certification-exam.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title" >Card title</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="img-thumbnail" src="https://atasavvynewcomer.files.wordpress.com/2017/03/computerized-ata-certification-exam.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title" >Card title</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="img-thumbnail" src="https://atasavvynewcomer.files.wordpress.com/2017/03/computerized-ata-certification-exam.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title" >Card title</h4>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </section>
                </div>

            </div>

        </div>

    </div>


</section>
<!--/ CONTENT -->

</div>
<!--/ Application Content -->

<?php 
require 'footer.php';

?>