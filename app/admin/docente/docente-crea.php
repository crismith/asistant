<?php 
require '../../header.php';
require '../../sidebar.php';
?>
<section id="content">

    <div class="page page-dashboard">
        <div class="page page-forms-validate">
            <div class="row">
                <div class="col-md-12">
                    <section class="tile" ng-controller="creaDocente">
                        <div class="tile-header dvd dvd-btm nav-tabs tabs-dark">
                            <h1 class="custom-font"><strong>Registrar </strong>Docente</h1>
                        </div>
                        <div class="tile-body">
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nombres * </label>
                                        <input type="text" ng-model="name" class="form-control" >
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="contactemail">Apellidos * </label>
                                        <input type="text" ng-model="apellido" class="form-control" >
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label>Usuario *</label>
                                        <input type="email" ng-model="usuario" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Contraseña *</label>
                                        <input type="password" ng-model="password" class="form-control" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Correo Electronico *</label>
                                        <input type="email" ng-model="correo" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirmar Contraseña *</label>
                                        <input type="password" name="password" class="form-control" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Fecha de Nacimiento</label>
                                        <div class="input-group datepicker w-400" data-format="L">
                                            <input type='text' ng-model="nacimientoDocente" class="form-control" />
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Numero de documento</label>
                                        <input type="text" ng-model="dni" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Genéro</label>
                                        <select class="form-control mb-12" ng-model="genero">
                                           <option value="1">Masculino</option>
                                           <option value="2">Femenino</option>
                                       </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                    <label>Especialidad</label>
                                    <select class="form-control mb-12" ng-model="carrera">
                                        <option value="1">Computación e Informatica</option>
                                        <option value="2">Contabilidad</option>
                                        <option value="3">Curso General</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Distrito</label>
                                    <select class="form-control mb-12" ng-model="distrito" >
                                        <option value="1">San Juan de Miraflores</option>
                                        <option value="2">Chorrillos</option>
                                        <option value="3">Villa el Salvador</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Dirección</label>
                                    <input type="text" ng-model="direccion" class="form-control">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Celular</label>
                                    <input type="text" ng-model="celular" class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="avatar">Foto</label>
                                    <input type="file" ng-model="avatarDocente" class="filestyle" data-buttonText="imagen" data-iconName="fa fa-picture-o">
                                </div>

                            </div>
                        </form>
                    </div>
                    <button class="btn btn-greensea" ng-click="creaDocente()">Guardar</button>
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