<?php 
require '../../header.php';
require '../../sidebar.php';
?>


<section id="content">
    <div class="page page-dashboard">
       <div class="page page-tables-footable">
        <div class="row">
            <div class="col-md-12">
                <section class="tile" ng-controller="docentes">
                    <div class="tile-header dvd dvd-btm">
                        <h1 class="custom-font"><strong>Docentes</strong> </h1>
                    </div>
                    <div class="tile-body">
                        <div class="form-group">
                            <label for="filter" style="padding-top: 5px">Buscar : </label>
                            <input id="filter" type="text" class="form-control input-sm w-sm mb-12 inline-block" placeholder="Buscar Docente"/>
                        </div>
                        <div class="tile-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Especialidad</th>
                                        <th>Usuario</th>
                                        <th class="text-center">Acción</th>
                                    </tr>
                                </thead>
                                <tbody ng-if="docentes">
                                    <tr ng-repeat="docente in docentes | limitTo: 6" >
                                        <td>{{docente.name}}</td>
                                        <td>{{docente.apellido}}</td>
                                        <td>{{docente.carrera}}</td>
                                        <td>{{docente.usuario}}</td>
                                        <td>
                                            <a href="docente-curso.php" class="btn btn-greensea"><i class="fa fa-book"></i> Curso</a >

                                            <a href="docente-perfil.php" class="btn btn-greensea"><i class="fa fa-eye"> </i> Perfil</a >

                                            <a href="#" ng-click="deleteDocente(docente._id)" class="btn btn-greensea"><i class="fa fa-trash-o"> </i> Eliminar</a >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                        </div>
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