<?php 
require '../../header.php';
require '../../sidebar.php';
?>
<section id="content">

    <div class="page page-dashboard">
        <div class="page page-forms-validate">
            <div class="row">
                <div class="col-md-12">
                    <section class="tile">
                        <div class="tile-header dvd dvd-btm nav-tabs tabs-dark">
                            <h1 class="custom-font"><strong>Registrar </strong>Docente</h1>
                        </div>
                        <div class="tile-body">
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Nombres * </label>
                                        <input type="text" name="nameDocente" id="nameDocente" class="form-control" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="contactemail">Apellidos * </label>
                                        <input type="text" name="apellidoDocente" id="apellidoDocente" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="name">Usuario *</label>
                                        <input type="email" name="usuario" id="usuario" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Contraseña *</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Correo Electronico *</label>
                                        <input type="email" name="correo" id="correo" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Confirmar Contraseña *</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Fecha de Nacimiento</label>
                                        <div class="input-group datepicker w-400" data-format="L">
                                           <input type='text' name="nacimientoDocente" class="form-control" />
                                           <span class="input-group-addon">
                                            <span class="fa fa-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Numero de documento</label>
                                    <input type="text" name="numerodocumento" id="numerodocumento" class="form-control" min="8" max="8" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Genéro</label>
                                    <select class="form-control mb-12" name="genero" id="genero">
                                       <option value="1">Masculino</option>
                                       <option value="2">Femenino</option>
                                   </select>
                               </div>
                               <div class="form-group col-md-6">
                                <label for="name">Especialidad</label>
                                <select class="form-control mb-12" name="especialidad" id="especialidad" required>
                                   <option value="1">Computación e Informatica</option>
                                   <option value="2">Contabilidad</option>
                                   <option value="3">Curso General</option>
                               </select>
                           </div>

                       </div>

                       <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Distrito</label>
                            <select class="form-control mb-12" name="distrito" id="distrito" required>
                               <option value="1">San Juan de Miraflores</option>
                               <option value="2">Chorrillos</option>
                               <option value="3">Villa el Salvador</option>
                           </select>
                       </div>
                       <div class="form-group col-md-6">
                        <label for="name">Dirección</label>
                        <input type="text" name="direccion" id="direccion" class="form-control">
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Celular</label>
                        <input type="text" name="celular" id="celular" class="form-control">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="avatar">Foto</label>
                        <input type="file" id="avatarDocente" class="filestyle" data-buttonText="imagen" data-iconName="fa fa-picture-o">
                    </div>

                </div>
            </form>
        </div>
        <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
            <button class="btn btn-greensea btn-ef btn-ef-7 btn-ef-7h mb-10"><i class="fa fa-envelope"></i> Guardar</button>
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